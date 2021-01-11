<!DOCTYPE html>
<html lang="cs">
    <head>
        <title>Komentáře</title>
        <?php include "../../stylechanger.php"?>
        <meta charset="utf-8">
        <style> <?php include "../../com.css"?></style>
    </head>
    <body>
        <?php include "../../navbar.php"?>

        <div class = "main">
            <!-- Condition under which the features of this page will be available -->
            <?php 
                if(isset($_SESSION["status"])){
            ?>
            <!-- Output of commentы from the database -->
            <?php include ("dbOfComments.txt")?>

            <!-- Form for writing comments -->
            <form action="/blog/comments/addComment.php" method = "post">
                <label for="title">Název: *</label><br>
                <input type="text" name="title" required><br>

                <label for="comment">Váš komentář: *</label><br>
                <textarea id="textarea" name="comment" placeholder="Báječná webová stránka!" required></textarea><br>

                <input id= "public" type="submit" value="Hotovo!">
            </form>  

            <?php 
                }else{
            ?>
            <p>Pokud chcete psát a vidět komentáře, musíte být přihlášeny!</p>
            <p>Přihlásit se mužete <a href = "/blog/profil/authorization.php">zde</a></p>
            <?php
                }
            ?>
            
        </div>
    </body>
</html>