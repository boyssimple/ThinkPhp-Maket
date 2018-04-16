<?php
namespace Home\Controller;
use Think\Controller;


class CommonController extends Controller {

    public function _initialize(){
        $system = M('System')->find();
        $this->assign('system',$system);

        //导航
        $nav = M('Navigation')->select();
        $this->assign('nav',$nav);

    }
}