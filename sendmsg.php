<?php
include 'header.php';
?>
<html>
    <style>
            nav ul form  {
                float: left;
            }
            nav ul form input  {
                float: left;
                border: none;
                margin-right: 6px;
                border-radius: 5px;
                height: 22px;
                width: 120px;
                padding-left: 5px;
            }
            nav ul form button {
                float: left;
                border: none;
                margin-right: 20px;
                background-color: white;
                color: black;
                font-size: 16px;
                cursor: pointer;
                border-radius: 5px;
                height: 22px;
                width: 90px;
            }
    </style>
    <body>
        <form action="send.php" method="POST">
            <input type="text" name="nachricht" placeholder="Deine Nachricht">
            <input type="text" name="empfanger" placeholder="Empfänger">
            <button name="submit">Absenden</button>
        </form>
    </body>
</html>
<?php
include 'footer.php';
?>