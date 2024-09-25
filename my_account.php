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
            <div class="edit-container">
                <div class="profile-pic">
                  <img src="my-account-icon.jpg">
                </div>
                   <a href="#">Edit Profile</a>
                     <div class="delete-account-container">
                       <button type="submit" class="delete-account-button">Delete Acoount</button>
                     </div>
                </div>
        <div class="box">
        <div class="account-information-form-container">
               <form action="my_account.php" method="post">
                  <div class="my-account-form">
                  <h3>Account Information</h3>
                     <div class="account-edit">
                        <div class="input-container">
                           <label>First Name</label>
                           <input type="text"  required>
                        </div>
                        <div class="input-container">
                           <label>Last Name</label>
                           <input type="text"  required>
                        </div>
                     </div>
                     <div class="account-edit">
                         <div class="input-container">
                           <label>Username</label>
                           <input type="text"  required>
                         </div>
                         <div class="input-container">
                           <label>Phone Number</label>
                           <input type="text"  required>
                         </div>
                     </div>
                     <div class="account-edit">
                         <div class="input-container">
                            <label>Email</label>
                            <input type="email"  required>
                         </div>
                     </div>
                     <div class="save-changes-container">
                         <button type="submit" class="save-changes-button" >Save Changes</button>
                     </div>
                  </div>
               </form>
            </div>
            <div class="change-password-form-container">
            <form action="my_account.php" method="post">
                 <div class="change-password-form">
                 <h3>Change Password</h3>
                 <div class="account-edit">
                    <div class="input-container">
                      <label>Current Password</label>
                      <input type="password" required>
                    </div>
                 </div>
                 <div class="account-edit">
                   <div class="input-container">
                     <label>New Password</label>
                     <input type="password" id="newPassword" onkeyup="checkPsassword()" required>
                   </div>
                   <div class="input-container">
                     <label>Confirm Password</label>
                     <input type="password" id="confirmPassword" onkeyup="checkPsassword()" required>
                  </div>
                 </div>
                 <div class="save-changes-container">
                     <button type="submit" class="save-changes-button" >Save Changes</button>
                     <p id="error-message" style="color: red;"> </p>
                 </div>
                 </div>
            </form>
          </div>
        </div>
     </div>
    <h2 class="inbox"><b>Inbox</b></h2>
    <div class="inbox-container">
            
            <div class="inbox-content">

            </div>
     </div>

    
    <script src="./js/my_account.js"></script>
    <?php include ("./footer.php"); ?>
</body>
</html>