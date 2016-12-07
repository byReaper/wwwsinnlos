<?php
    include 'config.php'; 
    session_start();
    if(isset($_SESSION['id'])){
        $sid = $_SESSION['id'];
    } else {
        $sid = 0;
    }
    
    $settings = "SELECT * FROM configuration";
    $users = "SELECT * FROM user WHERE id='$sid'";
    foreach ($db->query($settings) as $row) { // PDO mit PHP/SQL vermischt, i know.

    }
    foreach ($db->query($users) as $col) { // PDO mit PHP/SQL vermischt, i know.

    }
    $showrform = $row['showregister'];
?>
<html lang="de-de">
    <link href="css/header.css" rel="stylesheet">
    <link href="css/footer.php" rel="stylesheet">
	<meta charset="UTF-8">
	<head>
		<title><?php echo $site; ?> - <?php echo $row['sitename']; ?></title>
	</head>

	<body>
    <header>
        <nav>
            <ul>
                <li>by<b>Reaper</b></li>
                <li> | </li>
                <li><a href="index.php">Startseite</a></li>
                <li><a href="kontakt.php">Kontakt</a></li>
                <?php if(isset($_SESSION['id'])){
                        echo "<li><i>Du bist als <b>'".$col['uid']."'</b> eingeloggt. </i></li>";
                }else{
                    if($showrform == 'true'){
                        echo '<form align="center" id="indexregister" method="POST" action="/core/sql_core.php">
                                    <input style="width: 300px; padding: 5px;"type="text" name="uid" placeholder="Username">
                                    <input type="hidden" value="login" name="core">
                                    <input style="width: 300px; 5px; padding: 5px;"type="password" name="pwd" placeholder="Passwort">
                                    <button type="submit">Login</button></form></div>   '; 
                    }
                }?>


            </ul>
        </nav>    <br><br><br>
    </header>