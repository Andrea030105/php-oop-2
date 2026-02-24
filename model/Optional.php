<?php
class optional extends product
{
    public $material;
    public $optional_size;

    public function __construct($name, $price, $img, Category $category, $material, $optional_size)
    {
        parent::__construct($name, $price, $img, $category);
        $this->material = $material;
        $this->optional_size = $optional_size;
    }
}
