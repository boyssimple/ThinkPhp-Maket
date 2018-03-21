<?php
namespace Admin\Controller;
use Think\Controller;
class ProductdescController extends CommonController {
    
    //列表页面
    public function index(){
        $this->display();
    }

    public function gallery(){
        if (isset($_GET['id'])){
            $model = M('Productdesc');
            $pro = M('Product');
            $list = $model->where('productId='.$_GET['id'])->select();
            $this->assign("imgs",$list);

            $product = $pro->where('id='.$_GET['id'])->find();
            $this->assign("product",$product);
        }
        $this->display();
    }

    //新增页面
    public function edit(){
        if (isset($_GET['id'])){
            $model = M('Productdesc');
            $result = $model->where('id='.$_GET['id'])->find();
            if ($result){
                $proModel = M('Product');
                $pro = $proModel->where('id='.$result['productId'])->find();
                $this->assign('product',$pro);
            }
            $this->assign('model',$result);
        }else{
            $this->assign('model',null);
        }
        $this->display();
    }


    //新增页面
    public function add(){
        if (isset($_GET['id'])){
            $model = M('Productdesc');
            $result = $model->where('id='.$_GET['id'])->find();
            $this->assign('model',$result);
        }else{
            $this->assign('model',null);
        }
        $this->display();
    }

    public function upload(){
        if (isset($_GET['id'])){
            $this->assign('productId',$_GET['id']);
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

            $model = M('Productdesc');
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

    public function uploadImgs(){
        if (IS_POST){
            $date = date("Y-m-d H:i:s");
            $data = I('post.');
            $model = D("Productdesc");

            // 上传文件
            $upload = new \Think\Upload();// 实例化上传类
            $upload->maxSize   =     3145728 ;// 设置附件上传大小
            $upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
            $upload->rootPath  =     __UPLOAD__; // 设置附件上传根目录
            $upload->savePath  =     ''; // 设置附件上传（子）目录
            $upload->saveName = array('uniqid','');
            $info   =   $upload->upload($_FILES);
            if(!$info) {// 上传错误提示错误信息
                $this->error($upload->getError(), __APP__.'/Productdesc/upload');
            }else{// 上传成功
                $path =  $info['savepath'].$info['savename'];
                foreach($info as $file){
                    $path =  $file['savepath'].$file['savename'];
                    $data['url'] = $path;
                    $data['orderNo'] = $model->where('productId='.$data['productId'])->count()+1;
                    $model->data($data)->add();

                }
                echo "上传成功";

            }
        }else{
            echo "上传成功";
        }
    }

    //新增修改
    public function save()
    {
        if (IS_POST) {
            $data = I('post.');
            $model = D("Productdesc");
            $id = $data['id'];


            // 上传文件
            if ($_FILES['file']['name'] != "") {
                $upload = new \Think\Upload();// 实例化上传类
                $upload->maxSize = 3145728;// 设置附件上传大小
                $upload->exts = array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
                $upload->rootPath = __UPLOAD__; // 设置附件上传根目录
                $upload->savePath = ''; // 设置附件上传（子）目录
                $upload->saveName = array('uniqid', '');
                $info = $upload->uploadOne($_FILES['file']);
                if (!$info) {// 上传错误提示错误信息
                    $this->error($upload->getError(), __APP__ . '/Productdesc/edit?id=' . $id);
                } else {// 上传成功
                    $path = $info['savepath'] . $info['savename'];
                    //把之前的文件删除
                    if ($data['url'] != "") {
                        unlink(__UPLOAD__ . $data['url']);
                    }
                }
                if ($path) {
                    $data['url'] = $path;
                }
            }
            if (!empty($id)) {
                $model->data($data)->save();
                $this->success('修改成功!', __APP__ . '/Productdesc/edit?id=' . $id);
            }
        } else {
            $this->error('参数传递错误!', __APP__ . '/Product/index');
        }
    }

    public function del(){
        $result = false;
        $msg = '删除失败！';
        if (IS_GET){
            $ID = isset($_GET['id']) ? $_GET['id']:"";
            if (!empty($ID)){
                $model = D("Productimg");
                $r = $model->where('id='.$ID)->delete();
                if ($r > 0){
                    $this->success('删除成功!', __APP__.'/Productdesc/gallery?id='.$_GET['parentId']);
                }else{
                    $this->success('删除失败!', __APP__.'/Productdesc/gallery?id='.$_GET['parentId']);
                }
            }else{
                $this->error('参数传递错误!', __APP__.'/Productdesc/gallery?id='.$_GET['parentId']);
            }
        }else{
            $this->error('参数传递错误!', __APP__.'/Productdesc/gallery?id='.$_GET['parentId']);
        }
    }

    //删除
    public function delete(){
        $result = false;
        $msg = '删除失败！';
        if (IS_POST){
            $ID = isset($_POST['id']) ? $_POST['id']:"";
            if (!empty($ID)){
                $model = D("Productdesc");
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