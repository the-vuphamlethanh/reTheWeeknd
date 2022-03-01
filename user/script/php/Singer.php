<?php
class Singer
{
    // Properties
    private $idSinger, $nameSinger, $nickNameSinger, $gender, $description, $linkImage, $listAlbum;
    //Contructor
    function __construct($nameSinger, $nickNameSinger, $gender, $description, $linkImage, $listAlbum)
    {
        $this->idSinger = date("m-d-h-i-s-a");
        $this->nameSinger = $nameSinger;
        $this->nickNameSinger = $nickNameSinger;
        $this->gender = $gender;
        $this->description = $description;
        $this->linkImage = $linkImage;
        $this->listAlbum = $listAlbum;
    }


    // Methods

    function get_idSignger()
    {
        return $this->idSinger;
    }
    function set_nameSinger($nameSinger)
    {
        $this->nameSinger = $nameSinger;
    }
    function get_nameSinger()
    {
        return $this->nameSinger;
    }

    function set_nicknameSinger($nickNameSinger)
    {
        $this->nickNameSinger = $nickNameSinger;
    }
    function get_nickNameSinger()
    {
        return $this->nickNameSinger;
    }
    function set_gender($gender)
    {
        $this->gender = $gender;
    }
    function get_gender()
    {
        return $this->gender;
    }
    function set_description($description)
    {
        $this->description = $description;
    }
    function get_description()
    {
        return $this->description;
    }
    function set_linkImage($linkImage)
    {
        $this->linkImage = $linkImage;
    }
    function get_linkImage()
    {
        return $this->linkImage;
    }
    function set_listAlbum($listAlbum)
    {
        $this->listAlbum = $listAlbum;
    }
    function get_listAlbum()
    {
        return $this->listAlbum;
    }
}

