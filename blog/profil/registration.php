<!DOCTYPE html>
<html lang="cs">

    <head>
        <title>Registrace</title>
        <?php include "../../stylechanger.php"?>
        <meta charset="utf-8">
        <script src = "/blog/profil/controlForm.js"></script>
    </head>

    <body>
        <?php include "../../navbar.php" ?>
        <div class="main">
            <div class="profil">
                <ul id="reg_signin">
                    <li><a href="">Registrace</a></li>
                    <li><a href = "/blog/profil/authorization.php">Vstup</a></li>
                </ul>

                <div id="registration_form">
                    <form name="registration" action="/registr.php" method="POST" onsubmit="return control()">
                        <label>E-mail:</label> <br>
                        <input type="email" name="email" placeholder="příklad@gmail.com" required><br>

                        <label>Jméno:</label> <br>
                        <input type="text" name="username" placeholder="Eva" pattern = "^[a-zA-Z]+(([',. -][a-zA-Z ])?[a-zA-Z]*)*$" required> <br>

                        <label>Heslo:</label> <br>
                        <input type="password" name="password" placeholder="8-12 symbolů" minlength="8" maxlength="12" required>
                        <br>

                        <input type="submit" id="reg_button" value="Zaregistrovat se">
                    </form>
                </div>
            </div>
        </div>
    </body>

</html>