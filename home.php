<?php
session_start();
#print_r($_SESSION);
#unset($_SESSION["iduser"]);
include("php/connct.php");
include("php/loginto.php");
include("php/user.php");
include("php/post.php");
#isset($_SESSION["iduser"]);
$id=$_SESSION["iduser"];
#print_r($user_data);
#post is start in down
$Login = new login();
$Login->chack_id($id);
if($_SERVER['REQUEST_METHOD']=='POST'){
    $post= new Post();
    $r=$post->crat_post($_POST,$_SESSION["iduser"]);
    if($r==""){
        header("Location: home.php");
        die;
    }else{
        header("Location: home.php");
        echo "<h4 style='color:red;'>{$r}</h4>";
    }
}
$post1 = new Post();
$see = $post1->get_post($_SESSION["iduser"]);
//
$new= new user();
$see_firnd = $new->get_firnd(($_SESSION["iduser"]));
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="home.css">
    <title>hey| Home</title>
    <script src="java/hs.js"></script>
</head>
<body>
    <!--header-->
  <div id="bar1">
      <div id="bar2">
        hey
        &nbsp;&nbsp;<input id="seacr" type="search" placeholder="search for peoples">
        &nbsp;&nbsp<a href="profill.php"><img id="user" src="image/user4.png"></a><button id="chang" style="float: left; margin-left:100%; margin-top:-20px;" onclick="good();"><ion-icon name="sunny"></ion-icon></button></div></div>
<div id="bar3">
    
        <div id="menu"><a href="home.php"><button id="go" style="width:69px;margin: top -20px;color: rgb(245, 14, 156);background-color: black;border:none;font-weight: 800;font-size: 20px;"onclick="list();">home</button></a></div>
        <div id="menu"><a href="f.php"><button id="go1" style="width:69px;margin: top -20px;color: rgb(245, 14, 156);background-color: white;border:none;font-weight: 800;font-size: 20px;"onclick="mune1();">firnd</button></a></div>
        <div id="menu"><button id="go2" style="width:69px;margin: top -20px;color: rgb(245, 14, 156);background-color: white;border:none;font-weight: 800;font-size: 20px;"onclick="chat();">chat</button></div>
        <div id="menu"><button id="go3" style="width:70px;margin: top -20px;color: rgb(245, 14, 156);background-color: white;border:none;font-weight: 800;font-size: 20px;"onclick="chat2();">notfction</button></div>
    </div>
    <br>
    <div style="margin:auto; width: 50%">
    <?php
         /*if($see_firnd){
             #echo var_dump($see_firnd);
            foreach($see_firnd as $FIRND_ROW){
               //$new = new user();
               //$USER_NAME= $new->get_user_name($ROW["user_id"]);
               include("f.php");
            }
       }*/
    ?>
    
    <div style="min-height: 400px; margin:auto; padding: 5px; width:90%;">
        <!--post-area-->
    <div style="border: 1px solid white; margin:auto; width:90%; padding: 5px;background-color: dimgrey;">
    <form method="post">
    <textarea style="height:70%; background-color:thistle;color:black; margin:auto"  name="post" placeholder="what is new to do post?"></textarea>
    <button id="post"type="submit">post</button></form>
    <br>
    <!--post-->
     <?php
     #var_dump($see);
     if($see){
         foreach($see as $ROW){
            $new = new user();
            $USER_NAME= $new->get_user_name($ROW["user_id"]);
            include("post.php");
         }
     }
     ?>
    </div>
    </div>
    </div>
<!--</div>-->
<script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
</body>
</html>