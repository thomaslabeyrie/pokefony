<?php

namespace App\Generated\PokeApi\Model;

class PaginatedStatSummaryList extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * @var int
     */
    protected $count;
    /**
     * @var string|null
     */
    protected $next;
    /**
     * @var string|null
     */
    protected $previous;
    /**
     * @var list<StatSummary>
     */
    protected $results;
    /**
     * @return int
     */
    public function getCount(): int
    {
        return $this->count;
    }
    /**
     * @param int $count
     *
     * @return self
     */
    public function setCount(int $count): self
    {
        $this->initialized['count'] = true;
        $this->count = $count;
        return $this;
    }
    /**
     * @return string|null
     */
    public function getNext(): ?string
    {
        return $this->next;
    }
    /**
     * @param string|null $next
     *
     * @return self
     */
    public function setNext(?string $next): self
    {
        $this->initialized['next'] = true;
        $this->next = $next;
        return $this;
    }
    /**
     * @return string|null
     */
    public function getPrevious(): ?string
    {
        return $this->previous;
    }
    /**
     * @param string|null $previous
     *
     * @return self
     */
    public function setPrevious(?string $previous): self
    {
        $this->initialized['previous'] = true;
        $this->previous = $previous;
        return $this;
    }
    /**
     * @return list<StatSummary>
     */
    public function getResults(): array
    {
        return $this->results;
    }
    /**
     * @param list<StatSummary> $results
     *
     * @return self
     */
    public function setResults(array $results): self
    {
        $this->initialized['results'] = true;
        $this->results = $results;
        return $this;
    }
}