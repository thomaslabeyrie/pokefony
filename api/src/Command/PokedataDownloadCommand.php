<?php

namespace App\Command;

use App\Pokedata\PokedataDownloader;
use Symfony\Component\Console\Attribute\Argument;
use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Style\SymfonyStyle;
use Symfony\Component\DependencyInjection\Attribute\Autowire;

#[AsCommand(name: 'app:pokedata:download', description: 'Download the PokéAPI CSVs only (no import)')]
final class PokedataDownloadCommand
{
  public function __construct(
      private readonly PokedataDownloader $downloader,
      #[Autowire('%pokedata.commit%')]
      private readonly string $pinnedCommit,
  ) {}

  public function __invoke(
      SymfonyStyle $io,
      #[Argument(description: 'Commit to download (defaults to the pinned one)')]
      ?string $commit = null,
  ): int {
      $commit ??= $this->pinnedCommit;
      $start = microtime(true);

      $dir = $this->downloader->download($commit);

      $io->success(sprintf(
          '%d CSV files in %s (%.1fs)',
          count(glob("{$dir}/*.csv")),
          $dir,
          microtime(true) - $start,
      ));

      return Command::SUCCESS;
  }
}
