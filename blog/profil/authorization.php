<!DOCTYPE html>
<html lang="cs">
    <head>
        <title>Authorizace</title>
        <?php include "../../stylechanger.php"?>
        <!-- <link rel="stylesheet" href="/blog/profil/auth.css"> -->
        <meta charset="utf-8">
    </head>

    <body>
        <?php include "../../navbar.php" ?>
        <div class="main">
            <div class="profil">
                <ul id="reg_signin">
                    <li><a href="/blog/profil/registration.php">Registrace</a></li>
                    <li><a href="">Vstup</a></li>
                </ul>

                <div id="sign_in_form">
                    <form action="/authoriz.php" method="POST">
                        <label>E-mail:</label> <br>
                        <input type="email" name="email" placeholder="tvůj_email@gmail.com" required> <br>

                        <label>Heslo:</label> <br>
                        <input type="password" name="password" placeholder="tvoje_heslo" minlength="8" maxlength="12" required>
                        <br>

                        <input type="submit" id="signin_button" value="Vstup">
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>