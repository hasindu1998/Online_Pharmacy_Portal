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

/*document.getElementById('change-password-form').addEventListener('submit', function(e) {
   e.preventDefault();
   const password = document.getElementById('password').value;
   const confirmPassword = document.getElementById('confirmPassword').value;

   if (password !== confirmPassword) {
       alert('Passwords do not match!');
   } else {
       alert('Registration Successful!');
   }
});*/

function confirmDelete() {
   if (confirm("Are you sure you want to delete this account?")) {
       // Code to delete the account
       alert("Account deleted");
   } else {
       // User canceled the deletion
       alert("Account not deleted");
   }
}

