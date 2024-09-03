<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Profile</title>
    <link rel="stylesheet" href="./CSS/index.css">
    <link rel="stylesheet" href="./CSS/my_account.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="icon" type="image/png" sizes="32x32" href="./Images/Pharmacy X Icon.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./Images/Pharmacy X Icon.png">
</head>
<body>
    <?php include ("./header.php"); ?>

    <div class="my-account-content">
        <div class="account-information-form-container">
            <form action="my_account.php" method="post">
                <div class="my-account-form">
                <h3>Account Information</h3>
                  <div class="form-row">
                     <input type="text" name="name" id="form-input-box" placeholder="First Name" required>
                     <input type="text" name="name" id="form-input-box-right" placeholder="Last Name" required>
                  </div>
                  <div class="from-row">
                     <input type="text" name="name" id="form-input-box" placeholder="Username" required>
                     <input type="phone" name="mobile" id="form-input-box-right"  placeholder="Phone Number" required>
                  </div>
                  <div class="form-row">
                     <input type="email" name="email" id="form-input-box" placeholder="Email" required>
                  </div>
                  <div class="save-changes-container">
                     <button type="submit" class="save-changes-button" >Save Changes</button>
                  </div>
                </div>
            </form>
        </div>
        <div class="edit-container">
                
            <div class="delete-account-container">
                <button type="submit" class="delete-account-button">Delete Acoount</button>
            </div>
        </div>
        <div class="change-password-form-container">
            <form action="my_account.php" method="post">
                <div class="change-password-form">
                    <h3>Change Password</h3>
                    <div class="form-row">
                        <input type="password" name="password" id="form-input-box" placeholder="Current Password" required>
                    </div>
                    <div class="form-row">
                        <input type="password" name="password" id="form-input-box" placeholder="New Password" required>
                        <input type="password" name="password" id="form-input-box-right" placeholder="Confirm Password" required>
                    </div>
                    <div class="save-changes-container">
                        <button type="submit" class="save-changes-button" >Save Changes</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <h2 class="inbox"><b>Inbox</b></h2>
    <div class="inbox-container">
            
            <div class="inbox-content">

            </div>
     </div>

    

    <?php include ("./footer.php"); ?>
</body>
</html>