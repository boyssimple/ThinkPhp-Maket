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

    <title> 装修案例详情</title>
    <link rel="stylesheet" href="/Design/Public/Home//css/exampledetail.css" />
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
    .bdshare-button-style0-32 a{width: 26px; height: 26px; background-image: url('http://www.shj.cn/statics/2017/images/icon.png'); }
    .bdshare-button-style0-32 .bds_tsina{background-position: -4px -615px;}
    .bdshare-button-style0-32 .bds_qzone{background-position: -37px -615px;}
    .bdshare-button-style0-32 .bds_weixin{background-position: -70px -615px;}
</style>
<!--页面标识-->
<input type="hidden" id="page_flag" value="sanli">
<div class="shj_srj_box shj_sal_box">
    <div class="shj_srj">

        <div class="shj_srj_left_block">
            <h1 class="shj_sjfgz_title"><?php echo ($example["name"]); ?></h1>
            <div class="shj_sjfgz_info_box">
                <div class="shj_sifgz_info">发布时间：<span><?php echo ($example["publishTime"]); ?></span>查看人数<?php echo ($example["browse"]); ?>&nbsp分享到：</div>
                <div class="bdsharebuttonbox shj_sjfgz_share">
                    <a href="#" class="bds_tsina" data-cmd="tsina" title="分享到新浪微博"></a>
                    <a href="#" class="bds_qzone" data-cmd="qzone" title="分享到QQ空间"></a>
                    <a href="#" class="bds_weixin" data-cmd="weixin" title="分享到微信"></a></div>
            </div>
            <div class="clear"></div>
            <div class="shj_sjfgz_anli_info">
                <table cellpadding="0" cellspacing="0" width="100%">
                    <tr>
                        <td align="center" width="13%">案例风格</td>
                        <td align="center" width="20%"><?php echo ($example["styleName"]); ?></td>
                        <td align="center" width="13%">案例户型</td>
                        <td align="center" width="15%"><?php echo ($example["hourseType"]); ?></td>
                        <td align="center" width="13%">案例面积</td>
                        <td align="center" width="11%"><?php echo ($example["areaName"]); ?>㎡</td>
                    </tr>
                    <tr>
                        <td align="center" width="13%">楼盘名称</td>
                        <td align="center" width="20%"><?php echo ($example["floorName"]); ?></td>
                        <td align="center" width="13%">所在城市</td>
                        <td align="center" width="15%"><?php echo ($example["location"]); ?></td>
                        <td align="center" width="13%">案例造价</td>
                        <td align="center" width="11%"><?php echo ($example["coast"]); ?>万</td>
                    </tr>
                    <tr>
                        <td align="center" width="13%">服务店面</td>
                        <td align="center" width="20%">重庆生活家设计中心</td>
                        <td align="center" width="13%">改造设计师</td>
                        <td align="center" width="15%"> 邱胜敏</td>
                        <td align="center" width="13%">施工队长</td>
                        <td align="center" width="11%"></td>
                    </tr>
                </table>
            </div>
            <p class="shj_sal_p"></p>
            <div class="shj_sal_bogimg_box">
                <ul class="shj_sal_bogimg">
                    <?php if(is_array($exampleImgs)): foreach($exampleImgs as $i=>$vo): ?><li><span><img src="http://localhost:8888/Design/Uploads/<?php echo ($vo["url"]); ?>" alt="<?php echo ($i+1); ?>"></span></li><?php endforeach; endif; ?>
                </ul>
                <div class="shj_sal_controller_btn shj_sal_bogimg_prev" data-v="prev"></div>
                <div class="shj_sal_controller_btn shj_sal_bogimg_next" data-v="next"></div>
            </div>
            <div class="shj_sal_smallimg_box">
                <div class="shj_sal_controller_btn shj_sal_img_controller_prev" title="上一张" data-v="prev"></div>
                <div class="shj_sal_smallimg_ul_box">
                    <ul class="shj_sal_smallimg_ul" data-v="0">
                        <?php if(is_array($exampleImgs)): foreach($exampleImgs as $i=>$vo): ?><li data-v="<?php echo ($i+1); ?>"><div class="shj_sal_smallimg_bg"></div><img src="http://localhost:8888/Design/Uploads/<?php echo ($vo["url"]); ?>" alt="<?php echo ($i+1); ?>" class="shj_sal_smallimg"></li><?php endforeach; endif; ?>
                    </ul>
                </div>
                <div class="shj_sal_controller_btn shj_sal_img_controller_next" title="下一张" data-v="next"></div>
            </div>
            <div class="shj_stuan_item shj_stuan_item_height shj_sal_item_height">
                <div class="shj_stuan_item_title">
                    <i class="shj_stuan_icon shj_stuan_icon2"></i>
                    <span>推荐案例</span>
                    <a href="\anli/" class="shj_sal_seemore">查看更多</a>
                </div>
                <ul>
                    <a href="http://cq.shj.cn/anli/3953.html">
                        <li>
                            <img src="http://www.shj.cn/uploadfile/2015/12/20150412040935265.jpg" alt="贝蒙心湖湾" class="shj_stuan_anli_img">
                            <div class="shj_stuan_item_info">尊享家案例系列</div>
                        </li>
                    </a>
                    <a href="http://cq.shj.cn/anli/10739.html">
                        <li>
                            <img src="http://www.shj.cn/uploadfile/2016/21/20161021103243591.jpg" alt="雅居乐" class="shj_stuan_anli_img">
                            <div class="shj_stuan_item_info">尊享家案例系列</div>
                        </li>
                    </a>
                    <a href="http://cq.shj.cn/anli/11515.html">
                        <li>
                            <img src="http://www.shj.cn/uploadfile/2017/11/20170511044508256.jpg" alt="奥园城市天地" class="shj_stuan_anli_img">
                            <div class="shj_stuan_item_info">悦享家案例系列</div>
                        </li>
                    </a>
                </ul>
            </div>
            <div class="shj_sjfgz_comparison_btn_box shj_sal_comparison_btn_box" style="position: initial;">
                <a href="http://www.shj.cn/anli/14377.html">上一个案例</a>
                <a href="javascript:alert('最后一页');" class="shj_sjfgz_comparison_next_btn">下一个案例</a>
            </div>
        </div>
        <div class="shj_srj_right_block">
            <div class="shj_sal_left_sjsbox">
                <div class="shj_sal_left_txlogo" style="background: url('http://www.shj.cn/statics/2017/images/轻奢装.png');"></div>
                <h4>本案例设计师</h4>
                <img src="http://www.shj.cn/uploadfile/2018/19/20180119092158741.jpg" alt="主创设计师： 邱胜敏" class="shj_sal_left_sjsimg">
                <h5 class="shj_sal_left_h5bold">姓名：<span> 邱胜敏</span></h5>
                <h5>级别：<span>主创设计师</span></h5>
                <h5>擅长风格：<span>现代中式,新古典,欧式，后现代，法式，美式</span></h5>
                <div class="shj_sal_left_sjsbox_btnbox">
                    <a href="\anli/" class="shj_sal_left_sjsbox_mbtn">&nbsp更多案例&nbsp</a>
                    <a href="http://www.shj.cn/yuyue/1083" class="shj_sal_left_sjsbox_ybtn">预约设计师</a>
                </div>

            </div>

            <div class="shj_srj_recommend shj_ssjs_recommend">
                <h4>旧房改造推荐<a href="http://www.shj.cn/jfgz/">查看更多</a></h4>
                <ul>

                </ul>
            </div>

            <div class="shj_srj_recommend">
                <h4>热门小区推荐<a href="http://cq.shj.cn/tuanzhuang/">查看更多</a></h4>
                <ul>

                    <li>
                        <img src="http://www.shj.cn/uploadfile/2015/18/20151018095228799.jpg" alt="" />
                        <div class="shj_srj_recommend_title">
                            <h6><span>· </span>龙湖源著</h6>
                            <a href="http://cq.shj.cn/tuanzhuang/1012.html" class="shj_srj_recommend_link">查看详情</a>
                        </div>
                    </li>

                    <li>
                        <img src="http://www.shj.cn/uploadfile/2015/18/20151018094410279.png" alt="" />
                        <div class="shj_srj_recommend_title">
                            <h6><span>· </span>融景城</h6>
                            <a href="http://cq.shj.cn/tuanzhuang/1010.html" class="shj_srj_recommend_link">查看详情</a>
                        </div>
                    </li>

                    <li>
                        <img src="http://www.shj.cn/uploadfile/2017/17/20170217030329313.png" alt="" />
                        <div class="shj_srj_recommend_title">
                            <h6><span>· </span>龙湖两江新宸</h6>
                            <a href="http://cq.shj.cn/tuanzhuang/543.html" class="shj_srj_recommend_link">查看详情</a>
                        </div>
                    </li>

                    <li>
                        <img src="http://www.shj.cn/uploadfile/2015/31/20150131100443884.jpg" alt="" />
                        <div class="shj_srj_recommend_title">
                            <h6><span>· </span>北麓国际城</h6>
                            <a href="http://cq.shj.cn/tuanzhuang/387.html" class="shj_srj_recommend_link">查看详情</a>
                        </div>
                    </li>

                </ul>
            </div>
        </div>
        <div class="clear"></div>
    </div>
</div>
<script language="JavaScript" src="http://www.shj.cn//api.php?op=count&id=14384&modelid=3"></script>
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