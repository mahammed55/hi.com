<?php
class login{
    private $error = "";
public function chack($data){
        $email = addslashes($data['email']);
        $password = addsLashes($data['password']);
        $s = "select * from user where email = '$email' limit 1";
        //echo $s;
        $bd = new good();
        $rusalt=$bd->reads($s);
        if($rusalt){
            $row =$rusalt[0];
            if($password==$row['password']){
                $_SESSION['iduser']=$row['iduser'];
            }else{
                $this->error = $this->error."wrong password try agin!<br>";
            }
        }else{
            $this->error = $this->error."the email not found plase try corrcat email!<br>";
        }
        return $this->error;
    }
    public function chack_id($id){
        if(is_numeric($id)){
        $s = "select * from user where iduser = '$id' limit 1";
        $bd = new good();
        $rusalt=$bd->reads($s);
        if($rusalt){
            $user_data = $rusalt[0];
            return $user_data;
        }
        else{
            header("Location: index.php");
            die;
        }
        }else{
                header("Location: index.php");
                die;
            }  
    }
}
?>