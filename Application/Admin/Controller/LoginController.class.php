<?php
namespace Admin\Controller;
use Think\Controller;
class LoginController extends Controller {
    public function index(){
        $this->display();
    }

    public function login(){
        $_SESSION['uid'] = 'admin';
        $this->success('登录成功', __APP__.'/Index/index');
    }

    public function logout(){
        unset($_SESSION['uid']);
        $this->success('退出成功', __APP__.'/Login/index');
    }


    public function test(){
        $content = '<p><img src="http://www.baidu.com/abc1.png"/> fasdfasdfasd<img src="http://www.baidu.com/abc2.png"/><img src="http://www.baidu.com/abc3.png"/></p>';
        echo "<hr/>";
        echo "<hr/>";
        echo "<hr/>";
        $pregRule = '/src="([^"]*)?"/u';
        preg_match_all($pregRule, $content,$match);
        var_dump($match[1]);
    }
}