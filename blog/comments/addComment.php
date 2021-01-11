<?php
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
    
    $com = '<p><span>'.$_COOKIE['name'].'</span>: '.$title.'</p>'.'<p>'.$comment.'</p><br>';
    file_put_contents("dbOfComments.txt", $com."\n", FILE_APPEND);
    header("Location: http://localhost/blog/comments/comments.php");
    exit();
?>