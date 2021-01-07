<?php
    session_start();
    unset($_SESSION["status"]);
    setcookie("email", "", time() - 7200);
    setcookie("name", "", time() - 7200);
    header("Location: http://localhost/blog/profil/authorization.php");
?>