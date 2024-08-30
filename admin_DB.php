<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="icon" type="image/png" sizes="32x32" href="./Images/Pharmacy X Icon.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./Images/Pharmacy X Icon.png">
    <link rel="stylesheet" href="./CSS/admin_DB.css">
</head>
<body>
    <?php include ("./header.php"); ?>

    <div class="Container1">
        <div class="user_box">
            <h2 class="user-heading">Manage Users</h2>
            <div class="user_content">
                <div class="check-users">
                    <form action="admin_DB.php" method="POST">
                        <input type="text" class="check-user-input" placeholder="Username">
                        <button type="submit" class="check-user-button">Check</button>
                    </form>
                </div>

                <div class="user-satus-container">
                    <h3 class="status-heading">Status : </h3>
                    <div class="user-status">Active</div>
                </div>

                <div class="user-control-buttons">
                    <button class="action_btn bg">Activate</button>
                    <button class="action_btn bg">Deactivate</button>
                    <button class="delete">Delete</button>
                </div>
            </div>
        </div>

        <div class="stat_box">
            <h2 class="user-heading">User Statistics Overview</h2>
            <div class="stat_content">
                <h3>Total Registered Users:  <span class="stat_value">550</span></h3>
                <h3>Active Users: <span class="stat_value">530</span></h3>
                <h3>Deactivated Users: <span class="stat_value">20</span></h3>
            </div>
        </div>
    </div>

    <div class="Container2">
        <h2>Order Requests</h2>
        <div class="order_content">

        </div>
    </div>

    <hr class="order_hr">

    <div class="manage_product">
        <form>
            <button type="" class="action_btn bg">Add/Delete Products</button>
        </form>
    </div>

    <?php include ("./footer.php"); ?>
</body>
</html>