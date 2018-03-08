<?php
namespace Mobile\Controller;
use Org\Util\Date;
use Think\Controller;


class UserController extends Controller {


    public function index(){
        $this->show('hello','utf-8');
    }

    public function hello(){
        if (IS_POST){
            $user = I('get.');
            echo json_encode($user);
        }else{
            echo '...';
        }
    }

    public function saveUser(){
        if (IS_GET){
            $regDate = date("Y-m-d H:i:s");
            $openId = "";
            $data = I('get.');
            if (count($data) > 0){
                $openId = $data['openid'];
            }
            $User = D("User"); // 实例化User对象
            $list = $User->where('openId="'.$openId.'"')->count();
            if ($list < 1){
                $data['regDate'] = $regDate;
                $User->data($data)->add();
            }
        }
    }


}