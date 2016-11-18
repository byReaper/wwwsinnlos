<?php
    session_start();
    $db = mysqli_connect("localhost", "root", "loofti88", "site");
    $uid = $_POST['uid'];
    $pwd = $_POST['pwd'];

    $sql = "SELECT * FROM user WHERE uid='$uid' AND pwd='$pwd'";
    $result = mysqli_query($db, $sql);

    if (!$row = mysqli_fetch_assoc($result)) {
        echo "Dein Benutzername oder dein Passwort ist falsch! ";
    } else {
        $_SESSION['id'] = $row['id'];
    }

    header("Location: ../index.php");
?>