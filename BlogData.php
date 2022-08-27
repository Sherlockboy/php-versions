<?php

class BlogData
{
    /** @var string */
    private $title;

    /** @var bool */
    private $state;

    /** @var DateTime|null */
    private $publishedAt;

    /**
     * @param DateTime|null $publishedAt
     */
    public function __construct(
        string $title,
        bool $state,
        $publishedAt = null
    )
    {
        $this->title = $title;
        $this->state = $state;
        $this->publishedAt = $publishedAt;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getState(): bool
    {
        return $this->state;
    }

    /**
     * @return DateTime|null
     */
    public function getPublishedAt()
    {
        return $this->publishedAt;
    }
}