<?php
// Get form inputs
$username = $_POST['username'];
$password = $_POST['password'];
$redirect_to = $_POST['redirect_to'];
 
// Check login credentials
if($username == 'admin' && $password == 'admin') {
    
        header('Location: index.html');
}
else {
    // When failure, reload the login form
    $error = "Invalid username/password";
    include('login.php');
}
?>