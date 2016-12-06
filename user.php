<?php
    include('header.php');
    $sid = $_SESSION['id'];
    $user = "SELECT * FROM user WHERE id='$sid'";
    foreach ($db->query($user) as $row) {

    }
$url = "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
if (strpos($url, 'uidchange=success') !== false) {
    echo "<b><p style='font-family: Arial; color: red;' align='center'>Dein Profil wurde bearbeitet.</p></b>";
}
if (strpos($url, 'namechange=success') !== false) {
    echo "<b><p style='font-family: Arial; color: red;' align='center'>Dein Profil wurde bearbeitet.</p></b>";
}
if (strpos($url, 'pwdchange=success') !== false) {
    echo "<b><p style='font-family: Arial; color: red;' align='center'>Dein Profil wurde bearbeitet.</p></b>";
}
if (strpos($url, 'emailchange=success') !== false) {
    echo "<b><p style='font-family: Arial; color: red;' align='center'>Dein Profil wurde bearbeitet.</p></b>";
}
if (strpos($url, 'genderchange=success') !== false) {
    echo "<b><p style='font-family: Arial; color: red;' align='center'>Dein Profil wurde bearbeitet.</p></b>";
}
if (strpos($url, 'bplacechange=success') !== false) {
    echo "<b><p style='font-family: Arial; color: red;' align='center'>Dein Profil wurde bearbeitet.</p></b>";
}
if (strpos($url, 'birthchange=success') !== false) {
    echo "<b><p style='font-family: Arial; color: red;' align='center'>Dein Profil wurde bearbeitet.</p></b>";
}
if (strpos($url, 'mottochange=success') !== false) {
    echo "<b><p style='font-family: Arial; color: red;' align='center'>Dein Profil wurde bearbeitet.</p></b>";
}
?>
<style>
    p {
        padding: 5px;
    }
</style>

<p><b>Statistiken</p><a style="margin: 5px; color: black;" href="editprofile.php">Profil bearbeiten</a></b><hr>
<p>UserID: <?php echo $_SESSION['id']; ?></p>
<p>Rang: <?php if ($row['rang'] == 2) {
    echo $row['rang']." (Administrator) (Du hast Zugriff auf das Administratorbackend unter <a style='color: black;' href='acp/index.php'>Administratorbackend</a>)";
} 
elseif ($row['rang'] == 1) {
    echo $row['rang']." (Benutzer)";
}
?> </p>
<p>Benutzername: <?php echo $row['uid']; ?></p>
<p>Vorname: <?php echo $row['first']; echo " ".$row['last']; ?></p>
<p>Geburtsdatum: <?php echo $row['birth']; ?></p>
<p>Email-Adresse: <?php echo $row['email']; ?></p>
<p>Passwort: <?php echo $row['pwd']; ?></p><br>
<p><b>Sonstiges</b></p><hr><br>
<p>Geschlecht: <?php echo $row['gender']; ?></p>
<p>Geburtsort: <?php echo $row['birthplace']; ?></p>
<p>Motto: <?php echo $row['motto']; ?></p>

<?php
    if($row['rang'] == 2) {
        echo "<a style='margin: 0px; color: black;' href='acp/index.php'>Adminbackend</a>";
    }
?>


<?php
include 'footer.php';
?>