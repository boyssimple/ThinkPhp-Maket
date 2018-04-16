<?php
namespace Admin\Controller;
use Think\Controller;
class SyscolumnController extends CommonController {
    
    //列表页面
    public function index(){
        $this->display();
    }

    //新增页面
    public function add(){
        if (isset($_GET['id'])){
            $model = M('Syscolumn');
            $result = $model->where('id='.$_GET['id'])->find();
            $this->assign('model',$result);
        }else{
            $this->assign('model',null);
        }

        $type = M('Systype');
        $list = $type->select();
        $this->assign('type',$list);

        $this->display();
    }

    //加载列表
    public function loadList(){
        $list = null;
        $li = array();
        $darw = 1;
        $total = 0;
        $start = 0;
        $length = 10;
        if (IS_GET){
            $params = I('get.');
            $darw = $params['draw'];
            $start = $params['start'];
            $length = $params['length'];

            $model = M('Syscolumn');
            //搜索过滤
            $search = $params['search']['value'];
            if (!empty($search)){
                //$map['groupName'] = array('like','%'.$search.'%');
                //$list = $model->where($map)->limit($start,$length)->select();
                //$total = $model->where($map)->count();

                $list = $model->limit($start,$length)->select();
                foreach ($list as $a){
                    $colType = $a['colType'];
                    $typeModel = M('Systype');
                    $type =  $typeModel->where('id='.$colType)->find();
                    $a['colTypeName'] = $type['name'];
                    array_push($li,$a);
                }

                $total = $model->count();
            }else{
                $total = $model->where('parentId='.$params['id'])->count();
                $list = $model->where('parentId='.$params['id'])->limit($start,$length)->select();
                foreach ($list as $a){
                    $colType = $a['colType'];
                    $typeModel = M('Systype');
                    $type =  $typeModel->where('id='.$colType)->find();
                    $a['colTypeName'] = $type['name'];
                    array_push($li,$a);
                }
            }

        }
        $result['draw'] = $darw;
        $result['aaData'] = $li;
        $result['iTotalRecords'] = $total;
        $result['iTotalDisplayRecords'] = $total;
        $result['length'] = $length;
        $result['start'] = $start;

        echo json_encode($result);
    }

    //新增修改
    public function save(){
        if (IS_GET){
            $date = date("Y-m-d H:i:s");
            $data = I('get.');
            $model = D("Syscolumn");
            $id = $data['id'];
            if ($data['isPk'] == 'on'){
                $data['isPk'] = 1;
            }else{
                $data['isPk'] = 0;
            }
            if ($data['isHidden'] == 'on'){
                $data['isHidden'] = 1;
            }else{
                $data['isHidden'] = 0;
            }
            if ($data['state'] == 'on'){
                $data['state'] = 1;
            }else{
                $data['state'] = 0;
            }
            if (empty($id)){
                $model->data($data)->add();
                $this->success('新增成功!', __APP__.'/Syscolumn/add');
            }else{
                $model->data($data)->save();
                $this->success('修改成功!', __APP__.'/Syscolumn/index?id='.$data['parentId']);
            }
        }else{
            $this->error('参数传递错误!', __APP__.'/Syscolumn/index');
        }
    }

    //删除
    public function delete(){
        $result = false;
        $msg = '删除失败！';
        if (IS_POST){
            $ID = isset($_POST['id']) ? $_POST['id']:"";
            if (!empty($ID)){
                $model = D("Syscolumn");
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