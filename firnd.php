<?php
class firnd{
    public function get_firnd($id){
        $s = "select * from user where iduser != '$id'";
        $bd = new good();
        $r= $bd->reads($s);
        $row = $r[0];
        $_SESSION['iduser']=$row['iduser'];
        if($r){
            return $r;
        }else{
            return false;
        }
    }
}?>