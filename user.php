<?php
class user{
    public function User($id){
        $s = "select * from user where iduser =  '$id' limit 1";
        $bd = new good();
        $rusalt=$bd->reads($s);
        if($rusalt){
            $row = $rusalt[0];
            return $row;
        }else{
            return false;
        }
    }
    public function get_user_name($id){
        $s = "select * from user where iduser = '$id' limit 1";
        $bd = new good();
        $r= $bd->reads($s);
        if($r){
            return $r[0];
        }else{
            return false;
        }
    }
    public function get_firnd($id){
        $s = "select * from user where iduser != '$id'";
        $bd = new good();
        $r= $bd->reads($s);
        if($r){
            return $r;
        }else{
            return false;
        }
    }
}
?>