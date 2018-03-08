<?php
namespace Admin\Controller;
use Think\Controller;

class ApplicationController extends Controller {

    public function _initialize(){
        //加载树
        $model = M('Sysmenu');
        $list = $model->where('parentId=0')->select();
        $data = Array();
        foreach ($list as $item){
            $item['children'] = $this->loadSub($item['id']);
            array_push($data,$item);
        }

        $this->assign('menus',$data);
    }

    private function loadSub($parentId){
        $model = M('Sysmenu');
        $list = $model->where('parentId='.$parentId)->select();
        return $list;
    }
}