<?php
    session_start();
    $db = mysqli_connect("localhost", "root", "loofti88", "site");
    $first = $_POST['first'];
    $last = $_POST['last'];
    $uid = $_POST['uid'];
    $pwd = $_POST['pwd'];
    $email = $_POST['email'];
    
    if (!$first) {
        header("Location: ../register.php?error=empty");
        exit();
    } 

    if (!$last) {
        header("Location: ../register.php?error=empty");
        exit();
    }

    if (!$uid) {
        header("Location: ../register.php?error=empty");
        exit();
    }

    if (!$email) {
        header("Location: ../register.php?error=empty");
        exit();
    } else {
        $sql = "SELECT email FROM user WHERE email='$email'";
        $result = mysqli_query($db, $sql);
        $emailcheck = mysqli_num_rows($result);

        if ($emailcheck > 0) {
            header("Location: ../register.php?error=email");
            exit();  
        } else {
            $sql = "INSERT INTO user (first, last, uid, pwd, email) VALUES ('$first', '$last', '$uid', '$pwd', '$email')";
            $result = mysqli_query($db, $sql);

            header("Location: ../index.php?register_success"); 
        }
    }  

    if (!$pwd) {
        header("Location: ../register.php?error=empty");
        exit(); 
    } else {
        $sql = "SELECT uid FROM user WHERE uid='$uid'";
        $result = mysqli_query($db, $sql);
        $uidcheck = mysqli_num_rows($result);

        if ($uidcheck > 0) {
            header("Location: ../register.php?error=username");
            exit();  
        } else {
            $sql = "INSERT INTO user (first, last, uid, pwd, email) VALUES ('$first', '$last', '$uid', '$pwd', '$email')";
            $result = mysqli_query($db, $sql);

            header("Location: ../index.php?register_success"); 
        }
    }  
?>