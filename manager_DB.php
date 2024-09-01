<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Manager Dashboard</title>
  <link rel="stylesheet" href="./CSS/index.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
  <link rel="icon" type="image/png" sizes="32x32" href="./Images/Pharmacy X Icon.png">
  <link rel="icon" type="image/png" sizes="16x16" href="./Images/Pharmacy X Icon.png">
  <link rel="stylesheet" href="./CSS/manager_DB.css">
</head>

<body>
  <?php include("./header.php"); ?>

  <div class="manager-dashboard-container">
    <div class="orders-container">
      <h1 class="manager-headings">Orders</h1>
      <div class="order-table">

      </div>
    </div>

    <div class="total-amount-container">
      <h2 class="total-amount-heading">Today Earned Amount: </h2>
      <div class="total-amount-show-box"></div>
    </div>

    <div class="manage-admin-container">
      <div class="add-admin-container">
        <h1 class="manager-headings">Add Admin</h1>

        <div class="admin-form-container">
          <form action="manager_DB.php" method="POST">
            <div class="admin-form">
              <div class="form-rows">
                <input type="text" class="form-input-box" placeholder="First Name">
                <input type="text" class="form-input-box-right" placeholder="Last Name">
              </div>
              <div class="form-rows">
                <input type="text" class="form-input-box" placeholder="Username">
                <input type="text" class="form-input-box-right" placeholder="E mail">
              </div>
              <div class="form-rows">
                <input type="text" class="form-input-box" placeholder="Enter Password">
                <input type="text" class="form-input-box-right" placeholder="Re-Enter Password">
              </div>
              <div class="add-admin-button-container">
                <button type="submit" class="add-admin-button">Add Admin</button>
              </div>
            </div>
          </form>
        </div>
      </div>

      <div class="control-admins">
        <h1 class="manager-headings">Manage Admins</h1>

        <div class="control-admin-form">
          <div class="check-admin">
            <form action="manager_DB.php" method="POST">
              <input type="text" class="check-admin-input" placeholder="Username">
              <button type="submit" class="check-admin-button">Check</button>
            </form>
          </div>

          <div class="admin-satus-container">
            <h3 class="status-heading">Status : </h3>
            <div class="admin-status">Active</div>
          </div>

          <div class="admin-control-buttons">
            <button class="activate">Activate</button>
            <button class="deactivate">Deactivate</button>
            <button class="delete">Delete</button>
          </div>
        </div>
      </div>
    </div>
  </div>

  <?php include("./footer.php"); ?>
  <script src="./js/index.js"></script>
</body>

</html>