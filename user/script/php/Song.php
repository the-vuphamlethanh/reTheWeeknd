<?php
class Song
{
    private $idSong;
    private $category;
    private $nameSong;
    private $imageSong;
    private $iframeSpotify;
    private $time;
    private $lyrics;
    public function __constructor($idSong, $category, $nameSong, $imageSong, $iframeSpotify, $time, $lyrics)
    {
        $this->idSong = date('Y-m-d H:i:s');
        $this->category = $category;
        $this->nameSong = $nameSong;
        $this->imageSong = $imageSong;
        $this->iframeSpotify = $iframeSpotify;
        $this->time = $time;
        $this->lyrics = $lyrics;
    }


    public function getIdSong()
    {
        return $this->idSong;
    }

    public function setCategory($category)
    {
        $this->category = $category;
    }
    public function getCategory()
    {
        return $this->category;
    }
    public function setNameSong($nameSong)
    {
        $this->nameSong = $nameSong;
    }
    public function getNameSong()
    {
        return $this->nameSong;
    }
    public function setImageSong($imageSong)
    {
        $this->imageSong = $imageSong;
    }
    public function getImageSong()
    {
        return $this->imageSong;
    }
    public function setIframeSpotify($iframeSpotify)
    {
        $this->iframeSpotify = $iframeSpotify;
    }
    public function getIframeSpotify()
    {
        return $this->iframeSpotify;
    }
    public function setTime($time)
    {
        $this->time = $time;
    }
    public function getTime()
    {
        return $this->time;
    }
    public function setLyrics($lyrics)
    {
        $this->lyrics = $lyrics;
    }
    public function getLyrics()
    {
        return $this->lyrics;
    }
}

