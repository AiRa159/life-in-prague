<?php
// Required operations when logging out of your account
    session_start();
    unset($_SESSION["status"]);
    setcookie("email", "", time() - 7200);
    setcookie("name", "", time() - 7200);
    // Redirect to authorization page
    header("Location: http://localhost/blog/profil/authorization.php");
?>