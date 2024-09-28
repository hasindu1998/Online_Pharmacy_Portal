/*function checkPassword() {

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
  
}*/

document.getElementById('change-password-form').addEventListener('submit', function(e) {
   e.preventDefault();
   const password = document.getElementById('password').value;
   const confirmPassword = document.getElementById('confirmPassword').value;

   if (password !== confirmPassword) {
       alert('Passwords do not match!');
   } else {
       alert('Registration Successful!');
   }
});
