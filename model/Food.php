<?php
class food extends product
{
    public $weight;
    public $ingredients;

    public function __construct($name, $price, $img, Category $category, $weight, $ingredients)
    {
        parent::__construct($name, $price, $img, $category);
        $this->weight = $weight;
        $this->ingredients = $ingredients;
    }
}
