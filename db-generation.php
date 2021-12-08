<?php
include 'connection.php';

//Создание таблицы product
$sql = "CREATE TABLE IF NOT EXISTS product (
    id INT(7) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(30) NOT NULL,
    price INT(7) NOT NULL,
    amount INT(7) NOT NULL
)";

$conn->exec($sql);

//Создание таблицы product_properties
$sql = "CREATE TABLE IF NOT EXISTS product_properties  (
    id INT(7) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    product_id INT(7) NOT NULL,
    type VARCHAR(30) NOT NULL,
    value INT(3) NOT NULL
)";

$conn->exec($sql);


//Проверяем на существование записей в таблице
$sql = "SELECT 1 from product WHERE id >= 1 LIMIT 1";

$stmt = $conn->prepare($sql);
$stmt->execute();
$dataExists = $stmt->fetchColumn();

if ($dataExists == "1" ) {

    echo "Записи в таблицах существуют" . "<br>";

} else {
    echo "Записи в таблицы были добавлены" . "<br>";

    //Если таблицы пустые, то генерируем записи в таблице product
    $stmt = $conn->prepare("INSERT INTO product (id, name, price, amount) 
    VALUES (:id, :name, :price, :amount)");
    $stmt->bindParam(':id', $id);
    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':price', $price);
    $stmt->bindParam(':amount', $amount);

    //Генерируем записи в таблице product_properties
    $stmt2 = $conn->prepare("INSERT INTO product_properties (id, product_id, type, value )
    VALUES (:product_prop_id, :product_id, :type, :value)");

    $stmt2->bindParam(':product_prop_id', $product_prop_id);
    $stmt2->bindParam(':product_id', $product_id);
    $stmt2->bindParam(':type', $type);
    $stmt2->bindParam(':value', $value);

    $type_arr = [1 => 'color', 2 => 'size', 3 => 'material'];


    //вставляем 1000 товаров
    for ($i = 1; $i < 1001; $i++) {
        $id = '';
        $name = "Продукт-$i";
        $price = rand(1000, 9999);
        $amount = rand(0, 10);

        $product_prop_id = '';
        $product_id = "$i";
        $type_rand = rand(1, 3);
        $type = "$type_arr[$type_rand]";
        $value = "$type_rand";

        $stmt->execute();
        $stmt2->execute();
    }

}
$conn = null;








