<?php

class ListCategory
{
    private array $listCategory;
    function addCategory($category){
        $this->listCategory->add($category);
    }
}

function createCategory(){
    $idCategory; //get from form
    $category;//get from form
    $description;//get from form

    return Category(1,2,3);
}

$ListCategory = new ListCategory();
$ListCategory->addCategory(createCategory());