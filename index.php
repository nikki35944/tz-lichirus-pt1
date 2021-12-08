<?php
include 'db-generation.php';
include 'filter.php';
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>tz-1</title>
</head>
<body>

<section>
    <div class="container">
        <div class="row">
            <div class="col-4">
                <h4>Фильтр по типу свойства товара</h4>
                <div class="form-check">
                    <input class="form-check-input products-input" type="checkbox" name="products[]" value="color" id="color">
                    <label class="form-check-label" for="color">
                        Color
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input products-input" type="checkbox" name="products[]" value="size" id="size" >
                    <label class="form-check-label" for="size">
                        Size
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input products-input" type="checkbox" name="products[]" value="material" id="material" >
                    <label class="form-check-label" for="material">
                        Material
                    </label>
                </div>
            </div>
            <?php

            ?>
            <div class="col-8">
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th scope="col">Название</th>
                        <th scope="col">Цена</th>
                        <th scope="col">Количество</th>
                    </tr>
                    </thead>
                    <tbody class="ajax-table">

                    </tbody>
                </table>
            </div>
            <div id="load_data_message"></div>
        </div>
    </div>
</section>


<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<!-- Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script type="text/javascript" src="filter.js"></script>
</body>
</html>
