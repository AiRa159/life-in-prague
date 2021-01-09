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
    
    //odstraňení zbytečných mezer
    $email = trim($email);
    $username = trim($username);

    $users = array_map('str_getcsv', file('db.csv'));
    $emails = array_column($users, 0);
    $fp = fopen('db.csv', 'a+');
    if(!in_array($email, $emails)){
        $user = array("email" => $email,"username" => $username, "password" => password_hash($password.$username, PASSWORD_DEFAULT));
        fputcsv($fp, $user);
        $_SESSION["status"] = "ok";
        setcookie("email", $email, time() + 7200);
        setcookie("name", $username, time() + 7200);
        header("Location: http://localhost/blog/profil/profil.php");
    }else
        exit ("Takový email už existuje.");
    fclose($fp);   

?>
