<?php
include 'db_connection.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM products WHERE id = $id";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $name = $row['name'];
        $price = $row['price'];
        $description = $row['description'];
    } else {
        echo "Product not found";
        exit();
    }
} else {
    echo "Product ID not provided";
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Product</title>
</head>
<body>
    <h2>Edit Product</h2>
    <form action="update_product.php" method="POST">
        <input type="hidden" name="id" value="<?php echo $id; ?>">
        Name: <input type="text" name="name" value="<?php echo $name; ?>"><br>
        Price: <input type="text" name="price" value="<?php echo $price; ?>"><br>
        Description: <textarea name="description"><?php echo $description; ?></textarea><br>
        <input type="submit" value="Update Product">
    </form>
</body>
</html>
