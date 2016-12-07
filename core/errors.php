<?php
$error = $_POST['error'];
$back = $_POST['back'];

if(!$error){
    $msg = "Es wurden keine Daten &uuml;bertragen!";
    $back = "/";
}

//errors

if($error == 1501){
    $msg = "Die Passwörter stimmen nicht überein!";
}


/*error list
1501 : Passwoerter stimmen nicht

*/
?>
<HTML>
    <heAD>
<!-- Das neueste kompilierte und minimierte CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

<!-- Optionales Theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">

<!-- Das neueste kompilierte und minimierte JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    </heAD>
    <style>
        #box{
            height: 50px;
            width: 30%;
        }
    </style>
    
    
<body style="background-color: #FFF">
    <br>
    <br>
    <br>
    <center>
        <div id="box">
            <div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-label="Schließen"><span aria-hidden="true">&times;</span></button>
                <strong>Warnung!</strong> Du siehst ganz blass aus, ist alles in Ordnung?
            </div>
        </div>
    </center>
</body>
</HTML>