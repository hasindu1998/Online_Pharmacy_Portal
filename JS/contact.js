function validateForm()
{
    let x = document.form["detailForm"]["name"].value;
    if(x == "")
    {
        alert("Name must be filled out");
        return false; 
    }
}