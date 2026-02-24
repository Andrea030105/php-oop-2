<?php

include __DIR__ . "/database.php";
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
            <?php
            foreach ($products as $item) {
            ?>
                <div class="col-4 my-3">
                    <div class="card" style="min-width: 18rem;">
                        <img src="<?php echo $item->img ?>" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title text-uppercase"><?php echo $item->name ?></h5>
                            <p class="card-text text-capitalize">
                                <?php
                                echo $item->category->icon . ' ' . $item->category->category_name;
                                echo "<br>", "Prezzo: ", $item->price, "<br>";
                                ?>
                                <?php
                                if (get_class($item) == 'food') {
                                    echo 'Peso: ' . $item->weight . '<br>';
                                    echo 'Ingredienti: ' . implode(', ', $item->ingredients);
                                }
                                ?>
                                <?php
                                if (get_class($item) == 'toy') {
                                    echo 'Taglia: ' . $item->size . '<br>';
                                }
                                ?>
                                <?php
                                if (get_class($item) == 'optional') {
                                    echo 'Materiale: ' . implode(', ', $item->material) . '<br>';
                                    echo 'Taglia: ' . $item->optional_size . '<br>';
                                }
                                ?>
                            </p>
                        </div>
                    </div>
                </div>
            <?php
            }
            ?>
        </div>
    </div>
</body>

</html>