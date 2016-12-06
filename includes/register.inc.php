<?php
    session_start();
    include '../config.php';
    $uid = $_POST['uid'];
    $pwd = $_POST['pwd'];
    $email = $_POST['email'];
        $eintragen = "INSERT INTO user (uid, pwd, email) VALUES ('$uid', '$pwd', '$email')";
        $result = mysqli_query($db, $eintragen);

        header("Location: ../index.php?register_success"); 

?>