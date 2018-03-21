<?php
namespace Admin\Controller;
use Think\Controller;
class SystableController extends CommonController {
    
    //列表页面
    public function index(){
        $this->display();
    }

    //新增页面
    public function add(){
        if (isset($_GET['id'])){
            $model = M('Systable');
            $result = $model->where('id='.$_GET['id'])->find();
            $this->assign('model',$result);
        }else{
            $this->assign('model',null);
        }
        $this->display();
    }

    //加载列表
    public function loadList(){
        $list = null;
        $darw = 1;
        $total = 0;
        $start = 0;
        $length = 10;
        if (IS_GET){
            $params = I('get.');

            $darw = $params['draw'];
            $start = $params['start'];
            $length = $params['length'];

            $model = M('Systable');
            //搜索过滤
            $search = $params['search']['value'];
            if (!empty($search)){
                //$map['groupName'] = array('like','%'.$search.'%');
                //$list = $model->where($map)->limit($start,$length)->select();
                //$total = $model->where($map)->count();

                $list = $model->limit($start,$length)->select();
                $total = $model->count();
            }else{
                $total = $model->count();
                $list = $model->limit($start,$length)->select();
            }

        }
        $result['draw'] = $darw;
        $result['aaData'] = $list;
        $result['iTotalRecords'] = $total;
        $result['iTotalDisplayRecords'] = $total;
        $result['length'] = $length;
        $result['start'] = $start;

        echo json_encode($result);
    }


    //加载列表
    public function loadTree(){
        $model = M('Systable');
        $list = $model->select();
        echo json_encode($list);
    }

    //生成数据库表
    public function execute(){
        if (IS_GET){
            $ID = isset($_GET['id']) ? $_GET['id']:"";
            if (!empty($ID)){
                $model = D("Systable");
                $column = D("Syscolumn");
                $table = $model->where('id='.$ID)->find();
                $columns = $column->where('parentId='.$ID)->select();
                $sub = '';
                foreach ($columns as $col){
                    $typedId = $col['colType'];
                    $typeModel = M('Systype')->where('id='.$typedId)->find();
                    $sub = $sub . "`".$col['colName']."` ".$typeModel['name']."(".$col['colLength'].")";
                    if($col['defaultValue'] != ""){
                        $sub = $sub . "DEFAULT "."'".$col['defaultValue']."''";
                    }
                    if($col['remark'] != ""){
                        $sub = $sub . " COMMENT "."'".$col['remark']."'";
                    }
                    if($col['isPk'] == 1){
                        $sub = $sub ." NOT NULL AUTO_INCREMENT";
                    }
                    $sub = $sub . ",";
                }
                foreach ($columns as $col){
                    if($col['isPk'] == 1){
                        $sub = $sub ." PRIMARY KEY (`".$col['colName']."`)";
                    }
                }
                $sql = "CREATE TABLE `s_".$table['name']."`" ." (".$sub.") ENGINE=InnoDB DEFAULT CHARSET=utf8";
                M()->execute('drop table if exists `s_'.$table['name'].'`');
                $result =  M()->execute($sql);
                if($result == 0){
                    $this->success('创建成功!', __APP__.'/Systable/index');
                }else{
                    $this->success('创建失败!', __APP__.'/Systable/index');
                }
            }
        }else{
            $this->error('参数传递错误!', __APP__.'/Systable/index');
        }
    }

    public function generation()
    {
        $flag = false;
        $msg = '生成失败';
        if (IS_POST) {
            $ID = isset($_GET['id']) ? $_GET['id'] : "";
            if (!empty($ID)) {

                $table = D("Systable")->where('id='.$ID)->find();

                $nameLC = lcfirst($table['name']);
                $nameUC = ucfirst($table['name']);

                $cols = D('Syscolumn')->where('parentId='.$ID)->select();
                //初始化参数处理
                $this->assign("tableUC", $nameUC);                   //首字大写
                $this->assign("tableLC", $nameLC);                   //首字小写
                $this->assign("fields", $cols);                    //列
                $this->assign("modalName", $table['remark']);              //模块名称
                $this->assign("php", '<?php');                    //php
                $this->assign("app", '__APP__');                    //php
                $this->assign("admin", '__ADMIN__');                    //php
                $this->assign("ui", '__UI__');                    //php
                $this->assign("footer", '<include file="Public:footer" />');                    //php
                $this->assign("lefttop", '<include file="Public:lefttop" />');                    //php
                $this->assign("header", '<include file="Public:header" />');                    //php

                //第一步 生成Controller  (路径：Admin/Controller下)
                $this->buildHtml($nameUC . "Controller.class.php", 'Application/Admin/Controller/', "SysGeneration:controller");

                //第二步 生成列表html  (路径：存放在view/talbe名/)
                $this->buildHtml($nameUC . "/index.html", 'Application/Admin/View/', "SysGeneration:html");

                //第三步 生成列表js (路径：存放在Public/Admin/js)
                $this->buildHtml($nameLC . ".js", 'Public/Admin/js/', "SysGeneration:js");

                //第四步 生成新增html  (路径：存放在view/talbe名/)
                $this->buildHtml($nameUC . "/add.html", 'Application/Admin/View/', "SysGeneration:add");
                $flag = true;
                $msg = '生成成功';
            }
        }
        $data['success'] = $flag;
        $data['msg'] = $msg;
        echo json_encode($data);
    }

    public function existsTable(){

    }

    //新增修改
    public function save(){
        if (IS_GET){
            $date = date("Y-m-d H:i:s");
            $data = I('get.');
            $model = D("Systable");
            $id = $data['id'];
            $model = D("Systable");
            if (empty($id)){
                $model->data($data)->add();
                $this->success('新增成功!', __APP__.'/Systable/add');
            }else{
                $model->data($data)->save();
                $this->success('修改成功!', __APP__.'/Systable/index');
            }
        }else{
            $this->error('参数传递错误!', __APP__.'/Systable/index');
        }
    }

    //删除
    public function delete(){
        $result = false;
        $msg = '删除失败！';
        if (IS_POST){
            $ID = isset($_POST['id']) ? $_POST['id']:"";
            if (!empty($ID)){
                $model = D("Systable");
                $r = $model->where('id='.$ID)->delete();
                if ($r > 0){
                    $result = true;
                    $msg= '删除成功！';
                }
            }
        }
        $data['success'] = $result;
        $data['msg'] = $msg;
        echo json_encode($data);
    }
}