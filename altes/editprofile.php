<?php
    include('header.php');
    $sid = $_SESSION['id'];
    $user = "SELECT * FROM user WHERE id='$sid'";
    foreach ($db->query($user) as $row) {

    }
?>
<style>
    p {
        padding: 5px;
    }
    input {
        margin: 5px;
    }
</style>

<p><b>Profil bearbeiten</p><a style="margin: 5px; color: black;" href="user.php">Zurück</a></b><hr>
<p>Benutzername: <form action="edit/uid.php" method="POST">
    <input type="text" name="newuid" value="<?php echo $row['uid']; ?>">
    <button>Ändern</button>
</form></p>
<p>Vorname: <form action="edit/name.php" method="POST">
    <input type="text" name="newfirstlast" value="<?php echo $row['first']; echo " ".$row['last']; ?>">
    <button>Ändern</button>
</form></p>
<p>Geburtsdatum: <form action="edit/birth.php" method="POST">
    <input type="date" name="newbirth" value="<?php echo $row['birth']; ?>">
    <button>Ändern</button>
</form></p>
<p>Email-Adresse: <form action="edit/email.php" method="POST">
    <input type="text" name="newemail" value="<?php echo $row['email']; ?>">
    <button>Ändern</button>
</form></p>
<p>Passwort: <form action="edit/pwd.php" method="POST">
    <input type="password" name="newpwd" value="<?php echo $row['pwd']; ?>">
    <button>Ändern</button>
</form> </p>
<p>Geschlecht: <form action="edit/gender.php" method="POST">
    <input type="text" name="newgender" value="<?php echo $row['gender']; ?>">
    <button>Ändern</button>
</form></p>
<p>Geburtsort: <form action="edit/bplace.php" method="POST">
    <input type="text" name="newbplace" value="<?php echo $row['birthplace']; ?>">
    <button>Ändern</button>
</form></p>
<p>Motto: <form action="edit/motto.php" method="POST">
    <input type="text" name="newmotto" value="<?php echo $row['motto']; ?>">
    <button>Ändern</button>
</form></p>


<?php
include 'footer.php';
?>
