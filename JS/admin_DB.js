//By Moditha IT23539990
function Mark_shipped() 
{
        // Display a confirmation box
        var result = confirm("Are you sure you want to submit this form?");
        
        // If the user clicks OK, submit the form
        if (result) 
        {
            document.getElementById("Shipped_form").submit();
        } 
}

function manage_Product()
{
    window.location.href = "addDelete_Product.php";
}