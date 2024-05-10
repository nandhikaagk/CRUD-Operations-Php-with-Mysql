<?php include 'db_connection.php'; ?>

<!DOCTYPE html>
<html>
<head>
    <title>Add Product</title>
</head>
<body>
    <h2>Add Product</h2>
    <form action="insert_product.php" method="POST">
        Name: <input type="text" name="name"><br>
        Price: <input type="text" name="price"><br>
        Description: <textarea name="description"></textarea><br>
        <input type="submit" value="Add Product">
    </form>
</body>
</html>
