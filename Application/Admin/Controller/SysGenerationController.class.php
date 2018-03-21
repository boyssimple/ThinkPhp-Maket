<?php
namespace Admin\Controller;
use Think\Controller;
class SysGenerationController extends CommonController {
    public function index(){
        $this -> display();
    }

    //代码生成-controller
    public function controller(){
        $this -> display();
    }

    //代码生成-html
    public function html(){
        $this -> display();
    }

    //代码生成-js
    public function js(){
        $this -> display();
    }

    //代码生成-add html
    public function add(){
        $this -> display();
    }

}