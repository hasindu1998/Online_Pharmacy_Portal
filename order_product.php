<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Now</title>
    <link rel="stylesheet" href="./CSS/index.css">
    <link rel="stylesheet" href="./CSS/order_product.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet" >
    <link rel="icon" type="image/png" sizes="32x32" href="./Images/Pharmacy X Icon.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./Images/Pharmacy X Icon.png">
   
</head>
<body>
    <?php include ("./header.php"); ?>

    <div class="container">
        
        <h2>Place Your Order</h2>
        <form action="#" method="POST" >
            <div class="step">
                <h3>Step 1</h3>
                <label for="username">First Name</label>
                <input type="text" id="username" name="username" placeholder="Enter Your User Name" required>

                <label for="fullname">Last Name</label>
                <input type="text" id="fullname" name="Last name" placeholder="Enter Your Full Name" required>

                <label for="name">Address</label>
                <input type="text" id="Home Address"  placeholder="Enter Your Home Address" required>
                <input type="text" id="street" placeholder="street"  placeholder="Street" required>
                <input type="text" id="City"  placeholder="City" required>

                <label>Date </label>
                <input type="date" id="date" name="date" >

                <label for="postal-code">Postal Code</label>
                <input type="text" id="postal-code" name="postal_code" placeholder="Enter Your Postal Code" required>

                <label for="order">Order</label>
                <select id="order" name="order">
                    <option value="" disabled selected>select</option>
                    <option value="item1">Item 1</option>
                    <option value="item2">Item 2</option>
                    <option value="item3">Item 3</option>
                     <option value="item4">Item 4</option>
                    <option value="item5">Item 5</option>
                    
                </select>

                <label for="quantity">Quantity</label>
                <input type="number" id="quantity" name="quantity" min="1" value="1">

                <label for="prescription">Add Your Prescription</label>
                <input type="file" id="prescription-file" name="prescription_file">
                <br>
                
                
                <button type="button" id = place-order-btn name="order_btn">OK/Place My Order</button>
                <button type="button"id = update-btn name="update_btn"> Update Order </button>
                <button type="button"id = delete-order-btn name="delete_btn"> Delete Order </button>
                
                
            </div>

            <hr>
            <div class="step">
                <h3>Step 2</h3>
                <label for="calculated-amount">Calculated Amount</label>
                <input type="text" id="calculated-amount" name="calculated_amount" readonly>
            </div>

           
            <hr>
            <div class="step">
                <h3>Step 3</h3>
                <label for="deposited-amount">Deposited Amount</label>
                <input type="number" id="deposited-amount" name="deposited_amount" required>

                <label for="deposited-date">Deposited Date</label>
                <input type="date" id="deposited-date" name="deposited_date" required>

                <label for="bank">Bank</label>
                <input type="text" id="bank" name="bank" required>

                <label for="branch">Branch</label>
                <input type="text" id="branch" name="branch" required>

                <label for="payment-slip">Add Your Payment Slip</label>
                <input type="file" id="payment-slip" name="payment_slip" required>

                <label for="payment-remark">Payment Remark</label>
                <textarea id="payment-remark" name="payment_remark" placeholder="Type your comments" required></textarea>
               

                <button type="button"id = submit-btn> Submit </button>
            </div>
        </form>
    </div>

    <?php include ("./footer.php"); ?>
</body>
</html>