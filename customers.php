<?php
include 'config.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $dni = $_POST['dni'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];

    $sql = "INSERT INTO customers (name, dni, phone, email) VALUES ('$name', '$dni', '$phone', '$email')";
    if ($conn->query($sql) === TRUE) {
        echo "Cliente registrado exitosamente.";
    } else {
        echo "Error: " . $conn->error;
    }
}
$conn->close();
?>
