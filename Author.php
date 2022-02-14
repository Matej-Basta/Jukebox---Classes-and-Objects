<?php

class Author
{
    public $name = null;
    public $bio = null;
    public $image = null;
    public $songs = [];

    // public function __construct()
    // {
    //     $this->sayName();
    // }

    public function sayName()
    {
        echo "You are listening to {$this->name}.";
    }

}