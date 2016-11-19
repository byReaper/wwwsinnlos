<?php
    include 'config.php';
    session_start();
    $settings = "SELECT * FROM configuration";
    foreach ($db->query($settings) as $row) {

    }
    
?>
<html lang="de-de">
    <link href="https://fonts.googleapis.com/css?family=Droid+Serif" rel="stylesheet">
	<meta charset="UTF-8">
    <link href="style.css" rel="stylesheet">
	<head>
		<title><?php echo $row['sitename']; ?></title>
        <style>
            @import url('https://fonts.googleapis.com/css?family=Droid+Serif');
            .bg-info{background-color:#f2dede;}
            a.bg-info:focus,a.bg-info:hover{background-color:#e4b9b9;}
            * {
                margin: 0px;
                padding: 0px;
                text-decoration: none;
                font-family: 'Droid Serif', 'sans-serif';
            }
            IMG.displayed {
                display: block;
                margin-left: auto;
                margin-right: auto 
            }
            header {
                width: 100%;
                height: 60px;
                background-color: #222222;+
                position: fixed;
            }
            nav ul  {
                float: right;
                margin-top: 20px;
                margin-right: 60px;
            }
            nav ul li  {
                list-style: none;
                float: left;
                margin-right: 20px;
            }
            nav ul li a {
                color: white;
                font-size: 16px;
            }
            nav ul form  {
                float: left;
            }
            nav ul form input  {
                float: left;
                border: none;
                margin-right: 6px;
                border-radius: 5px;
                height: 22px;
                width: 120px;
                padding-left: 5px;
            }
            nav ul form button {
                float: left;
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
    <script src='https://www.google.com/recaptcha/api.js'></script>
	</head>
	
	<body>
    <header>
        <nav>
            <ul>
                <li><a href="index.php">Startseite</a></li>
                <li><a href="impressum.php">Impressum</a></li>
                <li><a href="kontakt.php">Kontakt</a></li>

                <?php
                    if (isset($_SESSION['id'])) {
                        echo "<font style='color: white;'>Du bist mit der ID: ".$_SESSION['id']." eingeloggt!</font><li><a href='user.php''>Controlpanel</a></li><li><a href='msgs.php''>Posteingang</a></li>";
                        echo "<form action='includes/logout.inc.php'>
                            <button>Ausloggen</button>
                        </form>";
                        
                    } else {
                        echo "<li><a href='register.php'>Registrieren</a></li><form action='includes/login.inc.php' method='POST'>
                            <input type='text' name='uid' placeholder='Username'>  
                            <input type='password' name='pwd' placeholder='Passwort'>
                            <button type='submit'>Einloggen</button>
                        </form>";
                    }
                    
                ?>
            </ul>
        </nav>    
    </header>
    <div class="bg-info"><marquee><?php echo $row['marquee']; ?></marquee></div>