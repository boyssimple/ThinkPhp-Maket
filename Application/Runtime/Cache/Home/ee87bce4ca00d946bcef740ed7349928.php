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
    <title> 装修设计案例</title>
    <link rel="stylesheet" href="/Design/Public/Home//css/example.css" />
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

<input type="hidden" id="page" value="1">
<input type="hidden" id="liCount" value="0">
<input type="hidden" id="page_flag" value="lanli">
<input type="hidden" id="city" value="3775">
<div class="shj_lrj_box">
    <div class="shj_lrj">

        <div class="example_bg"></div>

        <div class="shj_lsjs_box">
            <div class="shj_lrj_select_menu">
                <ul id="fcptx">
                    <li class="shj_lrj_select_menu_first">产品套系</li>
                    <li class="shj_lrj_select_menu_blur shj_lrj_select_menu_focus">全部</li>

                    <?php if(is_array($series)): foreach($series as $key=>$vo): ?><li class="shj_lrj_select_menu_blur" data-v="<?php echo ($vo["id"]); ?>"><?php echo ($vo["name"]); ?></li><?php endforeach; endif; ?>
                    <input type="hidden" id="cptx" value="0"/>
                </ul>
                <ul id="fmjfw">
                    <li class="shj_lrj_select_menu_first">面积范围</li>
                    <li class="shj_lrj_select_menu_blur shj_lrj_select_menu_focus">全部</li>


                    <?php if(is_array($areas)): foreach($areas as $key=>$vo): ?><li class="shj_lrj_select_menu_blur" data-v="<?php echo ($vo["id"]); ?>"><?php echo ($vo["name"]); ?></li><?php endforeach; endif; ?>


                    <input type="hidden" id="mjfw" value="0"/>
                </ul>
                <ul id="ffwhx">
                    <li class="shj_lrj_select_menu_first">房屋户型</li>
                    <li class="shj_lrj_select_menu_blur shj_lrj_select_menu_focus">全部</li>

                    <?php if(is_array($hoursettype)): foreach($hoursettype as $key=>$vo): ?><li class="shj_lrj_select_menu_blur" data-v="<?php echo ($vo["id"]); ?>"><?php echo ($vo["name"]); ?></li><?php endforeach; endif; ?>


                    <input type="hidden" id="fwhx" value="0"/>
                </ul>
                <ul id="fzxfg">
                    <li class="shj_lrj_select_menu_first">装修风格</li>
                    <li class="shj_lrj_select_menu_blur shj_lrj_select_menu_focus">全部</li>


                    <?php if(is_array($styles)): foreach($styles as $key=>$vo): ?><li class="shj_lrj_select_menu_blur" data-v="<?php echo ($vo["id"]); ?>"><?php echo ($vo["name"]); ?></li><?php endforeach; endif; ?>


                    <input type="hidden" id="zxfg" value="0"/>
                </ul>
            </div>
            <div class="shj_lsjs_search_box">
                <div class="shj_lsjs_search_choose">
                    <span>当前筛选</span>
                    <h6 id="shj_lsjs_search_tx">套系&nbsp<span></span></h6>
                    <span>+</span>
                    <h6 id="shj_lsjs_search_hx">户型&nbsp<span></span></h6>
                    <span>+</span>
                    <h6 id="shj_lsjs_search_fg">风格&nbsp<span></span></h6>
                    <span>+</span>
                    <h6 id="shj_lsjs_search_mj">面积&nbsp<span></span></h6>
                    <span>共找到以下案例</span>
                </div>
                <div class="shj_lsjs_search_input_box">
                    <input type="text" class="shj_lsjs_search_input" placeholder="关键词">
                    <input type="button" class="shj_lsjs_search_btn" id="shj_lanli_searchBtn" value="找案例">
                </div>
            </div>
            <div class="shj_lsjs_lists">
                <ul class="shj_lal_list_ul">
                    <?php if(is_array($examples)): foreach($examples as $key=>$vo): ?><li>
                            <div class="shj_lal_item">
                                <div class="shj_lal_alimg">
                                    <div class="shj_lal_alimg_imgbox">
                                        <a href="/Design/index.php/Example/detail?id=<?php echo ($vo["id"]); ?>"><img src="http://www.shj.cn/uploadfile/2018/22/20180322100714331.jpg" alt="<?php echo ($vo["name"]); ?>" /></a>
                                    </div>
                                   <!-- <div class="shj_lal_sjsimg">
                                        <a href="#"><img src="http://www.shj.cn/uploadfile/2018/19/20180119092158741.jpg" title="主创设计师： 邱胜敏" ></a>
                                    </div>-->
                                </div>
                                <div class="shj_lal_info_box">
                                    <h4 class="shj_lal_info_title">
                                        <?php echo ($vo["name"]); ?>								</h4>
                                    <div class="shj_lal_info_btn_box">
                                        <h5>所属系列—<?php echo ($vo["seriesId"]); ?></h5>
                                        <a href="#" target="_blank" class="shj_ljfgz_item_btn shj_lal_info_btn2">预约设计</a>
                                        <a href="/Design/index.php/Example/detail?id=<?php echo ($vo["id"]); ?>" class="shj_ljfgz_item_btn">查看详情</a>
                                    </div>
                                </div>
                            </div>
                        </li><?php endforeach; endif; ?>


                </ul>
            </div>
        </div>
        <div class="clear"></div>

        <div class="shj_page">
            <a class="a1">703条</a> <a href="index.html" class="a1">上一页</a> <span>1</span> <a href="index_2.html">2</a> <a href="index_3.html">3</a> <a href="index_4.html">4</a> <a href="index_5.html">5</a> <a href="index_6.html">6</a> <a href="index_7.html">7</a> <a href="index_8.html">8</a> <a href="index_9.html">9</a> <a href="index_10.html">10</a> ..<a href="index_79.html">79</a> <a href="index_2.html" class="a1">下一页</a>			</div>
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
<script type="text/javascript" src="/Design/Public/Home//js/index.js"></script>
<script type="text/javascript" src="/Design/Public/Vendor/layer/layer.js"></script>
<script type="text/javascript" src="/Design/Public/Home//js/jsq.js"></script>
<script type="text/javascript" src="/Design/Public/Home//js/bj.js"></script>
<!--<script type='text/javascript' src='http://chat.53kf.com/kf.php?arg=sdlcjt&style=22'></script>-->

</body>
</html>