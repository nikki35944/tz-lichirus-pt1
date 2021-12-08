<?php


if (isset($_POST['request'])) {
    include 'connection.php';
    $request = $_POST['request'];

    //разбиваем строку на массив для корректировки разделителей для sql запроса
    $request = implode("','", $request);

    $sql = "SELECT name, price, amount 
        FROM product 
        INNER JOIN product_properties ON product_id = product.id WHERE type IN ('$request')  AND product.amount > 0 LIMIT 50";

    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $dataExists = $stmt->fetchColumn();


    if ($dataExists) {

        foreach ($conn->query($sql) as $row) {
            echo '<tr>';
            echo '<td>' . $row['name'] . '</td>';
            echo '<td>' . $row['price'] . '</td>';
            echo '<td>' . $row['amount'] . '</td>';
            echo '<tr>';
        }

    }
}


