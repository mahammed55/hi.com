<?php
class good{
    private $host = "localhost";
    private $username = "root";
    private $password = "";
    private $data_baze = "hey";
function connect2(){
    $connect = mysqli_connect($this->host,$this->username,$this->password,$this->data_baze);
    return $connect;
}
function reads($s){
    $con= $this->connect2();
    $r=mysqli_query($con,$s);
    if(!$r){
        return false;
    }else{
        $data = false;
        while($nass=mysqli_fetch_assoc($r)){
            $data[] = $nass;
        }
        return $data;
    }
}
function send_to_db($s){
    $con=$this->connect2();
    $r = mysqli_query($con,$s);
    if(!$r){
        return false;
    }else{
        return true;
    }
}
}
?>