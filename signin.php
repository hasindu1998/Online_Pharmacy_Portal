<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In</title>
    <link rel="stylesheet" href="./css/signin.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="icon" type="image/png" sizes="32x32" href="./Images/Pharmacy X Icon.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./Images/Pharmacy X Icon.png">
</head>
<body>
    <div class="signin_title">
        <h1>PharmacyX</h1>
        <p>Online Pharmacy Portal</p>
    </div>
    <div class="signin_content">
        <div class="signin_img">
            <img src="./Images/Pharmacy-Illustration.png" alt="Sign In">
        </div>
        <div class="signin_form">
            <h2>Sign in</h2>
            <form action="signin.php" method="post">
                <input type="email" name="username" id="username" placeholder="Username" required>
                <input type="password" name="password" id="password" placeholder="Password" required>
                <button type="submit">Sign In</button>
            </form>
            <p>Don't have an account? <a href="">Register Now</a></p>
        </div>
    </div>
</body>
</html>