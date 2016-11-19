<?php 
include 'header.php';

$nachricht = $_POST['nachricht'];
$empfanger = $_POST['empfanger'];
$id = $_SESSION['id'];

$sql = "INSERT INTO msg (id, absender, empfanger, gelesen, nachricht) VALUES (NULL, '$id', '$empfanger', '0', '$nachricht')";
$result = mysqli_query($db, $sql);

if(!result){
    echo "Nachricht konnte nicht gesendet werden.";
} else {
    echo "Nachricht wurde erfolgreich gesendet!";
    header("Location: sendmsg.php?info=success");
}
?>

<?php 
include 'footer.php';
?>