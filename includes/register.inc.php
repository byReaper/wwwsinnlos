<?php
    session_start();
    include '../config.php';
    $uid = $_POST['uid'];
    $pwd = $_POST['pwd'];
    $pwd2 = $_POST['pwd2'];
    $email = $_POST['email'];
    //Debugoptionen (ausgabe der html-form)
    echo $uid.'<br>'; 
    echo $email.'<br>';
    echo $pwd.'<br>';
    echo $pwd2;

    if($pwd != $pwd2){
        header('Location: index.php/?error=pw');
        exit();
    }
    if(strlen($pwd) < 6){
        header('Location: index.php/?error=pwlenght');
        exit();
    }

    $eintragen = "INSERT INTO user (uid, pwd, email) VALUES ('$uid', '$pwd', '$email')";
    $result = mysqli_query($db, $eintragen);
    //header("Location: ../index.php?register_success"); 

?>