<?php
    session_start();

    //заносим введенный пользователем логин в переменную $login, если он пустой, то уничтожаем переменную
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

    //если логин и пароль введены, то обрабатываем их, чтобы теги и скрипты не работали, мало ли что люди могут ввести
    $email = stripslashes($email);
    $email = htmlspecialchars($email);
    $username = stripslashes($username);
    $username = htmlspecialchars($username);
    
    //удаляем лишние пробелы
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
        setcookie("name", $user[1], time() + 7200);
        header("Location: http://localhost/blog/profil/profil.php");
    }else
        exit ("Takový email už existuje.");
    fclose($fp);   

?>
