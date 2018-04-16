<?php
namespace Home\Controller;
use Think\Controller;
class ExampleController extends CommonController {

    public function index(){
        //套系
        $series = M('Exproseries')->select();
        $this->assign('series',$series);

        //面积范围
        $areas = M('Exarea')->select();
        $this->assign('areas',$areas);


        //户型
        $hoursetypes = M('Exhoursetype')->select();
        $this->assign('hoursettype',$hoursetypes);


        //风格
        $style = M('Exbuildstyle')->select();
        $this->assign('styles',$style);


        $list = M('Exbuild')->select();
        $this->assign('examples',$list);
        $this->display();
    }

    public function detail(){
        if (isset($_GET['id'])){
            $id = $_GET['id'];
            $model = M('Exbuild')->where('id='.$id)->find();
            //图片详情
            $list = M('Exbuildimgs')->where('parentId='.$id)->select();
            $this->assign('exampleImgs',$list);

            //套系
            $series = M('Exproseries')->where('id='.$model['seriesId'])->find();
            $model['seriesName'] = $series['name'];

            //面积范围
            $series = M('Exarea')->where('id='.$model['areaId'])->find();
            $model['areaName'] = $series['name'];

            //户型
            $series = M('Exhoursetype')->where('id='.$model['hoursetypeId'])->find();
            $model['hourseType'] = $series['name'];

            //风格
            $series = M('Exbuildstyle')->where('id='.$model['buildstyleId'])->find();
            $model['styleName'] = $series['name'];


            $this->assign('example',$model);
            $this->display();
        }else{

            $this->error('参数传递错误!', __APP__);
        }
    }

    public function vrshow(){
        $this->display();
    }
}