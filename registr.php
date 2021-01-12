<?php
    session_start();

    //We insert the user's login email and name into the variables. If they are empty, we destroy the variables
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

    //data processing
    $email = stripslashes($email);
    $email = htmlspecialchars($email);
    $username = stripslashes($username);
    $username = htmlspecialchars($username);
    
    //removing unnecessary gaps
    $email = trim($email);
    $username = trim($username);

    $users = array_map('str_getcsv', file('db.csv'));
    $emails = array_column($users, 0);
    $fp = fopen('db.csv', 'a+');
    // checking for a match
    if(!in_array($email, $emails)){
        // checking the correctness of entering the username
        if(preg_match("/^[a-zA-Z]+(([',. -][a-zA-Z ])?[a-zA-Z]*)*$/", $username)){
            // checking the correctness of entering the password
            if(strlen($password) >= 8 && strlen($password) <= 12){
                $user = array("email" => $email,"username" => $username, "password" => password_hash($password.$username, PASSWORD_DEFAULT));
                fputcsv($fp, $user);
                $_SESSION["status"] = "ok";
                setcookie("email", $email, time() + 7200);
                setcookie("name", $username, time() + 7200);
                // Redirect to authorization page
                header("Location: blog/profil/profil.php");
            }else
                exit ("Heslo musí být delší než 8 a kratší než 12!");
        }else
            exit ("Jméno musí obsahovat jen písmena!");
    }else
        exit ("Takový email už existuje.");
    fclose($fp);   

?>
