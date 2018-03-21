<?php
namespace Mobile\Controller;
use Org\Util\Date;
use Think\Controller;


class HomeController extends Controller {


   public function getIndexInfo(){

       $category = M('Category');
       $list = $category->where('isDelete <> 1')->select();

       $col = count($list)/5;
       if(count($list) % 5 != 0){
           $col += 1;
       }
       $count = count($list);
       $cates = array();
       for ($c = 0;$c < $col;$c++){
            $sub = Array();
            $co = 5;
            if($count % 5 != 0){
                if ($c == $col-1){
                    $co = $count % 5;
                }
            }
            for ($i= 0;$i < $co;$i++){
                array_push($sub,$list[$i+$co*$c]);
            }

           array_push($cates,$sub);
       }



       $data['category'] = $cates;
       $result['state'] = 200;
       $result['msg'] = '获取成功';
       $result['data'] = $data;
       echo json_encode($result);
   }


}