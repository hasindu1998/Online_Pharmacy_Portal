<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Orders</title>
    <link rel="stylesheet" href="./CSS/index.css">
    <link rel="stylesheet" href="./CSS/my_orders.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="icon" type="image/png" sizes="32x32" href="./Images/Pharmacy X Icon.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./Images/Pharmacy X Icon.png">
</head>
<body>
    <?php include ("./header.php"); ?>

    <div class="container1">
        <h2>My Orders</h2>

        <div class="table_container">
            <table>
                <tr>
                    <th>Order ID</th>
                    <th>Order Date</th>
                    <th>Product</th>
                    <th>Order Status</th>
                    <th>Order Total</th>
                </tr>
                <tr>
                    <td>1</td>
                    <td>2021-08-01</td>
                    <td>Panadol</td>
                    <td><span class="status">Delivered</span></td>
                    <td>Rs. 5000</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>2021-08-05</td>
                    <td>Siddhalepa Balm</td>
                    <td><span class="status">Delivered</span></td>
                    <td>Rs. 3000</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>2021-08-10</td>
                    <td>Whitening Cream</td>
                    <td><span class="status">Delivered</span></td>
                    <td>Rs. 7000</td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>2021-08-15</td>
                    <td>Mass Gainer</td>
                    <td><span class="status">Processing</span></td>
                    <td>Rs. 9000</td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>2021-08-20</td>
                    <td>Vitamin C</td>
                    <td><span class="status">Pending Approval</span></td>
                    <td>Rs. 12000</td>
                </tr>
                <tr>
                    <td>6</td>
                    <td>2021-08-25</td>
                    <td>Vitamin E</td>
                    <td><span class="status">Pending Approval</span></td>
                    <td>Rs. 2000</td>
                </tr>
            </table>
        </div>
    </div>


    <?php include ("./footer.php"); ?>
</body>
</html>