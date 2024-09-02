<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="./CSS/partials.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"/> <!--For dropdown menu-->
    <script src="./js/partials.js"></script>
</head>
<body>
    <header>
        <div class="main_header">
            <img src="images/Pharmacy X.png" alt="PharmacyX Logo">
            <nav>
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="aboutUs.php">About</a></li>
                    <li><a href="products.php">Products</a></li>
                    <li><a href="contact.php">Contact</a></li>
                </ul>
            </nav>
            <!--<button onclick="window.location.href='signin.php'">Sign in</button>-->
            <div class="user_profile" onclick="dropdownmenu()">
                <img src="./Images/student-avatar-illustratio.jpg" alt="User Profile">
                <h3 class="username no-select">Hello <?php echo("Hasindu") ?> <i class="fas fa-caret-down"></i></h3>
                <div class="Profile_dropdown" id="prof_dropdown">
                    <div class="dropdown_items">
                        <a href="my_account.php">My Profile</a>
                        <a href="logout.php">Sign Out</a>
                    </div>
                </div>
            </div>
        </div>
    </header>
</body>
</html>