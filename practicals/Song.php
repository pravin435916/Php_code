<?php

namespace Practicals;
class Song {
    // Properties
    private $title;
    private $artist;
    private $album;
    private $year;
    // Constructor
    public function __construct($title, $artist, $album, $year) {
        $this->title = $title;
        $this->artist = $artist;
        $this->album = $album;
        $this->year = $year;
    }
    // Getter for title
    public function getTitle() {
        return $this->title;
    }
    // Setter for title
    public function setTitle($title) {
        $this->title = $title;
    }
    // Getter for artist
    public function getArtist() {
        return $this->artist;
    }
    // Setter for artist
    public function setArtist($artist) {
        $this->artist = $artist;
    }
    // Getter for album
    public function getAlbum() {
        return $this->album;
    }
    // Setter for album
    public function setAlbum($album) {
        $this->album = $album;
    }
    // Getter for year
    public function getYear() {
        return $this->year;
    }
    // Setter for year
    public function setYear($year) {
        $this->year = $year;
    }
}
?>