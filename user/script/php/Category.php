<?php

class Category
{
    public $idCategory;
    public $category;
    public $description;

    /**
     * @param $idCategory
     * @param $category
     * @param $description
     */
    public function __construct($idCategory, $category, $description)
    {
        $this->idCategory = $idCategory;
        $this->category = $category;
        $this->description = $description;
    }
}