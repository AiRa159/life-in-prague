<?php
    session_start();

    //vložíme uživatelské přihlašovací e-mail a jméno do proměnných. Pokud jsou prázdné, zničíme proměnny
    if (isset($_POST['email'])) {
        $email = $_POST['email']; 
        if ($email == '') {
            unset($email);
        } 
    }
    if (isset($_POST['username'])) {
        $username = $_POST['username']; 
        if ($username == '') {
            unset($username);
        } 
    }
    if (isset($_POST['password'])) {
        $password = $_POST['password']; 
        if ($password == '') {
             unset($password);
        } 
    }

    //zpracování údajů
    $email = stripslashes($email);
    $email = htmlspecialchars($email);
    $username = stripslashes($username);
    $username = htmlspecialchars($username);
    
    //odstraňení zbytečných mezer
    $email = trim($email);
    $username = trim($username);

    $users = array_map('str_getcsv', file('db.csv'));
    $emails = array_column($users, 0);
    $fp = fopen('db.csv', 'a+');
    if(!in_array($email, $emails)){
        if(preg_match("/^[a-zA-Z]+(([',. -][a-zA-Z ])?[a-zA-Z]*)*$/", $username)){
            if(strlen($password) >= 8 && strlen($password) <= 12){
                $user = array("email" => $email,"username" => $username, "password" => password_hash($password.$username, PASSWORD_DEFAULT));
                fputcsv($fp, $user);
                $_SESSION["status"] = "ok";
                setcookie("email", $email, time() + 7200);
                setcookie("name", $username, time() + 7200);
                header("Location: http://localhost/blog/profil/profil.php");
            }else
                exit ("Heslo musí být delší než 8 a kratší než 12!");
        }else
            exit ("Jméno musí obsahovat jen písmena!");
    }else
        exit ("Takový email už existuje.");
    fclose($fp);   

?>
