<?php
namespace Admin\Controller;
use Think\Controller;
class PublicController extends CommonController {

    public function menu(){
        $this->display();
    }

    public function header(){
        $this->display();
    }

    public function footer(){
        $this->display();
    }

    public function lefttop(){
        $this->display();
    }
}