<?php
    include 'config.php';
    $copyright = "SELECT * FROM configuration";
    foreach ($db->query($copyright) as $row) {

    }
?>
<html>
    <style>
        * {
            text-decoration: none;
        }
        footer {
            width: 100%;
            height: 30px;
            background-color: #ecf0f1;
            position: fixed;
            bottom: 0;
            color: white;
            padding-top: 3px;
        }
        nav ul  {
            float: left;
            margin-top: 20px;
            margin-right: 60px;
        }
        nav ul li  {
            list-style: none;
            float: left;
            margin-right: 20px;
        }
        nav ul li a {
            color: #222;
            font-size: 16px;
        }
        a {
            text-decoration: none;
            color: #222;
        }
        a:hover {
            text-decoration: none;
            color: black;
        }
        #footerp {
            color: #222;
        }
    </style>
    <footer>
        <p id="footerp" align="center"><?php echo  $row['copyright']; ?> | Seitenversion: <?php echo  $row['version']; ?> | <a href="impressum.php">Impressum</a> | <a href="https://github.com/byReaper/wwwsinnlos">GitHub</a></p>
    </footer>
</html>