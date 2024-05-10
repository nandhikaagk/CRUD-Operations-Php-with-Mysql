<?php
include 'db_connection.php';

$id = $_POST['id'];
$name = $_POST['name'];
$price = $_POST['price'];
$description = $_POST['description'];

$sql = "UPDATE products SET name='$name', price='$price', description='$description' WHERE id=$id";

if ($conn->query($sql) === TRUE) {
    echo "Product updated successfully";
} else {
    echo "Error updating product: " . $conn->error;
}

$conn->close();
?>
