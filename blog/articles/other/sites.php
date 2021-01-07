<!DOCTYPE html>
<html lang="cs">
    <head>
        <style>
            <?php
                if($_COOKIE["style"] == "light"){
                    include "../../../light.css";
                }elseif($_COOKIE["style"] == "dark"){
                    include "../../../dark.css";
                }
            ?>  
        </style>
        <script src="/change.js"></script>  
        <title>Pro studenty</title>
        <link rel = "stylesheet" href = "/blog/articles/other/sites.css">
        <meta charset="utf-8">
    </head>
    <body>
        <?php include "../../../navbar.php"?>
        
        <div class="main">
            <h3>Pomocníky při výuce jazyka:</h3>
            <p>Slovník seznam -> <a href = "https://slovnik.seznam.cz/preklad/rusky">slovnik.seznam.cz</a></p>
            <p>Internetová jazyková příručka -> <a href = "https://prirucka.ujc.cas.cz">prirucka.cz</a></p>
            <p>Nechybujte se -> <a href = "https://www.nechybujte.cz">nechybujte.cz</a></p>
        </div>
    </body>
</html>