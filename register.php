<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="./CSS/index.css">
    <link rel="stylesheet" href="./CSS/register.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="icon" type="image/png" sizes="32x32" href="./Images/Pharmacy X Icon.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./Images/Pharmacy X Icon.png">
</head>
<body>
    
<div class="container">
        <h2>Registration</h2>
        <form id="registrationForm">
            <div class="form-row">
                <div class="form-column">
                    <div class="form-group">
                        <label for="fullName">Full Name</label>
                        <input type="text" id="fullName" placeholder="Enter Your Full Name" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" id="email" placeholder="mail@example.com" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" id="password" placeholder="Minimum of 8 characters" required>
                    </div>
                </div>
                
                <div class="form-column">
                    <div class="form-group">
                        <label for="username">User Name</label>
                        <input type="text" id="username" placeholder="Enter Your User Name" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="phone">Phone Number</label>
                        <input type="tel" id="phone" placeholder="Enter Your Phone Number" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="confirmPassword">Confirm Password</label>
                        <input type="password" id="confirmPassword" placeholder="Minimum of 8 characters" required>
                    </div>
                </div>
            </div>
            
            <div class="form-group gender">
                <label>Gender</label>
                <input type="radio" name="gender" value="male" id="male" required> Male
                <input type="radio" name="gender" value="female" id="female"> Female
                <input type="radio" name="gender" value="none" id="none"> Prefer not to say
            </div>
            
            <button type="submit">Register</button>
        </form>
    </div>
    <script src="./js/order.js"></script>
    

    
</body>
</html>