<!DOCTYPE html>
<html lang="cs">
    <head>
        <title>Profil</title>
        <!--<link rel="stylesheet" href="/blog/profil/profil.css">-->
        <meta charset="utf-8">
    </head>
    <body>
        <img id = "profil_icon" alt = "icon" src = "/blog/site_pictures/profil.png">
        <p>E-mail : <?php echo($_COOKIE["email"])?></p>
        <p>Username : <?php echo($_COOKIE["name"])?></p>
        <div id = "log_out">
            <form action = "log_out.php" method = "post">
                <input type = "submit" id = "log_out_button" value = "Log out">
            </form>
        </div>
    </body>
</html>