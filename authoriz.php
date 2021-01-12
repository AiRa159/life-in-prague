<?php
    session_start();
    // Сhecking for existence
    if (isset($_POST['email'])) {
        $email = $_POST['email']; 
        // Checking for emptiness
        if ($email == '') {
            // Deleting a variable
            unset($email);
        } 
    }
    if (isset($_POST['password'])) {
        $password = $_POST['password'];    
        if ($password == '') {
            unset($password);
        } 
    }
    // Opening a file db.csv
    $users = array_map('str_getcsv', file('db.csv'));
    $emails = array_column($users, 0);
    // Email search
    $userID = array_search($email, $emails);
    // Checking for the existence of a user
    if($userID !== false){
        $user = $users[$userID];
            // Password verification
            if(password_verify($password.$user[1], $user[2])) {
                $_SESSION["status"] = "ok";
                setcookie("email", $email, time() + 7200);
                setcookie("name", $user[1], time() + 7200);
                // Redirect to profil page
                header("Location: blog/profil/profil.php");
                die();
            }else
                exit ("Není správný e-mail nebo heslo!");
    }else
    exit ("Takový uživatel neexistuje!");
?>