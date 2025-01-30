<?php

class DownloadMovie extends Movie
{
    private int $fileSize;

   public function __construct(string $name, string $genre, int $seen, int $fileSize = 0)
    {
    parent::__construct($name, $genre, $seen);
    $this->fileSize = $fileSize;

    }
//    public function setFileSize(int $fileSize = 0)
//    {
//        $this->fileSize = $fileSize;
//    }
    public function setQualilty(string $quality)
    {
        $print = "movie =" . $this->name . "<br>" .
            "genre =" . $this->genre . "<br>" .
            "filesize =" . $this->fileSize . "<br>" .
            "quality =" . $quality . "<br>" .

            return $print;
    }
    public function play()
    {
        $this->markAsSeen();
        // selecteer film van hd / website en druk op play
    }

    public function markAsSeen(): string
    {
        return "de naam van de film is:". $this->name;
    }
}

