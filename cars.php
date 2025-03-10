<?php
include 'config.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $brand = $_POST['brand'];
    $model = $_POST['model'];
    $license_plate = $_POST['license_plate'];
    $price = $_POST['price'];

    $sql = "INSERT INTO cars (brand, model, license_plate, price) VALUES ('$brand', '$model', '$license_plate', '$price')";
    if ($conn->query($sql) === TRUE) {
        echo "Auto registrado exitosamente.";
    } else {
        echo "Error: " . $conn->error;
    }
}
$conn->close();
?>
