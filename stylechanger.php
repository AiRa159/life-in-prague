<?php
    //     if($_COOKIE["style"]){
    //         if ($_COOKIE["style"] == "light") {
    //             include "../../light.css";
    //         } elseif ($_COOKIE["style"] == "dark") {
    //             include "../../dark.css";
    //         }
    //     }else
    //         setcookie("style", "light")
    $path = '/light.css';
    if (!isset($_COOKIE["style"])) {
        setcookie('style', 'light', 0, '/');
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
<script src="/change.js"></script>