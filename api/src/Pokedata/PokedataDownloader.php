<?php

namespace App\Pokedata;

use DirectoryIterator;
use Symfony\Component\DependencyInjection\Attribute\Autowire;
use Symfony\Contracts\HttpClient\HttpClientInterface;

final readonly class PokedataDownloader
{
    public function __construct(
        private HttpClientInterface $httpClient,

        #[Autowire('%kernel.project_dir%/var/pokedata')]
        private string $cacheDir,
    ) {}

    public function download(string $commit): string
    {
        $csvDir = "$this->cacheDir/csv-$commit";

        if (is_dir($csvDir)) {
            return $csvDir;
        }

        if (!is_dir($this->cacheDir)) {
            mkdir($this->cacheDir, 0o777, true);
        }

        $archive = "$this->cacheDir/$commit.tar.gz";
        $response = $this->httpClient->request('GET', "https://codeload.github.com/PokeAPI/pokeapi/tar.gz/$commit");
        $file = fopen($archive, 'w');

        $tmpDir = "$csvDir.tmp";
        if (!is_dir($tmpDir)) {
            mkdir($tmpDir);
        }

        foreach ($this->httpClient->stream($response) as $chunk) {
            fwrite($file, $chunk->getContent());
        }
        fclose($file);

        foreach (new DirectoryIterator("phar://$archive/pokeapi-$commit/data/v2/csv") as $entry) {
            if ($entry->isFile()) {
                copy($entry->getPathname(), "$tmpDir/{$entry->getFilename()}");
            }
        }

        rename($tmpDir, $csvDir);
        unlink($archive);

        return $csvDir;
    }
}
