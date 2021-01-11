<?php
// In this file is the connection between the two css files
    $path = '/light.css';
    if (!isset($_COOKIE["style"])) {
        setcookie('style', 'light', 0, "/");
    }

    $cookieValue = $_COOKIE["style"] ?? "light";
    if ($cookieValue ?? "light") {
        if ($cookieValue == "light") {
            $path = '/light.css';
        } elseif ($cookieValue == "dark") {
            $path = '/dark.css';
        }
    }
    echo '<link rel="stylesheet" href=' . $path . '>';
?>
<!-- Connection with the change.js file -->
<script src="/change.js"></script>
<link rel="shortcut icon" href="/blog/site_pictures/icon.png" type="image/png">