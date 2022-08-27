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
     * @param string $title
     * @param bool $state
     * @param DateTime|null $publishedAt
     */
    public function __construct(
        $title,
        $state,
        $publishedAt
    )
    {
        $this->title = $title;
        $this->state = $state;
        $this->publishedAt = $publishedAt;
    }

    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @return bool
     */
    public function getState()
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