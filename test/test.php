<?php
class Singer {
    // Properties
    private string $idSinger;
    private $nameSinger, $nickNameSinger, $gender, $description,$linkImage, $listIdAlbum;
    //Contructor
    function __construct(string $idSinger,string $nameSinger,$nickNameSinger,$gender,$description,$linkImage,$listIdAlbum) {
        $this->idSinger = $idSinger;
        $this->nameSinger = $nameSinger ;
        $this->nickNameSinger = $nickNameSinger ;
        $this->gender = $gender;
        $this->description = $description ;
        $this->linkImage=$linkImage;
        $this->listIdAlbum=$listIdAlbum;
    }

    // Methods

    function set_idSignger($idSinger) {
        $this->idSinger = $idSinger;
    }
    function get_idSignger() {
        return $this->idSinger;
    }
    function set_nameSinger($nameSinger) {
        $this->nameSinger = $nameSinger;
    }
    function get_nameSinger() {
        return $this->nameSinger;
    }

    function set_nicknameSinger($nickNameSinger) {
        $this->nickNameSinger = $nickNameSinger;
    }
    function get_nickNameSinger() {
        return $this->nickNameSinger;
    }
    function set_gender($gender) {
        $this->gender = $gender;
    }
    function get_gender() {
        return $this->gender;
    }
    function set_description($description) {
        $this->description = $description;
    }
    function get_description() {
        return $this->description;
    }
    function set_linkImage($linkImage) {
        $this->linkImage = $linkImage;
    }
    function get_linkImage() {
        return $this->linkImage;
    }
    function set_listIdAlbum($listIdAlbum) {
        $this->listIdAlbum = $listIdAlbum;
    }
    function get_listIdAlbum() {
        return $this->listIdAlbum;
    }
}
