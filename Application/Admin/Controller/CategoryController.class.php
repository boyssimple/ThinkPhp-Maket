<?php
namespace Admin\Controller;
use Think\Controller;
class CategoryController extends CommonController {
    
    //列表页面
    public function index(){
        $this->display();
    }

    //新增页面
    public function add(){
        if (isset($_GET['id'])){
            $model = M('Category');
            $result = $model->where('id='.$_GET['id'])->find();
            $this->assign('model',$result);
        }else{
            $this->assign('model',null);
        }
        $model = M('Category');
        $count = $model->count();
        $this->assign('count',$count+1);
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

            $model = M('Category');
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
        $model = M('Category');
        $list = $model->order('orderNo asc')->select();

        $data = Array();
        foreach ($list as $item){
            $mo = M('Product');
            $item['count'] = $mo->where('categoryId='.$item['id'])->count();
            array_push($data,$item);
        }
        echo json_encode($data);
    }

    //新增修改
    public function save(){
        if (IS_POST){
            $date = date("Y-m-d H:i:s");
            $data = I('post.');
            $model = D("Category");

            // 上传文件
            if ($_FILES['url_file']['name'] != ""){
                $upload = new \Think\Upload();// 实例化上传类
                $upload->maxSize   =     3145728 ;// 设置附件上传大小
                $upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
                $upload->rootPath  =     __UPLOAD__; // 设置附件上传根目录
                $upload->savePath  =     ''; // 设置附件上传（子）目录
                $upload->saveName = array('uniqid','');
                $info   =   $upload->uploadOne($_FILES['url_file']);
                if(!$info) {// 上传错误提示错误信息
                    $this->error($upload->getError(), __APP__.'/Category/add');
                    exit();
                }else{// 上传成功
                    $path =  $info['savepath'].$info['savename'];
                    //把之前的文件删除
                    if ($data['url'] != ""){
                        unlink(__UPLOAD__.$data['url']);
                    }
                }
                $data['url'] = $path;
            }

            $id = $data['id'];
            $model = D("Category");
            if (empty($id)){
                $model->data($data)->add();
                $this->success('新增成功!', __APP__.'/Category/add');
            }else{
                $model->data($data)->save();
                $this->success('修改成功!', __APP__.'/Category/index');
            }
        }else{
            $this->error('参数传递错误!', __APP__.'/Category/add');
        }
    }

    //删除
    public function delete(){
        $result = false;
        $msg = '删除失败！';
        if (IS_POST){
            $ID = isset($_POST['id']) ? $_POST['id']:"";
            if (!empty($ID)){
                $model = D("Category");
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