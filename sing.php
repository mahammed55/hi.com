<?php
class sing{
    private $error = "";
    public function chack($data){
        foreach($data as $key => $value){
            if(empty($value)){
                $this->error = $this->error .$key ." is empty!<br>";
            }
            if($key=="email"){
            if(!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/",$value)){
                $this->error = $this->error."enter avilbael email!<br>";
            }
        }
            if($key=="last_name"){
                if(is_numeric($value)){ 
                    $this->error = $this->error ."last_name can not be number<br>";
                }if(strstr($value, " ")){
                    $this->error=$this->error."last_name can not have speac!";
                }
            }if($key=="first_name"){
                if(is_numeric($value)){
                    $this->error = $this->error ."first_name can not be number<br>";
                }if(strstr($value, " ")){
                    $this->error=$this->error."first_name can not have speac!";
                }
                
            }
        }
        if($this->error==""){
            $this->carat_user($data);
        }else{
            return $this->error;
        }
    }
    public function carat_user($data){
        $first_name = ucfirst($data['first_name']);
        $last_name = ucfirst($data['last_name']);
        $email = $data['email'];
        $password = $data['password'];
        $gender = $data['gender'];
        $userid = $this->carat_user_id();
        $url_user= strtolower($first_name)[0].".".strtolower($last_name[0]);
        $s = "insert into user (iduser,first_name,last_name,email,password,gender,url_users) 
        values ('$userid','$first_name','$last_name','$email','$password','$gender','$url_user')";
        #echo $s;
        $bd = new good();
        $bd->send_to_db($s);
    }
    private function carat_user_id(){
        $ron = rand(4,19);
        $num = "";
        for($i=0; $i<$ron; $i++){
            $new_ron = rand(0,9);
            $num=$num.$new_ron;
        }
        return $num;
    }
}
?>