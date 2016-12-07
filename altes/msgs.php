<?php
include 'header.php';
$sid = $_SESSION['id'];
$msgs = "SELECT * FROM msg WHERE empfanger='$sid'";
$result = mysqli_query($db,$msgs);

?>
<html>
    <body>
        <p align="center"><b>Posteingang - Nachrichtenübersicht</b></p><hr><br>
        <p align="center"><?php 	while($row = $result->fetch_assoc()) {
    echo "<p align='center'>".$row['nachricht']." | Absender: ".$row['absender']."</p><br>";
} ?></p>
        <a class="displayed" href="sendmsg.php"><img style="margin: 0 auto;" src="img/plus.png" alt="Neue Nachricht"/></a>
    </body>
</html>
<?php
include 'footer.php';
?>