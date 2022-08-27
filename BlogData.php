<?php

class BlogData
{
    public function __construct(
        public readonly string $title,
        public readonly bool $state,
        public readonly ?DateTime $publishedAt = null
    )
    {
    }
}