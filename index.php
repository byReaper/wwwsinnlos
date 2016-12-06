<?php
    $site = 'Startseite';
    include 'header.php';
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
        #indexregister {
            color: white;
            font-size: 30px;
            padding-left: 30%;
            position: relative;
        }
        #indexregister input {
            border: 1px solid #222;
            margin: 1px;
            margin-top: 5px;
        }
        #indexregister button {
            border: 0.5px solid #222;
            width: 100px;
            height: 25px;
            background-color: white;
        }
    </style>
    <body>
        <div id="homebg"><div class="home1">Registrieren</div><form id="indexregister" action="includes/register.inc.php">
            <?php if (strpos($url, 'error=empty') !== false) {
                echo "<b><p style='font-size: 12px; font-family: Roboto; color: #d35400;'>Du hast ein freies Feld gelassen. Bitte fülle alles aus!</p></b>";
            }
            elseif (strpos($url, 'register_success') !== false) {
                echo "<b><p style='font-size: 12px; font-family: Roboto; color: green;'>Du bist erfolgreich in unserer Datenbank registriert worden!</p></b>";
            }?>
                    <input style='width: 300px; padding: 5px;'type='text' id='uid' placeholder='Username'><br>
					<input style='width: 300px; padding: 5px;'type='text' id='email' placeholder='Email-Adresse'><br>
					<input style='width: 300px; 5px; padding: 5px;'type='password' id='pwd' placeholder='Passwort'><br><br>
					<button type='submit'>Registrieren</button></form></div><br>
        <h2 style="font-family: Roboto, sans-serif;" align="center">Herzlich Willkommen!</h2><p id="pcontent" align="center">Hier entsteht eine Webseite.</p>
	</body>
</html>
<?php
include 'footer.php';
?>
