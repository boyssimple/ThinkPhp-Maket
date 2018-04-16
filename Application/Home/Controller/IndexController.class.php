<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends CommonController {
    public function index(){

        $gallery = D("Gallery")->select();

        $this->assign('gallerys',$gallery);
        $this->display();
    }
}