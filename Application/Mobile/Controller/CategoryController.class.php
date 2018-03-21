<?php
namespace Mobile\Controller;
use Org\Util\Date;
use Think\Controller;


class CategoryController extends Controller {


   public function getProductList(){
       $state = 400;
       $msg = '获取失败';
       $list = array();
       if (isset($_GET['id'])){
           $model = M('Product');
           $li = $model->where('categoryId='.$_GET['id'])->select();
           if($li){
               $list = $li;
           }
           $state = 200;
           $msg = '获取成功';
       }

       $result['state'] = $state;
       $result['msg'] = $msg;
       $result['data'] = $list;
       echo json_encode($result);
   }


}