<?php

include __DIR__ . "/database.php";

$dog_1 = new dog(
    "cane",
    "https://www.oasiacquarossa.it/image/cache/data/prodotti/cucciolo-dagel-dogs-700x700.png",
    "crocchette cane 20 kg",
    "17,99",
    "<i class='fa-solid fa-dog'></i>",
    "cane"
);

$dog_2 = new dog(
    "cane",
    "https://img.aosomcdn.com/thumbnail/100/n0/product/2025/10/07/tR2661199be716e83.jpg",
    "cuccia cane tagli piccola",
    "50,99",
    "<i class='fa-solid fa-dog'></i>",
    "cane"
);

$cat_1 = new dog(
    "gatto",
    "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQHQecwjJjWSqRM7ea76vyUT_tz4vr5iaOJbQ&s",
    "crocchette gatto 10 kg",
    "10,50",
    "<i class='fa-solid fa-cat'></i>",
    "gatto"
);

$cat_2 = new dog(
    "gatto",
    "https://www.bauzaar.it/cdn/shop/files/grafiche_prodotti_magento_600x600_-_2021-11-22t123325.910_1.png?v=1767927643&width=600",
    "coda gioco gatto",
    "5",
    "<i class='fa-solid fa-cat'></i>",
    "gatto"
);
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP 2</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body>
    <div class="container">
        <div class="row flex-wrap m-5">
            <div class="col-4 my-3">
                <div class="card" style="min-width: 18rem;">
                    <img src="<?php echo $dog_1->img ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title text-uppercase"><?php echo $dog_1->title ?></h5>
                        <p class="card-text text-capitalize">
                            <?php echo $dog_1->icon,  $dog_1->type  ?>
                            <?php echo "<br>", "Prezzo: ", $dog_1->price ?>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-4 my-3">
                <div class="card" style="min-width: 18rem;">
                    <img src="<?php echo $dog_2->img ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title text-uppercase"><?php echo $dog_2->title ?></h5>
                        <p class="card-text text-capitalize">
                            <?php echo $dog_2->icon,  $dog_2->type  ?>
                            <?php echo "<br>", "Prezzo: ", $dog_2->price ?>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-4 my-3">
                <div class="card" style="min-width: 18rem;">
                    <img src="<?php echo $cat_1->img ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title text-uppercase"><?php echo $cat_1->title ?></h5>
                        <p class="card-text text-capitalize">
                            <?php echo $cat_1->icon,  $cat_1->type  ?>
                            <?php echo "<br>", "Prezzo: ", $cat_1->price ?>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-4 my-3">
                <div class="card" style="min-width: 18rem;">
                    <img src="<?php echo $cat_2->img ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title text-uppercase"><?php echo $cat_2->title ?></h5>
                        <p class="card-text text-capitalize">
                            <?php echo $cat_2->icon,  $cat_2->type  ?>
                            <?php echo "<br>", "Prezzo: ", $cat_2->price ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>