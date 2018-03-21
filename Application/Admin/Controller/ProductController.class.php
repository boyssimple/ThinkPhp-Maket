<?php
namespace Admin\Controller;
use Think\Controller;
class ProductController extends CommonController {
    
    //列表页面
    public function index(){
        $this->display();
    }

    //图片列表
    public function gallery(){
        if (isset($_GET['id'])){
            $model = M('Productimg');
            $pro = M('Product');
            $list = $model->where('productId='.$_GET['id'])->select();
            $this->assign("imgs",$list);

            $product = $pro->where('id='.$_GET['id'])->find();
            $this->assign("product",$product);
        }

        $this->display();
    }

    public function upload(){
        if (isset($_GET['id'])){
            $this->assign('productId',$_GET['id']);
        }
        $this->display();
    }

    //新增页面
    public function add(){
        if (isset($_GET['id'])){
            $model = M('Product');
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

            $model = M('Product');
            //搜索过滤
            $search = $params['search']['value'];
            if (!empty($search)){
                $map['name'] = array('like','%'.$search.'%');
                $list = $model->where($map)->limit($start,$length)->order("orderNo asc")->select();
                $total = $model->where($map)->count();

                $total = $model->count();
            }else{
                $total = $model->count();
                $list = $model->limit($start,$length)->order("orderNo asc")->select();
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
            $data = I('post.');
            $model = D("Product");

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
                    $this->error($upload->getError(), __APP__.'/Product/add');
                }else{// 上传成功
                    $path =  $info['savepath'].$info['savename'];
                    //把之前的文件删除
                    if ($data['favicon'] != ""){
                        unlink(__UPLOAD__.$data['url']);
                    }
                }
                $data['url'] = $path;
            }

            $id = $data['id'];
            if (empty($id)){
                $date = date("Y-m-d H:i:s");
                $data['addDate'] = $date;
                $model->data($data)->add();
                $this->success('新增成功!', __APP__.'/Product/add');
            }else{
                $model->data($data)->save();
                $this->success('修改成功!', __APP__.'/Product/index');
            }
        }else{
            $this->error('参数传递错误!', __APP__.'/Product/add');
        }
    }

    //删除
    public function delete(){
        $result = false;
        $msg = '删除失败！';
        if (IS_POST){
            $ID = isset($_POST['id']) ? $_POST['id']:"";
            if (!empty($ID)){
                $model = D("Product");
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