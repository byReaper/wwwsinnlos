<?php 
include 'header.php';

$nachricht = $_POST['nachricht'];
$empfanger = $_POST['empfanger'];
$id = $_SESSION['id'];

$sql = "INSERT INTO msg (id, absender, empfanger, gelesen, nachricht) VALUES (NULL, '$id', '$empfanger', '0', '$nachricht')";
mysqli_query($db, $sql);
?>

<?php 
include 'footer.php';
?>