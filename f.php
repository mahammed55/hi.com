<?php
include("php/connct.php");
include("php/firnd.php");
session_start();
$id=$_SESSION["iduser"];
$f = new firnd();
$r=$f->get_firnd($id);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>hey|firnd</title>
    <script src="java/hs.js"></script>
    <style>
    #firnd1{
        width: 300px;
        height: 50px;
        margin: auto;
        display:flex;
    }
    p{
        margin-left: 20%;
        margin-top: -8%;
    }
    </style>
</head>
<body>
    
    <div id="firnd1">
    <div id="menu"><a href="home.php"><button id="go" style="width:69px;margin: top -20px;color: rgb(245, 14, 156);background-color: white;border:none;font-weight: 800;font-size: 20px;"onclick="list();">home</button></a></div>
        <div id="menu"><a href="f.php"><button id="go1" style="width:69px;margin: top -20px;color: rgb(245, 14, 156);background-color: black;border:none;font-weight: 800;font-size: 20px;"onclick="mune1();">firnd</button></a></div>
        <div id="menu"><button id="go2" style="width:69px;margin: top -20px;color: rgb(245, 14, 156);background-color: white;border:none;font-weight: 800;font-size: 20px;"onclick="chat();">chat</button></div>
        <div id="menu"><button id="go3" style="width:70px;margin: top -20px;color: rgb(245, 14, 156);background-color: white;border:none;font-weight: 800;font-size: 20px;"onclick="chat2();">notfction</button></div>
        <div style="width: 300px; min-height:100px; margin:auto; background-color:#5d665f;">
    <?php
    if($r){
        foreach($r as $FIRND_ROW){
            $new = new firnd();
            $USER_NAME= $new->get_firnd($id[0]);
            //var_dump($FIRND_ROW);
            include("firnd.php");
        }
    }
    ?>
</body>
</html>
