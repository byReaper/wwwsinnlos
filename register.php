<?php
    include 'header.php';
?>
        <h1 style="color: black;" align="center"><u>Registrieren</u></h1>
		<?php

            $url = "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
    	    if (strpos($url, 'error=empty') !== false) {
                echo "<b><p style='font-family: Arial; color: red;' align='center'>Du hast ein freies Feld gelassen. Bitte fülle alles aus!</p></b>";
            }
            elseif (strpos($url, 'error=username') !== false) {
                echo "<b><p style='font-family: Arial; color: red;' align='center'>Dieser Benutzername existiert bereits!</p></b>";
            }
            elseif (strpos($url, 'error=email') !== false) {
                echo "<b><p style='font-family: Arial; color: red;' align='center'>Dieser Email wurde bereits registriert!</p></b>";
            }
			if (isset($_SESSION['id'])) {
				echo "Du bist bereits eingeloggt!";
			} else {
				echo "<form align='center' action='includes/register.inc.php' method='POST'>
					<input style='width: 300px; border-radius: 5px; border-color: black; padding: 5px; margin: 5px;'type='text' name='first' placeholder='Vorname'> <br>   
					<input style='width: 300px; border-radius: 5px; border-color: black; padding: 5px; margin: 5px;'type='text' name='last' placeholder='Nachname'> <br> 
					<input style='width: 300px; border-radius: 5px; border-color: black; padding: 5px; margin: 5px;'type='text' name='email' placeholder='Email-Adresse'><br>
                    <input style='width: 300px; border-radius: 5px; border-color: black; padding: 5px; margin: 5px;'type='text' name='uid' placeholder='Username'><br>
					<input style='width: 300px; border-radius: 5px; border-color: black; padding: 5px; margin: 5px;'type='password' name='pwd' placeholder='Passwort'>  <br>
					<button style='cursor: pointer;border-radius: 5px;height: 22px;width: 90px; border: none; background-color: #222; color: white;'type='submit'>Registrieren</button>
				</form>";
			}
		?>
	</body>
</html>