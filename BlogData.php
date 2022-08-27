<?php

class BlogData
{
    private string $title;

    private bool $state;

    private ?DateTime $publishedAt;

    public function __construct(
        string $title,
        bool $state,
        ?DateTime $publishedAt = null
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

    public function getPublishedAt(): ?DateTime
    {
        return $this->publishedAt;
    }
}