<?php
// Datenbank einhaengen
include_once '../config.php';
$core[0] = $db;

// Was soll der core machen ?
$core[1] = $_POST['core'];


if($core[1] == "logout"){
session_start();
$_SESSION['id'] = '-101';
session_destroy();

}
if($core[1] == "register"){
    session_start();
    $uid = $_POST['uid'];
    $pwd = $_POST['pwd'];
    $pwd2 = $_POST['pwd2'];
    $email = $_POST['email'];
    if($pwd != $pwd2){
        error("Die Passwörter stimmen nicht überein!");
        exit();
    }
    if(strlen($pwd) < 6){
        error("Dein Passwort ist zu kurz!");
        exit();
    }
    $sql = "SELECT uid FROM `user` WHERE uid='" . $uid . "'";
    $row = mysqli_query($core[0], $sql);
    $result = mysqli_num_rows($row);
    
    if($result > 0){
        error("Dein Benutzername ist schon vergeben!!!!!!!!!!!!1111!!!!!!!");
        exit;
    }else{
        $eintragen = "INSERT INTO user (uid, pwd, email) VALUES ('" . $uid . "', '" . $pwd . "', '" . $email ."')";
        $result = mysqli_query($core[0], $eintragen);
        header("Location: /?"); 
        exit;
    }
}

if($core[1] == "login"){
    $uid = $_POST['uid'];
    $pwd = $_POST['pwd'];
    if(isset($_POST['uid'])) {
	$sql = "SELECT * FROM user WHERE uid='" .$uid ."' AND pwd='" . $pwd . "'";
    $result = mysqli_query($core[0], $sql);
	if (!$row = mysqli_fetch_assoc($result)) {
		error("Dein Benutzername oder dein Passwort ist falsch! ");
    	} else {
            session_start();
            $_SESSION['id'] = $row['id'];
    	}
    	header("Location: /");
        exit;
    }else {
        error("Ein Feld wurde leer gelassen!");
    }
 
}
header("Location: /"); 
exit;

function error($text){
echo $text . "<br>";
echo '<form action="/" methode="POST"><input type="submit" value="&middot; Zur&uuml;ck &middot;"></form>';
}
?>
