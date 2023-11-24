// practicals/song.php

class song {
    private $title;
    private $artist;
    private $genre;
    private $tempo;

    public function getTitle() {
        return $this->title;
    }

    
    public function setTitle($title) {
        $this->title = $title;
    }

   
    public function getArtist() {
        return $this->artist;
    }


    public function setArtist($artist) {
        $this->artist = $artist;
    }

  
    public function getGenre() {
        return $this->genre;
    }


    public function setGenre($genre) {
        $this->genre = $genre;
    }

  
    public function getTempo() {
        return $this->tempo;
    }

    public function setTempo($tempo) {
        $this->tempo = $tempo;
    }
}
