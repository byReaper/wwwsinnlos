<?php
$db = mysqli_connect("localhost", "root", "loofti88", "site");
if(!$db)
{
  exit("Verbindungsfehler: ".mysqli_connect_error());
}

?>