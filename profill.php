<?php
session_start();
#print_r($_SESSION);
#unset($_SESSION["iduser"]);
include("php/connct.php");
include("php/loginto.php");
include("php/user.php");
if(isset($_SESSION["iduser"]) && is_numeric($_SESSION["iduser"])){
    $id = $_SESSION["iduser"];
    $home= new login();
    $rutalt=$home->chack_id($id);
    if($rutalt){
        $new = new user();
        $user_data=$new->User($id);
        if(!$user_data){
            header("Location: login.php");
            die;
        }
    }else{
        header("Location: login.php");
        die;
    }
}else{
        header("Location: login.php");
        die;
    }
//this is data all of sqli
#print_r($user_data);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>profil</title>
</head>
<body>
    <style>
        #bar1{
            background-color: wheat;
            margin: 0px;
            padding: 0px;
        }
        #icon{
            color: red;
            padding: 2px;
        }
        #user-icon{
            font-size: 50px;
            padding: 2px;
        }
        i{
            color: red;
            margin-bottom: 20px;
            margin: 2px;
            padding: 2px;
            margin-top: -100px;
        }
        #i{
            color: red;
            margin-bottom: 20px;
            margin: 2px;
            padding: 2px;
            margin-left: 110px;
        }
        #file{
            margin-left: 50%;
            background-color: black;
            color: red;
        }
        #active{
            color: orange;
            margin-bottom: 20px;
            margin: 2px;
            padding: 2px;
            margin-left: 110px; 
        }
        #bar2{
            margin: auto;
            width: 500px;
            background-color: palevioletred;
            min-height: 100px;
        }
        #user-name-edit{}
        #post{
            width: 100%;
            border-radius: 2px;
        }
        #logout{
            margin-left: 70%;
            background-color: blueviolet;
            width: 50px;
            height: 20px;
            color: black;
        }
    </style>
    <div id="bar1" style="background-color: black;">
    <a  id="a" href="home.php"><span class="left"><ion-icon name="arrow-dropleft-circle" id="icon" style="font-size: 50px;"></ion-icon></span></i></a>
    <a id="a" href="see.php"><ion-icon name="contact" id="user-icon"></ion-icon></a>
    <i><?php echo $user_data["first_name"]." ".$user_data["last_name"];?></i>
    <input type="file" id="file" value="n"><br>
    <i id="active">Active</i><br>
    <i id="i"><?php echo "id:". $user_data["iduser"];?></i>
    <a href="logout.php" id="logout">logout</a>
    </div><br>
    <div id="bar2">
        <a href="$"><i id="user-name-edit">#mahammed</i></a><br>
        <?php echo "user name<br>";?>
        <a href="$"><i id="about-my">this is the first websity</i></a><br>
        <?php  echo "about my";?>
        <hr>
        <?php echo "<h2>my post</h2><br>";?>
        <img id="post" src="image/my first post.jpg">
        <ion-icon name="heart-empty"></ion-icon>
    </div>
    <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
</body>
</html>