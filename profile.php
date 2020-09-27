<?php 
require 'includes/header.php'
?>

<main>
<?php
if (isset($_SESSION['uid'])) {
    include 'html/profile.html';
}
else{
    header("Location: login.php?error=NotLoggedIn");
    exit();
}
?>

      
</main>