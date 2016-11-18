<?php
    include 'header.php';
    session_start();
    $db = mysqli_connect("localhost", "root", "loofti88", "site");
    $result = mysql_query("SELECT * FROM configuration");
    while($row = mysql_fetch_row($result)) 
        echo $row[0].' - '.$row[1].'<br />';
    $endzeit=explode(" ", microtime());
    $endzeit=$endzeit[0]+$endzeit[1];
?>  
    
	</body>
</html>
<?php
echo "Diese Seite wurde in ".round($endzeit - $startzeit,6)." Sekunden geladen";
?>