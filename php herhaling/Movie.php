<?php

class Movie
{
    public string $name;
    public string $genre;
    public int $seen;
    protected string $quality = "Blue-ray";

    public function __construct(string $name, string $genre, int $seen, string $quality)
    {
        $this->name = $name;
        $this->genre = $genre;
        $this->seen = $seen;
    }
//    public function getname(): string
//    {
//        $this->name = $name;
//        $this->genre = $genre;
//        $this->seen = $seen;
//    }
    public function getName (): string
    {
        return $this->name;
    }

    protected function markAsSeen()
    {
        ++$this->seen;
    }
}
