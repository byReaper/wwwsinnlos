<?php
include 'header.php';

$todo = "SELECT * FROM todo";
$result = mysqli_query($db,$todo);

?>
<html>
    <body>
        <p align="center"><b>Todoübersicht</b></p><hr><br>
        <p align="center"><?php 	while($row = $result->fetch_assoc()) {
    echo "<p align='center'>".$row['todo']." | Priorität: ".$row['priority']." | Fertiggestellt: ".$row['finished']."</p><br>";
} ?></p>
    </body>
</html>
<?php
include 'footer.php';
?>