<?php
include("php/connct.php");
include("php/sing.php");
$first_name = "";
$last_name = "";
$email = "";
$gender = "";
if($_SERVER['REQUEST_METHOD']=='POST'){
  $first = new sing;
  $rusalt=$first->chack($_POST);
  if($rusalt !=""){
    echo "<center style='color: red; font-size: 25px; background-color: black;'>{$rusalt}</center>";
  }else{
    header("Location: login.php");
    die;
  }
  $first_name = $_POST["first_name"];
  $last_name = $_POST["last_name"];
  $email = $_POST["email"];
  $gender = $_POST["gender"];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="style/style.css">
  <title>hey| sing</title>
</head>
<body style="background-color: rgb(216, 210, 199);">
<h3>hey</h2>
<hr>
<div id="bar1">
     <form action="" method="POST">
       <h3>sing</h3>
       <label for="firstname">First name:</label>
       <input value ="<?php echo $first_name; ?>"type="text" name="first_name" placeholder="first name" ><br>
       <label for="lastname">Last name:</label>
       <input value ="<?php echo $last_name; ?>" type="text" name="last_name" placeholder="Last name" ><br>
       <label for="email">emails:</label>
       <input value ="<?php echo $email; ?>" type="email" name="email" placeholder="email" ><br>
       <label for="password">password:</label>
       <input type="password" name="password" placeholder="password" ><br><br>
       <label for="gender">gender:</label>
       <select value ="<?php echo $gender; ?>" name="gender">
       <option><?php echo $gender; ?></option>
         <option>male</option>
         <option>famale</option>
         <option>other</option>
       </select>
       <button type="submit">sing</button><br><br>
       <a id="sing-login" href="login.php">I read caret accunt!</a>
     </form>
</div>
</body>
</html>