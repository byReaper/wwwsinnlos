<?php
    $site = 'Startseite';
    include 'header.php';

    // Neues Login/Register/Logout-System
    $config = "SELECT * FROM configuration";
    foreach ($db->query($config) as $configuration) {}
    $user = "SELECT * FROM user";
    foreach ($db->query($config) as $user) {}
    $showrform = $configuration['showregister'];
    $showrformreason = $configuration['showregisterreason'];
            $url = "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
?>  
    <link href="css/index.css" rel="stylesheet">
        <?php
                    if(isset($_SESSION['id'])){
                        $sid = $_SESSION['id'];
                        $sql = "SELECT * FROM user WHERE id='$sid'";
                        foreach ($db->query($sql) as $row) {}
                        echo '<div id="homebg"><div class="home1">Hallo '.$col['uid'].'!<br><form action="includes/logout.inc.php">
                            <button>Ausloggen</button>
                            <input type="hidden" name="logout">
                        </form>  </div></div>';
                        
                    } else {
                        if($showrform == 'true'){
                            echo '<div id="homebg"><div class="home1">Registrieren</div><form class="indexregister" method="POST" action="core/sql_core.php">
                            <input style="width: 300px; padding: 5px;"type="text" name="uid" placeholder="Username"><br>
                            <input style="width: 300px; padding: 5px;"type="text" name="email" placeholder="Email-Adresse"><br>
                            <input style="width: 300px; 5px; padding: 5px;"type="password" name="pwd" placeholder="Passwort">
                            <input style="width: 300px; 5px; padding: 5px;"type="password" name="pwd2" placeholder="Passwort wdh."><br><br>
                            <input type="hidden" name="core" value="register">
                            <button type="submit">Registrieren</button></form></div>
                        '; 
                        }else {
                            echo '<div id="homebg"><div class="home1">Das Usersystem wurde deaktiviert! <br>(Grund: '.$showrformreason.')</div></div>';
                        }
                    }
                ?>
        <br>
        <h2 style="font-family: Roboto, sans-serif;" align="center">Herzlich willkommen..</h2><p id="pcontent" align="center">.. auf <?php echo $configuration['sitename']; ?></p>
	</body>

<?php
include 'footer.php';
?>
