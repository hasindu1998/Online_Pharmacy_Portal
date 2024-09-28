<?php 
//Deshan G G D IT23539372

session_start();

//check if the user is logged in
if(isset($_SESSION['username']))
{
    //check if the user is admin
    if($_SESSION['user_type']=='Admin')
    {
        require_once './db_Config/config.php';
    }
    else if($_SESSION['user_type']=='Manager')
    {
        header('location: ./manager_DB.php');
    }
    else
    {
        header('location: ./index.php');
    }
}
else
{
    header('location: ./index.php');
}


//Handle the form for creat and update
if($_SERVER['REQUEST_METHOD']==='POST')
{
    if(isset($_POST['action']))
    {
        $product_name = $_POST['product_name'];
        $price = $_POST['price'];
        $expire_date = $_POST['expire_date'];
        $quantity = $_POST['quantity'];
        $description = $_POST['description'];
        $image = $_POST['image'];
        //Upload an image




    
        if ($_POST['action'] == 'create') 
        {
            //Creat new products
            $sql = "INSERT INTO Products (product_name, product_description, price, stock_quantity, image_url)
            VALUES ('$product_name','$description','$price','$quantity','$image')";
        
        }
        //Update the products
        else if ($_POST['action'] == 'update')
        {
            $id = $_POST['product_id'];
            $sql ="UPDATE Products SET
            product_name = '$product_name',
            product_description = '$description',
            price = '$price',
            stork_quantity = '$quantity',
            image = '$image'
            WHERE id = '$product_id'";
        }

        if ($Connection->query($sql)===TRUE)
        {
            echo "Product save successfully.";
        }
        else
        {
            echo "Error!";
        }
    }
}
//Handle the product delation
if($_SERVER['REQUEST_METHOD']==='GET' && isset($_GET['delete']))
{
    $product_id = $_GET['delete'];
    $sql = "DELETE FROM Products id = '$product_id'";

    if ($Connection->query($sql)===TRUE)
    {
        echo "Product deleted.";
    }
    else
    {
        echo "Erroe deleting!";
    }
}    

//Products dispaling in the table
$products = [];
$sql = "SELECT * FROM Products";
$result = $Connection->query($sql);
if ($result-> num_row > 0)
{
    while($row = $result->fetch_assoc())
    {
        $products = $row;
    }
}

$Connection->close();

?>

























































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