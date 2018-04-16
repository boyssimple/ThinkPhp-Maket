<?php if (!defined('THINK_PATH')) exit();?>
<!DOCTYPE HTML>
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

	<title> 装修效果图</title>
	<link rel="stylesheet" href="/Design/Public/Home//css/about.css" />
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
<style>
    .ztbd{width: 1100px; position: relative; height: auto; margin: auto;}
</style>
<div style="background:url(http://www.shj.cn/statics/2017/about/bg.jpg) center top;" class="content-width center">
    <div class="ztbd"><img src='http://www.shj.cn/statics/2017/about/1_02.jpg' /></div>
    <div class="ztbd"><img src='http://www.shj.cn/statics/2017/about/1_04.jpg' /></div>
    <div class="ztbd"><img src="http://www.shj.cn/statics/2017/about/1_05.jpg" /></div>
    <div class="ztbd"><img src="http://www.shj.cn/statics/2017/about/1_06.jpg" /></div>
    <div class="ztbd"><img src="http://www.shj.cn/statics/2017/about/1_07.jpg" /></div>
    <div class="ztbd"><img src='http://www.shj.cn/statics/2017/about/1_08.jpg' /></div>
    <div class="ztbd"><img src='http://www.shj.cn/statics/2017/about/1_09.jpg' /></div>
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
<script type="text/javascript" src="/Design/Public/Home//js/index.js"></script>
<script type="text/javascript" src="/Design/Public/Vendor/layer/layer.js"></script>
<script type="text/javascript" src="/Design/Public/Home//js/jsq.js"></script>
<script type="text/javascript" src="/Design/Public/Home//js/bj.js"></script>
<!--<script type='text/javascript' src='http://chat.53kf.com/kf.php?arg=sdlcjt&style=22'></script>-->

</body>
</html>