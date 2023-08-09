<?php include("db.php") ?>
<?php include("./includes/header.php") ?>
<?php include("./includes/menu.php") ?>

<?php
// Unset the user_id session variable to log out the user
unset($_SESSION['user_id']);

// Redirect the user to the login page
header("Location: registro-login.php");
exit();

?>
