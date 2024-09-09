<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Products</title>
    <link rel="stylesheet" href="./CSS/index.css">
    <link rel="stylesheet" href="./CSS/addDelete_Product.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="icon" type="image/png" sizes="32x32" href="./Images/Pharmacy X Icon.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./Images/Pharmacy X Icon.png">
</head>
<body>
    <?php include ("./header.php"); ?>

    <div class="product-form">
        <h2>Product Add</h2>
        <form action="#" method ="POST" enctype="multipart/form-data">
            <label for="title">Add Title :</lable>
            <input type="text" id="title" name="title" required>

            <label for="description">Add Description :</lable>
            <textarea id="description" name="description" rows="4" required></textarea>

            <label for="price">Price :</lable>
            <input type="number" id="price" name="price" required>

            <label for="quantity">Quantity Available :</lable>
            <input type="number" id="quantity" name="quantity" required>

            <label for="image">Choose Image :</lable>
            <input type="file" id="image" name="image" required>

 
        </form>
    </div>
    

    <?php include ("./footer.php"); ?>
</body>
</html>