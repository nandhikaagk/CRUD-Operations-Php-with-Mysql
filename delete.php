<?php
include 'db_connection.php';

$id = $_GET['id'];
$sql = "SELECT * FROM products WHERE id = $id";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $name = $row['name'];
} else {
    echo "Product not found";
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Confirm Delete</title>
</head>
<body>
    <h2>Confirm Delete</h2>
    <p>Are you sure you want to delete the product "<?php echo $name; ?>"?</p>
    <form action="delete_product.php" method="POST">
        <input type="hidden" name="id" value="<?php echo $id; ?>">
        <input type="submit" value="Delete">
    </form>
</body>
</html>
