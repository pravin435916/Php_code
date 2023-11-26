<?php
class Song {
    /** @var string The title of the song. */
    private $title;

    /** @var string The artist of the song. */
    private $artist;

    /** @var string The genre of the song. */
    private $genre;

    /** @var float The tempo of the song. */
    private $tempo;

    /**
     * Get the title of the song.
     * @return string
     */
    public function getTitle() {
        return $this->title;
    }

    /**
     * Set the title of the song.
     * @param string $title
     */
    public function setTitle($title) {
        $this->title = $title;
    }

    /**
     * Get the artist of the song.
     * @return string
     */
    public function getArtist() {
        return $this->artist;
    }

    /**
     * Set the artist of the song.
     * @param string $artist
     */
    public function setArtist($artist) {
        $this->artist = $artist;
    }

    /**
     * Get the genre of the song.
     * @return string
     */
    public function getGenre() {
        return $this->genre;
    }

    /**
     * Set the genre of the song.
     * @param string $genre
     */
    public function setGenre($genre) {
        $this->genre = $genre;
    }

    /**
     * Get the tempo of the song.
     * @return float
     */
    public function getTempo() {
        return $this->tempo;
    }

    /**
     * Set the tempo of the song.
     * @param float $tempo
     */
    public function setTempo($tempo) {
        $this->tempo = $tempo;
    }
}
