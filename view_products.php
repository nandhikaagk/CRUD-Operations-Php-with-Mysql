<?php
include 'db_connection.php';

// Fetch products from the database
$sql = "SELECT * FROM products";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "ID: " . $row['id'] . "<br>";
        echo "Name: " . $row['name'] . "<br>";
        echo "Price: $" . $row['price'] . "<br>";
        echo "Description: " . $row['description'] . "<br>";
        echo '<a href="edit_product.php?id=' . $row['id'] . '">Edit</a><br><br>';
        echo '<a href="delete.php?id=' . $row['id'] . '">Delete</a><br><br>';

    }
} else {
    echo "No products found";
}

$conn->close();
?>
