<?php

class BlogData
{
    public function __construct(
        private string $title,
        private bool $state,
        private ?DateTime $publishedAt = null
    )
    {
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