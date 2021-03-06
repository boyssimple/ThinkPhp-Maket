<?php
namespace Admin\Controller;
use Think\Controller;
class EffectimgsController extends CommonController
{

    //列表页面
    public function index()
    {
        $this->display();
    }

    //新增页面
    public function add()
    {
        if (isset($_GET['id'])) {
            $model = M('Effectimgs');
            $result = $model->where('id=' . $_GET['id'])->find();
            $this->assign('model', $result);
        } else {
            $this->assign('model', null);
        }
        $this->display();
    }

    //加载列表
    public function loadList()
    {
        $list = null;
        $darw = 1;
        $total = 0;
        $start = 0;
        $length = 10;
        if (IS_GET) {
            $params = I('get.');

            $darw = $params['draw'];
            $start = $params['start'];
            $length = $params['length'];

            $model = M('Effectimgs');
            //搜索过滤
            $search = $params['search']['value'];
            if (!empty($search)) {
                //$map['groupName'] = array('like','%'.$search.'%');
                //$list = $model->where($map)->limit($start,$length)->select();
                //$total = $model->where($map)->count();

                $list = $model->limit($start, $length)->select();
                $total = $model->count();
            } else {
                $total = $model->count();
                $list = $model->limit($start, $length)->select();
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
    public function save()
    {
        if (IS_GET) {
            $date = date("Y-m-d H:i:s");
            $data = I('get.');
            $model = D("Effectimgs");
            $id = $data['id'];
            if (empty($id)) {
                $model->data($data)->add();
                $this->success('新增成功!', __APP__ . '/Effectimgs/add');
            } else {
                $model->data($data)->save();
                $this->success('修改成功!', __APP__ . '/Effectimgs/index');
            }
        } else {
            $this->error('参数传递错误!', __APP__ . '/Effectimgs/add');
        }
    }

    //删除
    public function delete()
    {
        $result = false;
        $msg = '删除失败！';
        if (IS_POST) {
            $ID = isset($_POST['id']) ? $_POST['id'] : "";
            if (!empty($ID)) {
                $model = D("Effectimgs");
                $r = $model->where('id=' . $ID)->delete();
                if ($r > 0) {
                    $result = true;
                    $msg = '删除成功！';
                }
            }
        }
        $data['success'] = $result;
        $data['msg'] = $msg;
        echo json_encode($data);
    }
}