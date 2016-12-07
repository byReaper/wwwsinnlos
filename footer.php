<?php
    include 'config.php';
    $copyright = "SELECT * FROM configuration";
    foreach ($db->query($copyright) as $row) {

    }
?>

    <footer>
        <p id="footerp" align="center"><?php echo  $row['copyright']; ?> | Seitenversion: <?php echo  $row['version']; ?> | <a href="impressum.php">Impressum</a> | <a href="https://github.com/byReaper/wwwsinnlos">GitHub</a></p>
    </footer>
</html>