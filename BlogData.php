<?php

readonly class BlogData
{
    public function __construct(
        public string $title,
        public bool $state,
        public ?DateTime $publishedAt = null
    )
    {
    }
}