<?php
include 'db_connection.php';

$name = $_POST['name'];
$price = $_POST['price'];
$description = $_POST['description'];

$sql = "INSERT INTO products (name, price, description) VALUES ('$name', '$price', '$description')";

if ($conn->query($sql) === TRUE) {
    echo "Product added successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
