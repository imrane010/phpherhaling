<?php

class DiscMovie extends Movie
{
    private float $weight;

    public function getMovie(): string
    {
        $print = "movie =" . $this->name . "<br>" .
            "genre =" . $this->genre . "<br>" .
            "weight =" . $this->weight . "<br>" .
            "quality =" . $this->quality . "<br>" .

            return $print;
    }
    public function play()
    {
        $this->markAsSeen();
        // stop de disc in de speler en druk op play
    }
}

