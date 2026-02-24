<?php
include __DIR__ . "/model/Product.php";
include __DIR__ . "/model/Category.php";
include __DIR__ . "/model/Toy.php";
include __DIR__ . "/model/Food.php";
include __DIR__ . "/model/Optional.php";


$categories = [
    'cane' => new Category('Cane', '<i class="fa-solid fa-dog"></i>'),
    'gatto' => new Category('Gatto', '<i class="fa-solid fa-cat"></i>'),
    'uccello' => new Category('Uccello', '<i class="fa-solid fa-dove"></i>'),
    'pesce' => new Category('Pesce', '<i class="fa-solid fa-fish"></i>')
];

$products = [
    new Food(
        'Croccantini',
        17.99,
        'https://img.aosomcdn.com/thumbnail/100/n0/product/2025/10/07/tR2661199be716e83.jpg',
        $categories['cane'],
        10,
        ['tacchino', 'pollo']
    ),
    new Food(
        'Croccantini gatto',
        17.99,
        'https://img.aosomcdn.com/thumbnail/100/n0/product/2025/10/07/tR2661199be716e83.jpg',
        $categories['gatto'],
        10,
        ['pollo']
    ),
    new Toy(
        'Croccantini gatto',
        17.99,
        'https://img.aosomcdn.com/thumbnail/100/n0/product/2025/10/07/tR2661199be716e83.jpg',
        $categories['cane'],
        10
    ),
    new Toy(
        'Croccantini gatto',
        17.99,
        'https://img.aosomcdn.com/thumbnail/100/n0/product/2025/10/07/tR2661199be716e83.jpg',
        $categories['gatto'],
        5
    ),
    new Optional(
        'Voliera uccelli',
        200.00,
        'https://img.aosomcdn.com/thumbnail/100/n0/product/2025/10/07/tR2661199be716e83.jpg',
        $categories['uccello'],
        ['accaio', 'allumino'],
        5
    ),
    new Optional(
        'Topi per gatto',
        5.99,
        'https://img.aosomcdn.com/thumbnail/100/n0/product/2025/10/07/tR2661199be716e83.jpg',
        $categories['gatto'],
        ['corda'],
        5
    ),
    new Optional(
        'Osso di gomma per cane',
        10.99,
        'https://img.aosomcdn.com/thumbnail/100/n0/product/2025/10/07/tR2661199be716e83.jpg',
        $categories['cane'],
        ['gomma'],
        7
    ),
];
