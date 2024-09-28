<?php 
session_start();

//to check if the user is logged in
if(isset($_SESSION['username']))
{
    require_once './db_Config/config.php';
}
else
{
    header('location: ./signin.php');
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
    <link rel="stylesheet" href="./CSS/index.css">
    <link rel="stylesheet" href="./CSS/products.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="icon" type="image/png" sizes="32x32" href="./Images/Pharmacy X Icon.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./Images/Pharmacy X Icon.png">
</head>

<body>
    <?php include("./header.php"); ?>
    <div class="main-image-container">
        <div class="main-heading-container">
            <h1 class="main-heading">Order Medicine Easily by Uploading Prescription</h1>
            <button class="main-heading-button">Try Now</button>
        </div>
        
            <img src="./Images/Product-Page-Image.jpg" alt="" class="main-image">
        
        
    </div>

    <div class="products-section-container">
        <div class="products-heading-container">
            <div class="product-heading">Products</div>
        </div>

        <?php
            $sql = "SELECT product_name,product_description,price FROM products";

            $result = mysqli_query($Connection,$sql);

                while($row = $result -> fetch_assoc()){

                    $productName = $row['product_name'];
                    $productDescription = $row['product_description'];
                    $price = $row['price'];

                    echo "<div class="products-container">
                            <div class="product-image-container">
                                <img src="./Images/product-icons/Pharmacy-Isometric-Icons-1.png" alt="" class="item-image">
                            </div>
                            <div class="product-details-container">
                                <p class="item-name">$productName</p>
                                <p class = "product-discription">$productDescription</p>
                                <p class="item-price">Rs.100.00</p>
                                <button class="item-buynow-button">$price</button>
                            </div>
                         </div>";
                }
        
        ?>
         <div class="product-content-container">
            <div class="products-container">
                <div class="product-image-container">
                    <img src="./Images\product-icons\Pharmacy-Isometric-Icons-1.png" alt="" class="item-image">
                </div>
                <div class="product-details-container">
                    <p class="item-name">Panadol</p>
                    <p class = "product-discription">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Obcaecati corporis velit error  </p>
                    <p class="item-price">Rs.100.00</p>
                    <button class="item-buynow-button">Buy Now</button>
                </div>
            </div>

            <div class="products-container">
                <div class="product-image-container">
                    <img src="./Images\product-icons\Pharmacy-Isometric-Icons-2.png" alt="" class="item-image">
                </div>
                <div class="product-details-container">
                    <p class="item-name">Panadol</p>
                    <p class = "product-discription">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Obcaecati corporis velit error  </p>
                    <p class="item-price">Rs.100.00</p>
                    <button class="item-buynow-button">Buy Now</button>
                </div>
            </div>

            <div class="products-container">
                <div class="product-image-container">
                    <img src="./Images\product-icons\Pharmacy-Isometric-Icons-3.png" alt="" class="item-image">
                </div>
                <div class="product-details-container">
                    <p class="item-name">Panadol</p>
                    <p class = "product-discription">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Obcaecati corporis velit error  </p>
                    <p class="item-price">Rs.100.00</p>
                    <button class="item-buynow-button">Buy Now</button>
                </div>
            </div>

            <div class="products-container">
                <div class="product-image-container">
                    <img src="./Images\product-icons\Pharmacy-Isometric-Icons-4.png" alt="" class="item-image">
                </div>
                <div class="product-details-container">
                    <p class="item-name">Panadol</p>
                    <p class = "product-discription">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Obcaecati corporis velit error  </p>
                    <p class="item-price">Rs.100.00</p>
                    <button class="item-buynow-button">Buy Now</button>
                </div>
            </div>

            <div class="products-container">
                <div class="product-image-container">
                    <img src="./Images\product-icons\Pharmacy-Isometric-Icons-5.png" alt="" class="item-image">
                </div>
                <div class="product-details-container">
                    <p class="item-name">Panadol</p>
                    <p class = "product-discription">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Obcaecati corporis velit error  </p>
                    <p class="item-price">Rs.100.00</p>
                    <button class="item-buynow-button">Buy Now</button>
                </div>
            </div>

            <div class="products-container">
                <div class="product-image-container">
                    <img src="./Images\product-icons\Pharmacy-Isometric-Icons-9.png" alt="" class="item-image">
                </div>
                <div class="product-details-container">
                    <p class="item-name">Panadol</p>
                    <p class = "product-discription">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Obcaecati corporis velit error  </p>
                    <p class="item-price">Rs.100.00</p>
                    <button class="item-buynow-button">Buy Now</button>
                </div>
            </div>

            <div class="products-container">
                <div class="product-image-container">
                    <img src="./Images\product-icons\Pharmacy-Isometric-Icons-6.png" alt="" class="item-image">
                </div>
                <div class="product-details-container">
                    <p class="item-name">Panadol</p>
                    <p class = "product-discription">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Obcaecati corporis velit error  </p>
                    <p class="item-price">Rs.100.00</p>
                    <button class="item-buynow-button">Buy Now</button>
                </div>
            </div>

            <div class="products-container">
                <div class="product-image-container">
                    <img src="./Images\product-icons\Pharmacy-Isometric-Icons-7.png" alt="" class="item-image">
                </div>
                <div class="product-details-container">
                    <p class="item-name">Panadol</p>
                    <p class = "product-discription">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Obcaecati corporis velit error  </p>
                    <p class="item-price">Rs.100.00</p>
                    <button class="item-buynow-button">Buy Now</button>
                </div>
            </div>

            <div class="products-container">
                <div class="product-image-container">
                    <img src="./Images\product-icons\Pharmacy-Isometric-Icons-8.png" alt="" class="item-image">
                </div>
                <div class="product-details-container">
                    <p class="item-name">Panadol</p>
                    <p class = "product-discription">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Obcaecati corporis velit error  </p>
                    <p class="item-price">Rs.100.00</p>
                    <button class="item-buynow-button">Buy Now</button>
                </div>
            </div>

            <div class="products-container">
                <div class="product-image-container">
                    <img src="./Images\product-icons\Pharmacy-Isometric-Icons-9.png" alt="" class="item-image">
                </div>
                <div class="product-details-container">
                    <p class="item-name">Panadol</p>
                    <p class = "product-discription">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Obcaecati corporis velit error  </p>
                    <p class="item-price">Rs.100.00</p>
                    <button class="item-buynow-button">Buy Now</button>
                </div>
            </div>

            <div class="products-container">
                <div class="product-image-container">
                    <img src="./Images\product-icons\Pharmacy-Isometric-Icons-1.png" alt="" class="item-image">
                </div>
                <div class="product-details-container">
                    <p class="item-name">Panadol</p>
                    <p class = "product-discription">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Obcaecati corporis velit error  </p>
                    <p class="item-price">Rs.100.00</p>
                    <button class="item-buynow-button">Buy Now</button>
                </div>
            </div>

            <div class="products-container">
                <div class="product-image-container">
                    <img src="./Images\product-icons\Pharmacy-Isometric-Icons-9.png" alt="" class="item-image">
                </div>
                <div class="product-details-container">
                    <p class="item-name">Panadol</p>
                    <p class = "product-discription">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Obcaecati corporis velit error  </p>
                    <p class="item-price">Rs.100.00</p>
                    <button class="item-buynow-button">Buy Now</button>
                </div>
            </div>

            <div class="products-container">
                <div class="product-image-container">
                    <img src="./Images\product-icons\Pharmacy-Isometric-Icons-2.png" alt="" class="item-image">
                </div>
                <div class="product-details-container">
                    <p class="item-name">Panadol</p>
                    <p class = "product-discription">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Obcaecati corporis velit error  </p>
                    <p class="item-price">Rs.100.00</p>
                    <button class="item-buynow-button">Buy Now</button>
                </div>
            </div>

            <div class="products-container">
                <div class="product-image-container">
                    <img src="./Images\product-icons\Pharmacy-Isometric-Icons-3.png" alt="" class="item-image">
                </div>
                <div class="iproduct-details-container">
                    <p class="item-name">Panadol</p>
                    <p class = "product-discription">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Obcaecati corporis velit error  </p>
                    <p class="item-price">Rs.100.00</p>
                    <button class="item-buynow-button">Buy Now</button>
                </div>
            </div>

            <div class="products-container">
                <div class="product-image-container">
                    <img src="./Images\product-icons\Pharmacy-Isometric-Icons-4.png" alt="" class="item-image">
                </div>
                <div class="product-details-container">
                    <p class="item-name">Panadol</p>
                    <p class = "product-discription">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Obcaecati corporis velit error  </p>
                    <p class="item-price">Rs.100.00</p>
                    <button class="item-buynow-button">Buy Now</button>
                </div>
            </div>

            <div class="products-container">
                <div class="product-image-container">
                    <img src="./Images\product-icons\Pharmacy-Isometric-Icons-5.png" alt="" class="item-image">
                </div>
                <div class="product-details-container">
                    <p class="item-name">Panadol</p>
                    <p class = "product-discription">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Obcaecati corporis velit error  </p>
                    <p class="item-price">Rs.100.00</p>
                    <button class="item-buynow-button">Buy Now</button>
                </div>
            </div>

            <div class="products-container">
                <div class="product-image-container">
                    <img src="./Images\product-icons\Pharmacy-Isometric-Icons-6.png" alt="" class="item-image">
                </div>
                <div class="product-details-container">
                    <p class="item-name">Panadol</p>
                    <p class = "product-discription">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Obcaecati corporis velit error  </p>
                    <p class="item-price">Rs.100.00</p>
                    <button class="item-buynow-button">Buy Now</button>
                </div>
            </div>

            <div class="products-container">
                <div class="product-image-container">
                    <img src="./Images\product-icons\Pharmacy-Isometric-Icons-9.png" alt="" class="item-image">
                </div>
                <div class="product-details-container">
                    <p class="item-name">Panadol</p>
                    <p class = "product-discription">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Obcaecati corporis velit error  </p>
                    <p class="item-price">Rs.100.00</p>
                    <button class="item-buynow-button">Buy Now</button>
                </div>
            </div> 
        </div>
    </div>

    <?php include("./footer.php"); ?>
</body>

</html>