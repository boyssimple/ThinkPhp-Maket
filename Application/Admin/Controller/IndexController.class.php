<?php
namespace Admin\Controller;
use Think\Controller;
class IndexController extends CommonController {

    public function index(){

        $cur_name = '';
        if (isset($_SESSION['uid'])) {
            $cur_name = $_SESSION['uid'];
        }
        $this->assign('cur_name',$cur_name);
        $this->display();
    }

    public function form(){
        $this->display();
    }
}