<?php
namespace Admin\Controller;
use Think\Controller;
class GenerationController extends CommonController {
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


    //代码生成-main
    public function handle(){
        $params = I('get.');
        $table = $params['table'];
        $modalName = $params['modalName'];
        if (!empty($table) && !empty($modalName)){
            $nameLC = lcfirst($table);
            $nameUC = ucfirst($table);

            $fields = M($nameUC)->getDbFields();
            //初始化参数处理
            $this->assign("tableUC",$nameUC);                   //首字大写
            $this->assign("tableLC",$nameLC);                   //首字小写
            $this->assign("fields",$fields);                    //列
            $this->assign("modalName",$modalName);              //模块名称
            $this->assign("php",'<?php');                    //php
            $this->assign("app",'__APP__');                    //php
            $this->assign("admin",'__ADMIN__');                    //php
            $this->assign("ui",'__UI__');                    //php
            $this->assign("footer",'<include file="Public:footer" />');                    //php
            $this->assign("lefttop",'<include file="Public:lefttop" />');                    //php
            $this->assign("header",'<include file="Public:header" />');                    //php

            //第一步 生成Controller  (路径：Admin/Controller下)
            $this->buildHtml($nameUC."Controller.class.php",'Application/Admin/Controller/',"Generation:controller");

            //第二步 生成列表html  (路径：存放在view/talbe名/)
            $this->buildHtml($nameUC."/index.html",'Application/Admin/View/',"Generation:html");

            //第三步 生成列表js (路径：存放在Public/Admin/js)
            $this->buildHtml($nameLC.".js",'Public/Admin/js/',"Generation:js");

            //第四步 生成新增html  (路径：存放在view/talbe名/)
            $this->buildHtml($nameUC."/add.html",'Application/Admin/View/',"Generation:add");


            $this->success('生成代码完成!', __APP__.'/Generation/index');
        }else{
            $this->error('参数传递错误!', __APP__.'/Generation/index');
        }
    }
}