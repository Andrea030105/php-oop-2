<?php
class toy extends product
{
    public $size;

    public function __construct($name, $price, $img, Category $category, $size)
    {
        parent::__construct($name, $price, $img, $category);
        $this->size = $size;
    }
}
