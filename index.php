<?php

require_once "Author.php";
require_once "Song.php";
require_once "Album.php";

$M83 = new Author;
$M83->name = "M83";
$M83->bio = "M83 is a French rock group formed in Antibes in 1999 and currently based in Los Angeles. Initially a duo of multi-instrumentalists Nicolas Fromageau and Anthony Gonzalez, Fromageau parted ways shortly after touring for their second album Dead Cities, Red Seas & Lost Ghosts.";
$M83->image = "https://upload.wikimedia.org/wikipedia/commons/thumb/f/f5/M83_mp3h1704.jpg/1280px-M83_mp3h1704.jpg";
$M83->albums = [];

$album1 = new Album;
$album1->name = "Dead Cities, Red Seas & Lost Ghosts";
$M83->albums[] = $album1;

$song1 = new Song;
$song1->name = "Birds";
$song1->length = 3.5;
$album1->songs[] = $song1;

$song2 = new Song;
$song2->name = "Unrecorded";
$song2->length = 2.9;
$album1->songs[] = $song2;

$song3 = new Song;
$song3->name = "In Church";
$song3->length = 3.3;
$album1->songs[] = $song3;

$album2 = new Album;
$album2->name = "Junk";
$album2->songs = [$song1, $song2, $song3];
$M83->albums[] = $album2;






include 'json.php';