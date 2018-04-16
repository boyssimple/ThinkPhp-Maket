<?php
namespace Home\Controller;
use Think\Controller;
class PublicController extends CommonController {

    public function head(){
        $this->display();
    }

    public function header(){
        $this->display();
    }

    public function footer(){
        $this->display();
    }
}