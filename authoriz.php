<?php
    // ini_set('session.gc_maxlifetime', 7200);
    session_start();
    if (isset($_POST['email'])) {
        $email = $_POST['email']; 
        if ($email == '') {
            unset($email);
        } 
    }
    if (isset($_POST['password'])) {
        $password = $_POST['password'];    
        if ($password == '') {
            unset($password);
        } 
    }

    $users = array_map('str_getcsv', file('db.csv'));
    $emails = array_column($users, 0);
    $userID = array_search($email, $emails);
    if($userID !== false){
        $user = $users[$userID];
            if(password_verify($password.$user[1], $user[2])) {
                $_SESSION["status"] = "ok";
                setcookie("email", $email, time() + 7200);
                setcookie("name", $user[1], time() + 7200);
                header("Location: http://localhost/blog/profil/profil.php");
                die();
            }else
            exit ("Ne verno!");
    }else
    exit ("Ty kto takoi?");
?>