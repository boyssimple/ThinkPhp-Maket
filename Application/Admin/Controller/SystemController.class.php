<?php
namespace Admin\Controller;
use Think\Controller;
use Think\Think;


class SystemController extends CommonController {
    
    //列表页面
    public function index(){
        $this->display();
    }

    //新增页面
    public function add(){ $model = M('System');
        $result = $model->find();
        if (!empty($result)){
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

            $model = M('System');
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

    //新增修改

    public function save(){
        if (IS_POST){
            $date = date("Y-m-d H:i:s");
            $data = I('post.');
            $model = D("System");

            // 上传文件
            if ($_FILES['favicon_file']['name'] != ""){
                $upload = new \Think\Upload();// 实例化上传类
                $upload->maxSize   =     3145728 ;// 设置附件上传大小
                $upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
                $upload->rootPath  =     __UPLOAD__; // 设置附件上传根目录
                $upload->savePath  =     ''; // 设置附件上传（子）目录
                $upload->saveName = array('uniqid','');
                $info   =   $upload->uploadOne($_FILES['favicon_file']);
                if(!$info) {// 上传错误提示错误信息
                    $this->error($upload->getError(), __APP__.'/System/add');
                }else{// 上传成功
                    $path =  $info['savepath'].$info['savename'];
                    //把之前的文件删除
                    if ($data['favicon'] != ""){
                        unlink(__UPLOAD__.$data['favicon']);
                    }
                }
                $data['favicon'] = $path;
            }
            $id = $data['id'];
            if (empty($id)){
                $model->data($data)->add();
                $this->success('新增成功!', __APP__.'/System/add');
            }else{
                $model->data($data)->save();
                $this->success('修改成功!', __APP__.'/System/add');
            }
        }else{
            exit();
            $this->error('参数传递错误!', __APP__.'/System/add');
        }
    }

    //删除
    public function delete(){
        $result = false;
        $msg = '删除失败！';
        if (IS_POST){
            $ID = isset($_POST['id']) ? $_POST['id']:"";
            if (empty($ID)){
                $model = D("System");
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