<?php 
session_start();

require_once './db_Config/config.php';

if(isset($_POST['signin']))
{
    $user_name = $_POST['username'];
    $password = $_POST['password'];

    $query = "SELECT * FROM User_info WHERE user_name = '{$user_name}' AND password = '{$password}' LIMIT 1";
    $result = mysqli_query($Connection, $query);

    if(mysqli_num_rows($result) == 1)
    {
        $row = mysqli_fetch_assoc($result);

        $_SESSION['username'] = $row['user_name'];
        $_SESSION['firstname'] = $row['first_name'];
        $_SESSION['profilePic_url'] = $row['profilepic_url'];
        $_SESSION['user_type'] = $row['user_type'];

        $errors = '';
        
        if($row['acc_status'] == 'Active')
        {
            if($_SESSION['user_type'] == 'Admin')
            {
                header('location: ./admin_DB.php');
            }
            else if($_SESSION['user_type'] == 'Customer')
            {
                header('location: ./products.php');
            }
            else if($_SESSION['user_type'] == 'Manager')
            {
                header('location: ./manager_DB.php');
            }
            else
            {
                $errors = 'Error Invalid User Type';
            }
        }
        else
        {
            $errors = 'Account is Deactivated. Contact <a href="./contact.php">HERE</a>';
        }
    }
    else
    {
        $errors = 'Invalid Username or Password';
    }
}
else
{
    $errors = '';
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In</title>
    <link rel="stylesheet" href="./CSS/signin.css">
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
                <input type="text" name="username" id="username" placeholder="Username" required>
                <input type="password" name="password" id="password" placeholder="Password" required>
                <button type="submit" name="signin" >Sign In</button>
            </form>
            <p class="error"> <?php echo $errors; ?> </p>
            <p class="acctxt">Don't have an account? <a href="">Register Now</a></p>
        </div>
    </div>
</body>
</html>