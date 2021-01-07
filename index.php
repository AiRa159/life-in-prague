<?php session_start(); ?>
<!DOCTYPE html>
<html lang="cs">
    <head>
        <title>Webová stránka o životě v Praze</title>
        <meta charset="utf-8">
        <style>
            <?php
                if($_COOKIE["style"]){
                    if ($_COOKIE["style"] == "light") {
                        include "light.css";
                    } elseif ($_COOKIE["style"] == "dark") {
                        include "dark.css";
                    }
                }else
                    setcookie("style", "light")
            ?>
        </style>
        <script src="/change.js"></script>
    </head>

    <body>
        <!--Title and navigation bar-->
        <?php include "./navbar.php" ?>

        <!--Main block-->
        <div class="main">
            <?php
            if (isset($_GET['id'])) {
                switch ($_GET['id']) {
                    case 'prague':
                        echo file_get_contents("blog/articles/about_prague/prague_copy.html");
                        break;
                    case 'univ':
                        echo file_get_contents("blog/articles/about_university/university_copy.html");
                        break;
                    case 'res':
                        echo file_get_contents("blog/articles/about_residence/residence_copy.html");
                        break;
                    case 'nostr':
                        echo file_get_contents("blog/articles/about_nostr/nostr_copy.html");
                        break;
                    case 'visa':
                        echo file_get_contents("blog/articles/about_visa/visa_copy.html");
                        break;
                    case 'address':
                        echo file_get_contents("blog/articles/other/address_copy.html");
                        break;
                    case 'sites':
                        echo file_get_contents("blog/articles/other/sites_copy.html");
                        break;
                    // case 'profil':
                    //     if (isset($_SESSION["status"])) {
                    //         echo file_get_contents("blog/profil/profil.php");
                    //         //header('Location: blog/profil/profil.php');
                    //         //die();
                    //     } else
                    //         echo file_get_contents("blog/profil/registration.html");
                    //     break;
                    case 'reg':
                        echo file_get_contents("blog/profil/registration.html");
                        break;
                    case 'vstup':
                        echo file_get_contents("blog/profil/authorization.html");
                        break;
                }
            }
            ?>
        </div>
    </body>
</html>