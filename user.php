<?php
    include('header.php');
    session_start();
    $user = "SELECT * FROM user";
    foreach ($db->query($user) as $row) {

    }
?>
<style>
    p {
        padding: 5px;
    }
</style>

<p><b>Statistiken</b></p><hr>
<p>UserID: <?php echo $_SESSION['id']; ?></p>
<p>Benutzername: <?php echo $row['uid']; ?></p>
<form action="ch_uid.php" method="POST">
    <input style="margin: 5px;" type="text" name="newuid" placeholder="Neuer Benutzername">
    <button style="margin: 5px; border-radius: 2px; border: none; color: white; background-color: black; padding: 5px;">Benutzernamen ändern</button>
</form>
<p>Vor-/Nachname: <?php echo $row['first']; echo " ".$row['last']; ?></p>
<p>Geburtsdatum: <?php echo $row['birth']; ?></p>
<p>Email-Adresse: <?php echo $row['email']; ?></p><button style="margin: 5px; border-radius: 2px; border: none; color: white; background-color: black; padding: 5px;">Email-Adresse ändern</button>
<p>Passwort: *****</p><button style="margin: 5px; border-radius: 2px; border: none; color: white; background-color: black; padding: 5px;">Passwort ändern</button><br>
<p><b>Sonstiges</b></p><hr><br>
<button style="margin: 5px; border-radius: 2px; border: none; color: white; background-color: black; padding: 5px;">Bearbeiten</button>
