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
    <link rel="stylesheet" href="../CSS/addDelete_Product.css">
    <link rel="stylesheet" href="./CSS/index.css">
</head>
<body>
    <?php include ("./header.php"); ?>

    <div class="product-form">
        <h2>Product Add</h2>

        <div class="add-product-form">
            <div class="add-product-form-container">
                <form action="#" method ="POST" enctype="multipart/form-data">
                    <div class="add-porduct-row">
                        <input type="text" class="add-products-inputs" placeholder="Product Name">
                        <input type="text" class="add-products-inputs product-name-input" placeholder="Price">
                    </div>

                    <div class="add-product-row">
                        <input type="text" class="add-products-inputs" placeholder="Expire Date">
                        <input type="text" class="add-products-inputs" placeholder="Quantity">
                    </div>
                    <div class="add-product row">
                        <input type="file" class="add-product-inputs choose-file-input">
                    </div>
                    <div class="add-product-row">
                        <textarea>Description</textarea>
                    </div>

                    <div class="submit-button-container">
                        <button class="submit-button">Submit</button>
                    </div>

                </form>
            </div>
        
        </div>
    </div>
    
    <div class="product-container">
        <div class="product-heading">
            <h2 class="product-list-heading">Products</h2>
        </div>

        <div class="products-list-container">
            <table>
                <tr>
                    <th>Product ID</th>
                    <th>Product Name</th>
                    <th>Quantity</th>
                    <th>Price</th>
                    <th>Action</th>
                    <th>Action</th>
                </tr>
                <tr>
                    <td>001</td>
                    <td>Panadol</td>
                    <td>100.00</td>
                    <td>50</td>
                    <td><button class="edit-product-button">Edit</button></td>
                    <td><button class="delete-product-button">Delete</button></td>
                </tr>

                <tr>
                    <td>002</td>
                    <td>Panadol</td>
                    <td>100.00</td>
                    <td>50</td>
                    <td><button class="edit-product-button">Edit</button></td>
                    <td><button class="delete-product-button">Delete</button></td>
                </tr>

                <tr>
                    <td>003</td>
                    <td>Panadol</td>
                    <td>100.00</td>
                    <td>50</td>
                    <td><button class="edit-product-button">Edit</button></td>
                    <td><button class="delete-product-button">Delete</button></td>
                </tr>
            </table>
        </div>
    </div>

    <?php include ("./footer.php"); ?>
</body>
</html>