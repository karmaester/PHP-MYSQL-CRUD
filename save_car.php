<?php

    include("db.php");
 
 if (isset($_POST['save_car'])){
     $register = $_POST['register'];
     $serial_engine = $_POST['serial_engine'];
     $serial_chassis = $_POST['serial_chassis'];
     $brand = $_POST['brand'];
     $year = $_POST['year'];
     $model = $_POST['model'];
     $color = $_POST['color'];
     $price = $_POST['price'];

    $query = "INSERT INTO cars(register, serial_engine, serial_chassis, brand, year, model, color, price) VALUES ('$register', '$serial_engine', '$serial_chassis', '$brand', '$year', '$model', '$color', '$price')";
    $result = mysqli_query($conn, $query);
    if (!$result) {
        die("Query failed");
    }

    $_SESSION['message'] = 'Task Saved Successfully';
    $_SESSION['message_type'] = 'success';
    header("Location: index.php");
    
}
?>