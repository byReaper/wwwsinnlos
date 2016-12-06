<?php
$host = "localhost"; // Host (meistens unverändert lassen/localhost)
$user = "root"; // Benutzer der Datenbank (meistens root)
$password = ""; // Passwort für die Datenbank.
$database = "site"; // Datenbank, welche benutzt werden soll.
$db = mysqli_connect($host, $user, $password, $database); // Hier werden die Variablen eingetragen, um eine Verbindung zur Datenbank aufzubauen.
?>