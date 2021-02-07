<?php

    include("db.php");
 
 if (isset($_POST['save_car'])){
     $register = $_POST['register'];
     $serial_engine = $_POST['serial_engine'];
     $serial_chassis = $_POST['serial_chassis'];
     $brand = $_POST['brand'];
     $model = $_POST['model'];
     $color = $_POST['color'];
     $price = $_POST['price'];

    $query = "INSERT INTO cars(register, serial_engine, serial_chassis, brand, model, color, price) VALUES ('$register', '$serial_engine', '$serial_chassis', '$brand', '$model', '$color', '$price')";
    $result = mysqli_query($conn, $query);
    if (!$result) {
        die("Query failed");
    }

    header("Location: index.php");
    echo 'saved';
}
?>