<?php
class Post{
    private $error = "";
    public function crat_post($data,$userid){
        if(empty($data['post'])){
            $this->error .= "plase post word<br>";
        }else{
            $post = addslashes($data['post']);
            $postid = $this->carat_post_id();
            $s = "insert into post (user_id,post,post_id) values('$userid','$post','$postid')";
            $bd = new good();
            $bd->send_to_db($s);
        }
        return $this->error;
    }
    public function get_post($id){
        $s = "select * from post where user_id= '$id' order by id desc limit 10";
        $bd = new good();
        $ruzalt=$bd->reads($s);
        if($ruzalt){
            return $ruzalt;
        }else{
            return false;
        }
    }
    private function carat_post_id(){
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