<?php
namespace Mobile\Controller;
use Think\Controller;


class LoginController extends Controller {


    public function index(){
        $this->show('hello','utf-8');
    }

    public function login(){
        $appid = "wxb6077d68e8e36c55";
        $secret = "374cfa125c3a4f04976735cdbaf7dfb8";
        $code = '';
        if (isset($_GET['code'])){
            $code = $_GET['code'];
        }
        if (isset($_POST['code'])){
            $code = $_POST['code'];
        }
        $url ='https://api.weixin.qq.com/sns/jscode2session?appid='.$appid.'&secret='.$secret.'&js_code='.$code.'&grant_type=authorization_code';
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_TIMEOUT, 500);
        // 为保证第三方服务器与微信服务器之间数据传输的安全性，所有微信接口采用https方式调用，必须使用下面2行代码打开ssl安全校验。
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($curl, CURLOPT_URL, $url);

        $res = curl_exec($curl);
        curl_close($curl);


        $json_obj = json_decode($res,true);
        $openid = $json_obj["openid"];
        $session_key = $json_obj["session_key"];
        $unionid  =  $json_obj["unionid"];
        $flag = false;
        if ($openid){
            $flag = true;
            $data['openid'] = $openid;
            $data['unionid'] = $unionid;
            $data['session_key'] = $session_key;
        }
        $data['success'] = $flag;
        $data['objs'] = $json_obj;
        echo json_encode($data);
    }
}