<?php
include 'config.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $customer_id = $_POST['customer_id'];
    $car_id = $_POST['car_id'];
    $date = $_POST['date'];

    $sql = "INSERT INTO purchases (customer_id, car_id, date) VALUES ('$customer_id', '$car_id', '$date')";
    if ($conn->query($sql) === TRUE) {
        echo "Compra registrada exitosamente.";
    } else {
        echo "Error: " . $conn->error;
    }
}
$conn->close();
?>
