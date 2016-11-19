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
<form action="namechange.php" method="POST">
    <input style="margin: 5px;" type="text" name="newuid" placeholder="Neuer Benutzername">
    <button style="margin: 5px; border-radius: 2px; border: none; color: white; background-color: black; padding: 5px;">Benutzernamen ändern</button>
</form>
<p>Vor-/Nachname: <?php echo $row['first']; echo " ".$row['last']; ?></p>
<p>Geburtsdatum: <?php echo $row['birth']; ?></p>
<p>Email-Adresse: <?php echo $row['email']; ?></p>
<form action="emailchange.php" method="POST">
    <input style="margin: 5px;" type="text" name="newemail" placeholder="Neue Email-Adresse">
    <button style="margin: 5px; border-radius: 2px; border: none; color: white; background-color: black; padding: 5px;">Email-Adresse ändern</button>
</form>
<p>Passwort: <?php echo $row['pwd']; ?></p>
<form action="pwdchange.php" method="POST">
    <input style="margin: 5px;" type="password" name="newpwd" placeholder="Neues Passwort">
    <button style="margin: 5px; border-radius: 2px; border: none; color: white; background-color: black; padding: 5px;">Passwort ändern</button>
</form><br>
<p><b>Sonstiges</b></p><hr><br>
<p>Geschlecht: <?php echo $row['gender']; ?></p>
<p>Geburtsort: <?php echo $row['birthplace']; ?></p>
<p>Motto: <?php echo $row['motto']; ?></p>
<form action="sonschange.php" method="POST">
    <input style="margin: 5px;" type="text" name="gender" value="<?php echo $row['gender']; ?>">
    <input style="margin: 5px;" type="text" name="birthplace" value="<?php echo $row['birthplace']; ?>">
    <input style="margin: 5px;" type="text" name="motto" value="<?php echo $row['motto']; ?>">
    <button style="margin: 5px; border-radius: 2px; border: none; color: white; background-color: black; padding: 5px;">Bearbeiten</button>
</form>


<?php
include 'footer.php';
?>