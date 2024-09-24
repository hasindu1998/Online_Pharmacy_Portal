<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PharmacyX</title>
    <link rel="stylesheet" href="./CSS/index.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="icon" type="image/png" sizes="32x32" href="./Images/Pharmacy X Icon.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./Images/Pharmacy X Icon.png">
</head>
<body>
    <?php include ("./header.php"); ?>

    <div class="slider">
        <div class="slides">
            <img class="slide" src="images/slide01.jpg" alt="">
            <img class="slide" src="images/slide02.jpg" alt="">
            <img class="slide" src="images/slide03.jpg" alt="">
        </div>
        <button class="prev" onclick="prevSlide()">&#10094</button>
        <button class="next" onclick="nextSlide()">&#10095</button>
    </div>

    <section class="popular-products">
        <h2><b>Popular Products</b></h2>
        <div class="products">
            <div class="product-content">
                <img class="item" src="./Images\product-icons\Pharmacy-Isometric-Icons-1.png" alt="">
                <h3>Vitamin</h3>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Obcaecati corporis velit error  </p>
                <h6>Rs.3200.00</h6>
                <ul>
                    <li><i class="fa fa-star checked"></i></li>
                    <li><i class="fa fa-star checked"></i></li>
                    <li><i class="fa fa-star checked"></i></li>
                    <li><i class="fa fa-star checked"></i></li>
                    <li><i class="fa fa-star"></i></li>
                </ul>
            </div>
            <div class="product-content">
                <img class="item" src="./Images\product-icons\Pharmacy-Isometric-Icons-1.png" alt="">
                <h3>Skin care</h3>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Obcaecati corporis velit error  </p>
                <h6>Rs.3000.00</h6>
                <ul>
                    <li><i class="fa fa-star checked"></i></li>
                    <li><i class="fa fa-star checked"></i></li>
                    <li><i class="fa fa-star checked"></i></li>
                    <li><i class="fa fa-star"></i></li>
                    <li><i class="fa fa-star"></i></li>
                </ul>
            </div>
            <div class="product-content">
                <img class="item" src="./Images\product-icons\Pharmacy-Isometric-Icons-1.png" alt="">
                <h3>Pain Killers</h3>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Obcaecati corporis velit error </p>
                <h6>Rs.1000.00</h6>
                <ul>
                    <li><i class="fa fa-star checked"></i></li>
                    <li><i class="fa fa-star checked"></i></li>
                    <li><i class="fa fa-star checked"></i></li>
                    <li><i class="fa fa-star"></i></li>
                    <li><i class="fa fa-star"></i></li>
                </ul>
            </div>
            <div class="product-content">
                <img class="item" src="./Images\product-icons\Pharmacy-Isometric-Icons-1.png" alt="">
                <h3>panadol</h3>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Obcaecati corporis velit error  </p>
                <h6>Rs.800.00</h6>
                <ul>
                    <li><i class="fa fa-star checked"></i></li>
                    <li><i class="fa fa-star checked"></i></li>
                    <li><i class="fa fa-star checked"></i></li>
                    <li><i class="fa fa-star checked"></i></li>
                    <li><i class="fa fa-star checked"></i></li>
                </ul>
            </div>
        </div>
        <button class="buy-now-button"><a href="products.php">Buy Now</a></button>
    </section>
    
    <?php include ("./footer.php"); ?>
    <script src="./js/index.js"></script>
    
</body>
</html>