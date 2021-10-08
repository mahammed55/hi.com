<?php
session_start();
include("php/connct.php");
include("php/loginto.php");
$email = "";
$password = "";
if($_SERVER['REQUEST_METHOD']=='POST'){
  $l_g = new login;
  $rusalt1=$l_g->chack($_POST);
  if($rusalt1 !=""){
    echo "<center style='color: red; font-size: 25px; background-color: black;'>{$rusalt1}</center>";
  }else{
    header("Location: home.php");
  }
  $email = $_POST['email'];
  $password = $_POST['password'];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="style/style.css">
  <title>hey| login</title>
</head>
<body style="background-color: white;">
<h2>hey</h2>
<hr>
<div id="bar1">
  <h2 style="width: 100px;">Login</h2>
    <form method="Post" action="">
    <label for="email">Email:</label>
    <input name="email" value ="<?php echo $email; ?>"type="email" placeholder="email"><br>
    <label for="password">password:</label>
    <input name="password" value="<?php echo $password; ?>" type="password"  placeholder="password"><br>
    <button>login</button><br><br>
    <a id="password-for-get" href="$">for get password</a><br><br>
    <a id="sing-login" href="singup.php">I have't creat account?</a>
   </form>
</div>
</body>
</html>