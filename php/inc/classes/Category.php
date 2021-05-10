<?php

class Category {

  // une propriété titre de la catégorie
  public $title;

  public function __construct($title = '')
  {
    $this->title=$title;
  }

}

?>