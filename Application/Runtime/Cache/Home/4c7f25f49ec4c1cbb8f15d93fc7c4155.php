<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html lang="en-US">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="renderer" content="webkit" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
<meta name="keywords" content=" <?php echo ($system["keywords"]); ?>">
<meta name="description" content=" <?php echo ($system["remark"]); ?>">
<meta name="baidu-site-verification" content="MkUKHRpWI4" />
<link rel="Shortcut Icon" href="/favicon.ico" />
<link rel="stylesheet" href="/Design/Public/Vendor/swiper-3.2.5/swiper-3.2.5.min.css" />
<link rel="stylesheet" href="/Design/Public/Home//css/default.css" />
<link rel="stylesheet" href="/Design/Public/Home//css/header.css" />
<link rel="stylesheet" href="/Design/Public/Home//css/footer.css" />
<script type="text/javascript" src="/Design/Public/Vendor/jquery/jquery.min.js"></script>
<script type="text/javascript">
    var ENV = '/Design/index.php';
</script>
    <title> 装修效果图</title>
    <link rel="stylesheet" href="/Design/Public/Home//css/effect.css" />
</head>
<body>
<!--文件路径-->
<input type="hidden" value="http://www.shj.cn/statics/2017/" id="file_path">
<!--顶部开始-->
<div class="top_box">
    <div class="top_menu">
        <div class="top_nav_box">
            <ul class="top_nav">
                <li><a href="http://m.shj.cn/special/life/mobile/" target="_blank">生活家杂志</a></li>
                <li><a href="http://www.shj.cn/zhishi/">家装知识</a></li>
                <li><a href="http://cq.shj.cn/zjgd/" class=>在建工地</a></li>
                <li><a href="javascript:;">咨询热线：4008-323-100</a></li>
            </ul>
        </div>
    </div>
</div>
<div class="title_box">
    <div class="title">
        <div class="logo"><a href="/Design/index.php"><img src="http://www.shj.cn/statics/2017/images/shjlogo.jpg" alt="" /></a></div>
        <div class="navList">
            <div class="nav_box">
                <div class="nav">
                    <ul>
                        <?php if(is_array($nav)): foreach($nav as $key=>$vo): ?><li><a target="<?php echo ($vo["openMethod"]); ?>" href="/Design/index.php<?php echo ($vo["url"]); ?>"><?php echo ($vo["name"]); ?></a></li><?php endforeach; endif; ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="navLine"></div>
<!--<div class="nav_box">
    <div class="nav">
        <ul>
            <li><a href="/Design/index.php">首页</a></li>
            <li><a href="/Design/index.php/Example/index">装修案例</a></li>
            <li><a href="/Design/index.php/Effect/index">装修效果图</a></li>
            <li>
                <a href="/Design/index.php/Knowledge/index">家装知识</a>
                <div class="nav_jzzs_box" style="width: 102px;">
                    <ul>
                        <li><a href="http://www.shj.cn/zxrj/">装修日记</a></li>
                        <li><a href="http://www.shj.cn/sheji/">设计知识</a></li>
                        <li><a href="http://www.shj.cn/fengshui/">家装禁忌</a></li>
                        <li><a href="http://www.shj.cn/xuancai/">装修选材</a></li>
                        <li><a href="http://www.shj.cn/gonglue/">家装攻略</a></li>
                    </ul>
                </div>
            </li>
            <li><a href="/Design/index.php/About/index">关于我们</a></li>
        </ul>
    </div>
</div>-->
<!--页面标识-->
<input type="hidden" id="page_flag" value="lxgt">
<style>.layui-layer-content{overflow: hidden !important;}</style>
<div class="shj_lxgt_box">
    <div class="shj_lxgt_top_bg"></div>
    <div class="shj_lxgt">
        <div class="shj_crumbs">
            当前位置：
            <span><a href=""  class="seturl"  data-url=''>首页</a></span>
            <span class="shj_crumbs_icon">></span>
            <span class="shj_crumbs_now"><a href=""></a></span>
        </div>
        <input type="hidden" id="page" value="<?php echo ($page); ?>">
        <div class="shj_lxgt_title">
            <div class="shj_lxgt_select_box">
                <h4>装修风格 <span>/ STYLE</span></h4>
                <ul>
                    <?php if(is_array($styles)): foreach($styles as $key=>$vo): if($vo["id"] == $styleId): ?><li class="select_blur select_focus" data-id="<?php echo ($vo["id"]); ?>"><?php echo ($vo["name"]); ?></li>
                        <?php else: ?>
                            <li class="select_blur" data-id="<?php echo ($vo["id"]); ?>"><?php echo ($vo["name"]); ?></li><?php endif; endforeach; endif; ?>
                    <input type="hidden" id="style" value="<?php echo ($styleId); ?>">
                </ul>
                <div class="clear"></div>
                <h4>装修户型 <span>/ TYPE</span></h4>
                <ul>
                    <?php if(is_array($types)): foreach($types as $key=>$vo): if($vo["id"] == $typeId): ?><li class="select_blur select_focus" data-id="<?php echo ($vo["id"]); ?>"><?php echo ($vo["name"]); ?></li>
                            <?php else: ?>
                            <li class="select_blur" data-id="<?php echo ($vo["id"]); ?>"><?php echo ($vo["name"]); ?></li><?php endif; endforeach; endif; ?>
                    <input type="hidden" id="type" value="<?php echo ($typeId); ?>">
                </ul>
                <div class="clear"></div>
                <h4>空间 <span>/ SPACE</span></h4>
                <ul>
                    <?php if(is_array($spaces)): foreach($spaces as $key=>$vo): if($vo["id"] == $spaceId): ?><li class="select_blur select_focus" data-id="<?php echo ($vo["id"]); ?>"><?php echo ($vo["name"]); ?></li>
                            <?php else: ?>
                            <li class="select_blur" data-id="<?php echo ($vo["id"]); ?>"><?php echo ($vo["name"]); ?></li><?php endif; endforeach; endif; ?>
                    <input type="hidden" id="space" value="<?php echo ($spaceId); ?>">
                </ul>
                <input type="hidden" value="0" id="p">
            </div>
            <div class="shj_index_xgt_swiper_box shj_lxgt_swiper_box">
                <div class="swiper-container" >
                    <div class="swiper-wrapper">

                        <div class="swiper-slide">
                            <a href="http://www.shj.cn/styletest/" target="_blank"><img src="http://www.shj.cn/uploadfile/2017/27/20170727022239946.jpg" alt="" width="910" height="425" /></a>
                        </div>

                        <div class="swiper-slide">
                            <a href="http://www.shj.cn/zt/dzmj.html" target="_blank"><img src="http://www.shj.cn/uploadfile/2017/16/20171216045540612.jpg" alt="" width="910" height="425" /></a>
                        </div>

                        <div class="swiper-slide">
                            <a href="http://www.shj.cn/zt/sfsj.html" target="_blank"><img src="http://www.shj.cn/uploadfile/2018/06/20180206032424496.jpg" alt="" width="910" height="425" /></a>
                        </div>

                        <div class="swiper-slide">
                            <a href="http://xiaoguotu.shj.cn/30.html" target="_blank"><img src="http://www.shj.cn/uploadfile/2017/16/20170116013307105.jpg" alt="" width="910" height="425" /></a>
                        </div>

                        <div class="swiper-slide">
                            <a href="http://xiaoguotu.shj.cn/330.html" target="_blank"><img src="http://www.shj.cn/uploadfile/2017/20/20170720013211435.jpg" alt="" width="910" height="425" /></a>
                        </div>

                        <div class="swiper-slide">
                            <a href="http://xiaoguotu.shj.cn/22.html" target="_blank"><img src="http://www.shj.cn/uploadfile/2017/16/20170116015535522.jpg" alt="" width="910" height="425" /></a>
                        </div>
                    </div>
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </div>
        <div class="shj_lxgt_lists_wrap">
            <ul class ="shj_lxgt_lists">
                <?php if(is_array($effects)): foreach($effects as $key=>$vo): ?><li class="shj_lxgt_item">
                        <a href="/Design/index.php/Effect/detail?id=<?php echo ($vo["id"]); ?>" title="济南生活家装饰保利中心华府欧式风格">
                            <img src="http://localhost:8888/Design/Uploads/<?php echo ($vo["url"]); ?>" alt="济南生活家装饰保利中心华府欧式风格">
                            <div class="shj_lxgt_info">
                                <?php echo ($vo["name"]); ?>									<span><?php echo (count($vo["imgs"])); ?>张</span>
                            </div>
                        </a>
                    </li><?php endforeach; endif; ?>
            </ul>
            <div class="shj_lxgt_none" style="display: none;"><h3>没事找到相关效果图</h3></div>
        </div>
        <input type="hidden" id="thisPutData">
    </div>
    <div class="clear"></div>

    <div class="paganation">
        <?php if($page > 1): ?><a href="javascript:;" class="prev">&lt;</a><?php endif; ?>
        <?php if($ps > 2): ?><span>...</span><?php endif; ?>
        <?php $__FOR_START_1304219829__=$ps;$__FOR_END_1304219829__=$pe;for($i=$__FOR_START_1304219829__;$i < $__FOR_END_1304219829__;$i+=1){ if($i == $page): ?><span class="active"><?php echo ($i); ?></span>
            <?php else: ?>
            <a href="javascript:;" onclick="pageChage(<?php echo ($i); ?>)" data-page="1"><?php echo ($i); ?></a><?php endif; } ?>

        <?php if($pe < ($totalPage+1)): ?><span>...</span><?php endif; ?>

        <?php if($totalPage > 1): ?><a href="javascript:;" class="next">&gt;</a><?php endif; ?>

        <!--

        <a href="javascript:;" class="prev">&lt;</a>
        <a href="javascript:;" data-page="1">1</a>
        <a href="javascript:;" data-page="2">2</a>
        <a href="javascript:;" data-page="3">3</a>
        <span class="active">4</span><a href="javascript:;" data-page="5">5</a>
        <a href="javascript:;" data-page="6">6</a>
        <a href="javascript:;" data-page="7">7</a>
        <a href="javascript:;" data-page="8">8</a><span>...</span>
        <a href="javascript:;" data-page="20">20</a>
        <a href="javascript:;" class="next">&gt;</a>

        -->
    </div>
</div>
<!--底部开始-->
<div class="footer_box">
    <div class="footer">
        <div class="footer_top_box">
            <div class="footer_nav">
                <ul>
                    <li><a href="http://www.shj.cn/about/">了解生活家</a></li>
                    <li><a href="http://www.shj.cn/about/">公司简介</a></li>
                    <li><a href="http://m.shj.cn/special/life/mobile/" target="_blank">生活家杂志</a></li>
                    <!--<li><a href="">公司荣誉</a></li>
                    <li><a href="">发展历程</a></li>
                    <li><a href="">企业文化</a></li>
                    <li><a href="">联系我们</a></li>-->
                </ul>
                <ul>
                    <li><a href="http://www.shj.cn/zhishi/">家装知识</a></li>
                    <li><a href="http://www.shj.cn/sheji/">设计知识</a></li>
                    <li><a href="http://www.shj.cn/fengshui/">家装风水</a></li>
                    <li><a href="http://www.shj.cn/xuancai/">材料知识</a></li>
                    <li><a href="http://www.shj.cn/gonglue/">家装攻略</a></li>
                </ul>
                <ul>
                    <li><a href="http://cq.shj.cn/tuanzhuang/">热装小区</a></li>
                    <li><a href="http://cq.shj.cn/tuanzhuang/">热装小区</a></li>
                    <li><a href="http://cq.shj.cn/zjgd/">在建工地</a></li>
                    <li><a href="http://www.shj.cn/kehu/">客户见证</a></li>
                </ul>

                <ul style="width:200px;margin-left: 100px">
                    <li><a href="http://cq.shj.cn/tuanzhuang/">友情链接</a></li>
                    <li><a href="http://pengzhou.qizuang.com/" target="_blank">彭州装修网</a></li>
                    <li><a href="http://shenzhen.9zx.com/" target="_blank">深圳装修网</a></li>
                    <li><a href="http://jiashi.homekoo.com/taojian" target="_blank">四件套</a></li>
                    <li><a href="http://wuhai.jiwu.com/" target="_blank">乌海买房</a></li>
                    <li><a href="http://fenlei.iask.sina.com.cn/cq/" target="_blank">重庆爱问分类</a></li>
                </ul>
            </div>

            <div class="footer_qr">
                <img src="/Design/Public/Home/images/weixinQR.jpg">
                <p>扫描关注我们</p>
            </div>
        </div>

    </div>
    <div class="shj_index_footer_bottom">
        <div class="shj_index_footer_webinfo">
            <?php echo ($system["sysVision"]); ?>
        </div>
    </div>
</div>
<!--底部结束-->

<script type="text/javascript" src="/Design/Public/Vendor/swiper-3.2.5/swiper-3.2.5.min.js"></script>
<script type="text/javascript" src="/Design/Public/Vendor/layer/layer.js"></script>
<script type="text/javascript" src="/Design/Public/Home//js/jsq.js"></script>
<script type="text/javascript" src="/Design/Public/Home//js/bj.js"></script>
<!--<script type='text/javascript' src='http://chat.53kf.com/kf.php?arg=sdlcjt&style=22'></script>-->
<script>
    $(function(){
        new Swiper ('.swiper-container', {
            loop: true,
            nextButton: '.swiper-button-next',
            prevButton: '.swiper-button-prev',
            autoplay: 5000,
            pagination: '.swiper-pagination',
            paginationClickable: true
        });

        $('.select_blur').each(function(){
            $(this).click(function () {
                var that = $(this);
                that.siblings('li').each(function(){
                    $(this).removeClass('select_focus');
                });

                that.siblings('input').each(function(){
                    $(this).val(that.attr('data-id'));
                });
                that.addClass('select_focus');
                var url = "/Effect?req=1";
                var style = $("#style").val();
                var type = $("#type").val();
                var space = $("#space").val();
                if(style != undefined && style != ""){
                    url += "&styleId="+style;
                }
                if(type != undefined && type != ""){
                    url += "&typeId="+type;
                }
                if(space != undefined && space != ""){
                    url += "&spaceId="+space;
                }
                var page = $("#page").val();
                if(page != undefined && page != ""){
                    url += "&page="+page;
                }
                window.location = ENV+url;
            })
        });
    })

    function pageChage(page){
        var url = "/Effect?req=1";
        var style = $("#style").val();
        var type = $("#type").val();
        var space = $("#space").val();
        if(style != undefined && style != ""){
            url += "&styleId="+style;
        }
        if(type != undefined && type != ""){
            url += "&typeId="+type;
        }
        if(space != undefined && space != ""){
            url += "&spaceId="+space;
        }
        url += "&page="+page;

        window.location = ENV+url;
    }
</script>
</body>
</html>