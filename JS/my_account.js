function checkPassword() {

    const newPassword = document.getElementById('newPassword').value;
    const confirmPassword = document.getElementById('confirmPassword').value;
    const errorMessage = document.getElementById('error-message');

     if (newPassword.length < 8)
     {
        errorMessage.textContent = "Password must be at least 8 characters long.";
        return false;
     }

     if(newPassword !== confirmPassword)
     {
        errorMessage.textContent = "Password Mismatched !.";
        return false;
     }
     
     
        errorMessage.textContent = "";
        return true;
  
}