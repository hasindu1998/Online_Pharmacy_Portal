<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="stylesheet" href="./CSS/index.css">
    <link rel="stylesheet" href="./CSS/contact.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="icon" type="image/png" sizes="32x32" href="./Images/Pharmacy X Icon.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./Images/Pharmacy X Icon.png">
</head>
<body>
    <?php include ("./header.php"); ?>

    <div class="contact_title">
        <h1>Contact Us</h1>
    </div>

    <div class="contact_content">
        <div class="contact_img">
            <img src="./Images/contact-us-img.jpg">
        </div>

        
     <div class="contact_form_container">
        <form action="contact.php" method="post">
            <div class="contact-form">
            <div class="account-edit">
                        <div class="input-container">
                           <label>Name</label>
                           <input type="text"  required>
                        </div>
                        <div class="input-container">
                            <label>Email</label>
                            <input type="email"  required>
                        </div>
                     </div>
                     <div class="account-edit">
                         <div class="input-container">
                           <label>Phone Number</label>
                           <input type="text"  required>
                         </div>
                         <div class="input-container">
                           <label>Image</label>
                           <input type="file"  required>
                         </div>
                     </div>
                     <div class="account-edit">
                         <div class="input-container">
                            <label>Message</label>
                            <textarea rows="5"></textarea>
                         </div>
                     </div>
                <div class="submit-button-container">
                    <button type="submit" class="submit-button" >Submit</button>
                </div>
            </div>
        </form>
            
     </div>

       <div class="contact-details">

            <h3><b>PharmacyX (Pvt) Limited</b></h3><br>
             <p>We’re here to help! Whether you have a question or need assistance ,<br>
                 feel free to get in touch with us through any of the methods below.</p><br><br>
             <p><b>Address :</b> 162/2, Havelock Road, Colombo 05</p><br>
             <p><b>Email :</b><a href="mailto:pharmacyX@gmail.com"> pharmacyX@gmail.com</a></p><br>
             <p><b>Phone : </b>+94 70 153 6490</p><br>
             <div class="contact-icon">
               <a href="https://www.facebook.com/public/PharmacyX/"><img src="./Images/facebook-icon.png" class="facebook" alt="Facebook"></a>
                <a href="https://web.whatsapp.com/PharmacyX/"><img src="./Images/whatsapp-icon.jpg" class="whatsapp" alt="Whatsapp"></a>
                <a href="https://lk.linkedin.com/in/PharmacyX"><img src="./Images/linkedin-logo.png" class="linkedin" alt="Linkedin"></a>
                
             </div>
        </div>
    

     
    </div>
            

    <?php include ("./footer.php"); ?>
</body>
</html>