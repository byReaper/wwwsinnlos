<?php
include 'header.php';
include 'config.php';
session_start();
$newpwd = $_POST['newpwd'];
$sid = $_SESSION['id'];
$sql = "UPDATE user SET pwd='$newpwd' WHERE id='$sid'";
$result = mysqli_query($db,$sql);
if(!$result){
    echo "<p style='color: red'>Deine Anfrage an den Server hat nicht funktioniert. Das Problem wurde bereits an unseren Techniker weitergeleitet. Vielen Dank für dein Verständnis!</p><br><a href='user.php'>Zurück zum Controlpanel</a>";
}else{
    echo "Du wirst in Kürze weitergeleitet...";
    header("Location: user.php?emailchange=success");
}
?>
