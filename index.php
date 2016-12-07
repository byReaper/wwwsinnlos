<?php
    $site = 'Startseite';
    include 'header.php';
    // Neues Login/Register/Logout-System
    $config = "SELECT * FROM configuration";
    foreach ($db->query($config) as $configuration) {}
    $showrform = $configuration['showregister'];
    $showrformreason = $configuration['showregisterreason'];
            $url = "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
?>  
    <style>
        @import url('https://fonts.googleapis.com/css?family=Roboto:300');
        * {
            cursor: default;
        }
        .menu {
            width: 25%;
            float: left;
        }
        .main {
            width: 75%;
            float: left;
        }
        #homebg {
            background-image: url("https://assets-cdn.github.com/images/modules/site/home-hero.jpg?sn");
            background-repeat: no-repeat;
            background-position: bottom left;
            background-size: cover;
            background-origin: border-box;
            height: 60%;
            width: 100%;
            position: inherit;
        }
        .home1 {
            color: white;
            font-size: 30px;
            padding-top: 5%;
            padding-left: 30%;
            position: relative;
        }
        #pcontent {
            margin: 2px;
            margin-bottom: 100px;
        }
        .indexregister {
            color: white;
            font-size: 30px;
            padding-left: 30%;
            position: relative;
        }
        .indexregister input {
            border: 1px solid #222;
            margin: 1px;
            margin-top: 5px;
        }
        .indexregister button {
            border: 0.5px solid #222;
            width: 100px;
            height: 25px;
            background-color: white;
        }
        #loginbox {
            width: 100%;
            height: 50px;
            background-color: #ecf0f1;
            bottom: 0;
            padding-top: 3px;
        }
    </style>
    <body>
        <?php
                    $sid = $_SESSION['id'];
                    $sql = "SELECT * FROM user WHERE id='$sid'";
                    foreach ($db->query($sql) as $row) {

                    }
            
                    if (isset($_SESSION['id'])) {
                        echo '<div id="homebg"><div class="home1">Hallo '.$row['uid'].'!  </div></div>';
                        
                    } else {
                        if($showrform == 'true'){
                            echo '<div id="homebg"><div class="home1">Registrieren</div><form class="indexregister" method="POST" action="includes/register.inc.php">
                            <input style="width: 300px; padding: 5px;"type="text" name="uid" placeholder="Username"><br>
                            <input style="width: 300px; padding: 5px;"type="text" name="email" placeholder="Email-Adresse"><br>
                            <input style="width: 300px; 5px; padding: 5px;"type="password" name="pwd" placeholder="Passwort">
                            <input style="width: 300px; 5px; padding: 5px;"type="password" name="pwd2" placeholder="Passwort wdh."><br><br>
                            <button type="submit">Registrieren</button></form></div>
                            <div id="loginbox"><form align="center" id="indexregister" method="POST" action="includes/login.inc.php">
                            <input style="width: 300px; padding: 5px;"type="text" name="uid" placeholder="Username">
                            <input style="width: 300px; 5px; padding: 5px;"type="password" name="pwd" placeholder="Passwort">
                            <button type="submit">Login</button></form></div>'; 
                        }else {
                            echo '<div id="homebg"><div class="home1">Das Usersystem wurde deaktiviert! <br>(Grund: '.$showrformreason.')</div></div>';
                        }
                    }
                ?>
        <br>
        <h2 style="font-family: Roboto, sans-serif;" align="center">Herzlich Willkommen!</h2><p id="pcontent" align="center"><?php echo $configuration['sitename']; ?></p>
	</body>
</html>
<?php
include 'footer.php';
?>
