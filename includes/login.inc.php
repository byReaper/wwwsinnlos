<?php
    session_start();
    include '../config.php';
    $uid = $_POST['uid'];
    $pwd = $_POST['pwd'];

    if(isset($_POST['uid'])) {
        echo $uid;
    }else {
        echo 'Feld wurde leer gelassen!';
    }
    $sql = "SELECT * FROM user WHERE uid='$uid' AND pwd='$pwd'";
    $result = mysqli_query($db, $sql);

    if (!$row = mysqli_fetch_assoc($result)) {
        echo "Dein Benutzername oder dein Passwort ist falsch! ";
    } else {
        $_SESSION['id'] = $row['id'];
    }
    header("Location: ../index.php");
//$2y$10$n6MG35geiN6EzbYBmf9GQ.iHnzx6BndsvfOTfO7PnRez71P3z.mte
?>