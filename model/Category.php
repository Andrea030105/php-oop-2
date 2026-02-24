<?php
class category
{
    public $category_name;
    public $icon;

    public function __construct($category_name, $icon)
    {
        $this->category_name = $category_name;
        $this->icon = $icon;
    }
}
