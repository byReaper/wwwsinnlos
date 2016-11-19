<?php
    include 'config.php';
    $copyright = "SELECT copyright FROM configuration";
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
            background-color: #222;
            position: fixed;
            bottom: 0;
            color: white;
            padding-top: 3px;
        }
        nav ul  {
            float: right;
            margin-top: 20px;
            margin-right: 60px;
        }
        nav ul li  {
            list-style: none;
            float: left;
            margin-right: 20px;
        }
        nav ul li a {
            color: white;
            font-size: 16px;
        }
        a {
            text-decoration: none;
            color: white;
        }
        a:hover {
            text-shadow: 0px 0 15px #fff;
        }
    </style>
    <footer>
        <p align="center"><?php echo  $row['copyright']; ?> | <a href="impressum.php">Impressum</a></p>
    </footer>
</html>