<?php include ('inc/header.php'); ?>

<?php
validate_user_registration();
display_message();
?>


<?php

if($_SERVER['REQUEST_METHOD'] == "POST") {
    $first_name = escape($_POST['first_name']);
    $last_name = escape($_POST['last_name']);
    $username = escape($_POST['username']);
    $email = escape($_POST['email']);
    $password = escape($_POST['password']);
    $password = password_hash($password, PASSWORD_DEFAULT);

    $sql = "INSERT INTO users(first_name,last_name,username,profile_image,email,password)";
    $sql .= "VALUES('$first_name','$last_name','$username','uploads/default.jpg','$email','$password')";

    confirm(query($sql)); 
    set_message("You have been sucessfully registered! Please Log in!");
    display_message();
}

?>

     <form method="POST">
        <input type="text" name="first_name" placeholder="First Name" value="" required>
        <input type="text" name="last_name" placeholder="Last Name" value="" required>
        <input type="text" name="username" placeholder="Username" value="" required>
        <input type="email" name="email" placeholder="Email Address" value="" required>
        <input type="password" name="password" placeholder="Password" required>
        <input type="password" name="confirm_password" placeholder="Confirm Password" required>
        <input type="submit" name="register-submit" value="Register Now">
    </form>


<?php
include "inc/footer.php";
?>

