<?php

class Album
{
    public $name = null;
    public $songs = [];
    

    public function calculateLength()
    {
        $length = null;
        foreach($this->songs as $song) {
            $length += $song->length;
        }
        return $length;
    }
}