<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FAQ</title>
    <link rel="stylesheet" href="./CSS/index.css">
    <link rel="stylesheet" href="./CSS/faq.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="icon" type="image/png" sizes="32x32" href="./Images/Pharmacy X Icon.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./Images/Pharmacy X Icon.png">
</head>
<body>
    <?php include ("./header.php"); ?>
    
    <img src="images/FAQ 1.png" alt="FAQ Image" class="FAQImage" >
	<div class ="image">
	    <h2>Got A question?</h2> 
	        <p>Find our FAQ here.If your question hasn't been answerd here please <a href="#">contact us </a> </p>
    </div>	
    <div class="faq-container">
        <h2>Frequently Asked Questions</h2>
        <div class="faq-item">
            <button class="faq-question">1. Do you offer a free trial?</button>
            <div class="faq-answer">
                <p>Yes, we offer a 14-day free trial for each plan.</p>
            </div>
        </div>
        <div class="faq-item">
            <button class="faq-question">2. Do I need a credit card to start?</button>
            <div class="faq-answer">
                <p>No, you do not need a credit card to start the trial.</p>
            </div>
        </div>
        <div class="faq-item">
            <button class="faq-question">3. Can I cancel my account anytime?</button>
            <div class="faq-answer">
                <p>Yes, you can cancel your account at any time.</p>
            </div>
        </div>
        
    </div>
    
    <script src="faq.js"></script>


    

    <?php include ("./footer.php"); ?>
</body>
</html>