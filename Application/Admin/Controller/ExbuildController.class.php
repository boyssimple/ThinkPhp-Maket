<?php
namespace Admin\Controller;
use Think\Controller;
class ExbuildController extends CommonController {
    
    //列表页面
    public function index(){
        $this->display();
    }

    //新增页面
    public function add(){
        if (isset($_GET['id'])){
            $model = M('Exbuild');
            $result = $model->where('id='.$_GET['id'])->find();
            $this->assign('model',$result);


            $m = M('Exbuildimgs');
            $list = $m->where('parentId='.$_GET['id'])->select();
            $this->assign('imgs',$list);
        }else{
            $this->assign('model',null);
        }
        //装修风格
        $type = M('Exbuildstyle');
        $list = $type->select();
        $this->assign('buildstyle',$list);

        //户型
        $type = M('Exhoursetype');
        $list = $type->select();
        $this->assign('hoursetype',$list);

        //面积范围
        $type = M('Exarea');
        $list = $type->select();
        $this->assign('area',$list);

        //套系
        $type = M('Exproseries');
        $list = $type->select();
        $this->assign('series',$list);

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

            $model = M('Exbuild');
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
            $model = D("Exbuild");
            $id = $data['id'];
            $flag = false;
            $data['publishTime'] = $date;
            if (empty($id)){
                $id = $model->data($data)->add();
                $flag = true;
            }else{
                $model->data($data)->save();
            }
            // 上传文件
            if ($_FILES['url']['name'][0] != ""){
                $upload = new \Think\Upload();// 实例化上传类
                $upload->maxSize   =     3145728 ;// 设置附件上传大小
                $upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
                $upload->rootPath  =     __UPLOAD__; // 设置附件上传根目录
                $upload->savePath  =     ''; // 设置附件上传（子）目录
                $upload->saveName = array('uniqid','');
                $info   =   $upload->upload($_FILES);
                if(!$info) {// 上传错误提示错误信息
                    $this->error($upload->getError(), __APP__.'/Exbuild/add?id='.$id);
                }else{// 上传成功
                    $order = 1;
                    foreach($info as $file){
                        $path = $file['savepath'].$file['savename'];
                        $m = D("Exbuildimgs");
                        $d['url'] = $path;
                        $d['parentId'] = $id;
                        $d['orderNo'] = $order++;
                        $m->data($d)->add();
                    }

                }
            }

            if ($flag){
                $this->success('新增成功!', __APP__.'/Exbuild/add');
            }else{
                $this->success('修改成功!', __APP__.'/Exbuild/index');
            }

        }else{
            $this->error('参数传递错误!', __APP__.'/Exbuild/add');
        }
    }

    //删除
    public function delete(){
        $result = false;
        $msg = '删除失败！';
        if (IS_POST){
            $ID = isset($_POST['id']) ? $_POST['id']:"";
            if (!empty($ID)){
                $model = D("Exbuild");
                $r = $model->where('id='.$ID)->delete();
                if ($r > 0){
                    $result = true;
                    $msg= '删除成功！';
                    D("Exbuildimgs")->where('parentId='.$ID)->delete();
                }
            }
        }
        $data['success'] = $result;
        $data['msg'] = $msg;
        echo json_encode($data);
    }
}