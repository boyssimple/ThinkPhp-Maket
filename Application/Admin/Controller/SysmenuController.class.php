<?php
namespace Admin\Controller;
use Think\Controller;
class SysmenuController extends CommonController {
    
    //列表页面
    public function index(){
        $this->display();
    }

    //新增页面
    public function add(){
        if (isset($_GET['id'])){
            $model = M('Sysmenu');
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

            $model = M('Sysmenu');
            //搜索过滤
            $search = $params['search']['value'];
            if (!empty($search)){
                $map['name'] = array('like','%'.$search.'%');
                $list = $model->where($map)->limit($start,$length)->select();
                $total = $model->where($map)->count();
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

    //加载树
    public function loadTree(){
        $model = M('Sysmenu');
        $list = $model->where('parentId=0')->order('orderNo asc')->select();
        $data = Array();
        foreach ($list as $item){
            $children = $this->loadSub($item['id']);;
            if (count($children) > 0){
                $item['children'] = $children;
            }
            $item['count'] = $model->where('parentId='.$item['id'])->count();
            array_push($data,$item);
        }
        echo json_encode($data);
    }

    private function loadSub($parentId){
        $model = M('Sysmenu');
        $list = $model->where('parentId='.$parentId)->order('orderNo asc')->select();
        if (count($list) > 0){
            $data = Array();
            foreach ($list as $item){
                $children = $this->loadSub($item['id']);
                if (count($children) > 0){
                    $item['children'] = $children;
                }

                $item['count'] = $model->where('parentId='.$item['id'])->count();
                array_push($data,$item);
            }
            return $data;
        }else{
            return null;
        }

    }

    //新增修改
    public function save(){
        if (IS_GET){
            $date = date("Y-m-d H:i:s");
            $data = I('get.');
            $model = D("Sysmenu");

            $id = $data['id'];
            if ($data['isDelete'] == 'on'){
                $data['isDelete'] = 1;
            }else{
                $data['isDelete'] = 0;
            }
            if (empty($id)){
                $model->data($data)->add();
                $this->success('新增成功!', __APP__.'/Sysmenu/add');
            }else{
                $model->data($data)->save();
                $this->success('修改成功!', __APP__.'/Sysmenu/index');
            }
        }else{
            $this->error('参数传递错误!', __APP__.'/Sysmenu/index');
        }
    }

    //删除
    public function delete(){
        $result = false;
        $msg = '删除失败！';
        if (IS_POST){
            $ID = isset($_POST['id']) ? $_POST['id']:"";
            if (!empty($ID)){
                $model = D("Sysmenu");
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