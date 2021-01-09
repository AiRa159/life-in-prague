<!DOCTYPE html>
<html lang="cs">
    <head>
        <title>Authorizace</title>
        <?php include "../../stylechanger.php"?>
        <meta charset="utf-8">
        <script src = "/blog/profil/controlForm.js"></script>
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
                    <form name = "authorization" action="/authoriz.php" method="POST" onsubmit="return control_pas()">
                        <label>E-mail: *</label> <br>
                        <input type="email" name="email" placeholder="tvůj_email@gmail.com" required> <br>

                        <label>Heslo: *</label> <br>
                        <input type="password" name="password" placeholder="tvoje_heslo" required>
                        <br>
                        
                        <input type="submit" id="signin_button" value="Přihlášení">
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>