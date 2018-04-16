<?php
namespace Home\Controller;
use Think\Controller;
class EffectController extends CommonController {

    public function index(){
        $condition = "1=1";
        $page = 1;
        $start = 0;
        $size = 20;
        if ($_GET){
            if (isset($_GET['styleId'])){
                $styleId = $_GET['styleId'];
                $this->assign('styleId',$styleId);
                $condition = $condition." and styleId=".$styleId;
            }
            if (isset($_GET['typeId'])){
                $typeId = $_GET['typeId'];
                $this->assign('typeId',$typeId);
                $condition = $condition." and typeId=".$typeId;
            }
            if (isset($_GET['spaceId'])){
                $spaceId = $_GET['spaceId'];
                $this->assign('spaceId',$spaceId);
                $condition = $condition." and spaceId=".$spaceId;
            }
            if(isset($_GET['page'])){
                $page = $_GET['page'];
                if($page < 1){
                    $page = 1;
                }
            }
        }
        if($page > 1){
            $start = ($page-1) * $size -1;
        }
        //风格
        $styles = M('Efstyle')->select();
        $this->assign('styles',$styles);

        //类型
        $types = M('Eftype')->select();
        $this->assign('types',$types);

        //空间
        $spaces = M('Efspace')->select();
        $this->assign('spaces',$spaces);

        $list = M('Effect')->where($condition)->limit($start,$size)->select();
        $li = array();
        foreach ($list as $item){
            $images = M('Effectimgs')->where('parentId='.$item['id'])->select();
            $item['imgs'] = $images;
            if(count($images) > 0){
                $item['url'] = $images[0]['url'];
            }
            array_push($li,$item);
        }
        $this->assign('effects',$li);


        $count = M('Effect')->where($condition)->count();
        $this->assign('page',$page);
        $this->assign('total',$count);
        $totalPage =  intval($count / $size) ;
        if($count % $size != 0){
            $totalPage += 1;
        }
        $totalPage += 10;
        $this->assign('totalPage',$totalPage);

        $ps = 1;
        $pe = 5;
        if($page == 1){//1、向后5个
            $ps = 1;
            $pe = 6;
        }else if($page == $totalPage){
            $pe = $totalPage+1;
            if($totalPage > 6){
                $ps = $pe - 5;
            }else{
                $ps = 1;
            }
        }else{
            if($page - 2 <= 0){
                $ps = 1;
                if($totalPage > 5){
                    $pe = $page+4;
                }else{
                    $pe = $totalPage+1;
                }
            }else{

                if($page+2 > $totalPage){
                    $pe = $totalPage+1;
                    if($page - 5 > 0){
                        $ps = $pe - 5;
                    }else{
                        $ps = 1;
                    }
                }else{
                    $pe = $page + 3;
                    if($page - 2 > 0){
                        $ps = $page - 2;
                    }else{
                        $ps = 1;
                    }
                }
            }
        }

        $this->assign('ps',$ps);
        $this->assign('pe',$pe);





        $this->display();
    }

    public function detail(){
        if ($_GET) {
            if (isset($_GET['id'])) {
                $m = M('Effect')->where('id='.$_GET['id'])->find();
                $images = M('Effectimgs')->where('parentId=' . $_GET['id'])->select();
                $this->assign('images', $images);
                $this->assign('model', $m);
            }
        }
        $this->display();
    }
}