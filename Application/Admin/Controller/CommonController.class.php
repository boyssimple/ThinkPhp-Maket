<?php
namespace Admin\Controller;
use Think\Controller;
class CommonController extends Controller {

    public function _initialize(){
        if (!isset($_SESSION['uid'])) {

            $this->error('请先登录', U('Login/index'), 1);

        }else{
            //加载树
            $model = M('Sysmenu');
            $list = $model->where('parentId=0')->select();
            $data = Array();
            foreach ($list as $item){
                $children = $this->loadSub($item['id']);;
                if (count($children) > 0){
                    $item['children'] = $children;
                }
                array_push($data,$item);
            }

            $this->assign('menus',$data);
        }
    }

    private function loadSub($parentId){
        $model = M('Sysmenu');
        $list = $model->where('parentId='.$parentId)->select();
        if (count($list) > 0){
            $data = Array();
            foreach ($list as $item){
                $children = $this->loadSub($item['id']);
                if (count($children) > 0){
                    $item['children'] = $children;
                }

                array_push($data,$item);
            }
            return $data;
        }else{
            return null;
        }

    }
}