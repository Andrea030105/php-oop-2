<?php
class product
{
    public $name;
    public $price;
    public $img;
    public $category;

    public function __construct($name, $price, $img, Category $category)
    {
        $this->name = $name;
        $this->price = $price;
        $this->img = $img;
        $this->category = $category;
    }
}
