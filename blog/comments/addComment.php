<?php
// This file processes comments entered by the user and added to the database
    if(isset($_POST['title'])) {
        $title = $_POST['title']; 
        if ($title == '') {
            unset($title);
        } 
    }
    if (isset($_POST['comment'])) {
        $comment = $_POST['comment'];    
        if ($comment == '') {
            unset($comment);
        } 
    }
    //data processing
    $title = stripslashes($title);
    $title = htmlspecialchars($title);
    $comment = stripslashes($comment);
    $comment = htmlspecialchars($comment);
    
    //removing unnecessary gaps
    $title = trim($title);
    $comment = trim($comment);

    $com = '<p><span>'.$_COOKIE['name'].'</span>: '.$title.'</p>'.'<p>'.$comment.'</p><br>';
    file_put_contents("dbOfComments.txt", $com."\n", FILE_APPEND);
    header("Location: blog/comments/comments.php");
    exit();
?>