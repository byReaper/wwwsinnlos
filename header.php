<?php
    include 'config.php'; 
    $sid = $_SESSION['id'];
    $settings = "SELECT * FROM configuration";
    $users = "SELECT * FROM user";
    foreach ($db->query($settings) as $row) { // PDO mit PHP/SQL vermischt, i know.

    }
    foreach ($db->query($users) as $col) { // PDO mit PHP/SQL vermischt, i know.

    }
?>
<html lang="de-de">
	<meta charset="UTF-8">
	<head>
		<title><?php echo $site; ?> - <?php echo $row['sitename']; ?></title>
        <style>
            @import url('https://fonts.googleapis.com/css?family=Roboto:300');
            * {
                margin: 0px;
                padding: 0px;
                text-decoration: none;
                font-family: 'Roboto';
                color: #222222;
            }
            IMG.displayed {
                display: block;
                margin-left: auto;
                margin-right: auto 
            }
            header {
                width: 100%;
                height: 60px;
                background-color: #ecf0f1;
                position: fixed relative;
                color: #222;
            }
            nav ul  {
                float: left;
                margin-top: 20px;
                margin-left: 60px;
            }
            nav ul li  {
                list-style: none;
                float: right;
                margin-right: 20px;
            }
            nav ul li a {
                color: #222;
                font-size: 16px;
            }
            nav ul li a:hover {
                color: black;
                font-size: 16px;
            }
            nav ul form  {
                float: right;
            }
            nav ul form input  {
                float: right;
                border: none;
                margin-right: 6px;
                border-radius: 5px;
                height: 22px;
                width: 120px;
                padding-left: 5px;
            }
            nav ul form button {
                float: right;
                border: none;
                margin-right: 20px;
                background-color: white;
                color: black;
                font-size: 16px;
                cursor: pointer;
                border-radius: 5px;
                height: 22px;
                width: 90px;
            }
        </style>
	</head>

	<body>
    <header>
        <nav>
            <ul>
                <li>by<b>Reaper</b></li>
                <li> | </li>
                <li><a href="index.php">Startseite</a></li>
                <li><a href="kontakt.php">Kontakt</a></li>

                <?php
                    /*if (isset($_SESSION['id'])) {
                        echo "<font style='color: #222;'>Du bist als <b>".$col['uid']."</b> eingeloggt. </font><li><a href='#''>Platzhalter</a></li><li><a href='#''>Platzhalter</a></li>";
                        echo "<form action='includes/logout.inc.php'>  
                            <button>Ausloggen</button>
                        </form>";
                        
                    } else {
                        echo "<li><a href='register.php'>Registrieren</a></li>";
                    }*/
                ?>
            </ul>
        </nav>    <br><br><br>
    </header>