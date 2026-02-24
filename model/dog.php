 <?php
    class dog extends product
    {
        public $img;
        public $title;
        public $price;
        public $icon;
        public $type;

        public function __construct(
            $category,
            $img,
            $title,
            $price,
            $icon,
            $type
        ) {
            parent::__construct($category);
            $this->img = $img;
            $this->title = $title;
            $this->price = $price;
            $this->icon = $icon;
            $this->type = $type;
        }
    }
