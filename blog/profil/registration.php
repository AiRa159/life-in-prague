<!DOCTYPE html>
<html lang="cs">

    <head>
        <title>Registrace</title>
         <!-- Import of main css -->
        <?php include "../../stylechanger.php"?>
        <meta charset="utf-8">
        <script src = "/blog/profil/controlForm.js"></script>
    </head>

    <body>
         <!-- Import of navigation bar -->
        <?php include "../../navbar.php" ?>
        <div class="main">
            <div class="profil">
                <!-- Buttons Registrace/Přihlášení -->
                <ul id="reg_signin">
                    <li><a href="">Registrace</a></li>
                    <li><a href = "/blog/profil/authorization.php">Přihlášení</a></li>
                </ul>

                <!-- Registration form -->
                <div id="registration_form">
                    <form name="registration" action="/registr.php" method="POST" onsubmit="return control()">
                        <label for = "email">E-mail: *</label> <br>
                        <input type="email" name="email" placeholder="příklad@gmail.com" required><br>

                        <label for = "username">Jméno: *</label> <br>
                        <input type="text" name="username" placeholder="Eva" pattern = "^[a-zA-Z]+(([',. -][a-zA-Z ])?[a-zA-Z]*)*$" title = "Jméno musí obsahovat jen písmena!" required> <br>

                        <label for = "passwords">Heslo: *</label> <br>
                        <input type="password" name="password" placeholder="8-12 symbolů" required>
                        <br>

                        <input type="submit" id="reg_button" value="Zaregistrovat se">
                    </form>
                </div>
            </div>
        </div>
    </body>

</html>