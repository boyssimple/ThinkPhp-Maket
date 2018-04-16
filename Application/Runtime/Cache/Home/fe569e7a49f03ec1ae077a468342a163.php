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
<script type="text/javascript">
    var ENV = '/Design/index.php';
</script>
    <title> 装修效果图</title>
    <link rel="stylesheet" href="/Design/Public/Home//css/effectdetail.css" />
</head>
<body>
<style>
    body{background: #f6f6f6; min-width: 1400px;}
    .bdshare-button-style0-32 a{width: 26px; height: 26px; background-image: url('http://www.shj.cn/statics/2017/images/icon.png'); }
    .bdshare-button-style0-32 .bds_tsina{background-position: -4px -615px;}
    .bdshare-button-style0-32 .bds_qzone{background-position: -37px -615px;}
    .bdshare-button-style0-32 .bds_weixin{background-position: -70px -615px;}
</style>
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
<input type="hidden" id="page_flag" value="sxgt">
<div class="shj_sxgt_wrap">

    <div class="shj_sxgt_box">
        <div class="shj_sxgt_left_block">
            <div class="shj_sxgt_imgbox_btn prev"></div>
            <div class="shj_sxgt_imgbox_btn next"></div>
            <div class="shj_sxgt_left_block_title">
                <div class="shj_crumbs shj_sxgt_crumbs">
                    当前位置：
                    <span><a href="http://cq.shj.cn">首页</a></span>
                    <span class="shj_crumbs_icon">></span>
                    <span><a href="/">装修效果图</a></span>
                    <span class="shj_crumbs_icon">></span>
                    <span class="shj_crumbs_now"><a href=""><?php echo ($model["name"]); ?></a></span>
                </div>
                <div class="shj_sxgt_info_box">
                    <div class="shj_sxgt_info">分享到：</div>
                    <div class="bdsharebuttonbox shj_sxgt_share"><a href="#" class="bds_tsina" data-cmd="tsina" title="分享到新浪微博"></a><a href="#" class="bds_qzone" data-cmd="qzone" title="分享到QQ空间"></a><a href="#" class="bds_weixin" data-cmd="weixin" title="分享到微信"></a></div>
                </div>
            </div>
            <div class="clear"></div>
            <div class="shj_sxgt_imgbox">
                <span><img src="" alt="" id="show_bog_img"></span>
            </div>
            <div class="shj_sxgt_img_controller_box">
                <div class="shj_sxgt_img_controller">
                    <div class="shj_sxgt_img_perv">
                        <a href="http://xiaoguotu.shj.cn/704.html">
                            <img src="http://www.shj.cn/uploadfile/2018/31/20180131110059260.jpg" alt="">
                            <div class="shj_sxgt_img_controller_text">上一套</div>
                        </a>
                    </div>
                    <div class="shj_sxgt_img_controller_btn shj_sxgt_img_controller_prev" title="上一张" data="prev"></div>
                    <div class="swiper-container shj_sxgt_img_smallimg_box" data-now="0">
                        <div class="swiper-wrapper">

                            <?php if(is_array($images)): foreach($images as $k=>$vo): ?><div class="swiper-slide" data-v="0">
                                    <img src="http://localhost:8888/Design/Uploads/<?php echo ($vo["url"]); ?>" alt="1" title="1" >
                                    <div class="shj_sxgt_img_smallimg_num"><?php echo ($k+1); ?>/<?php echo (count($images)); ?></div>
                                </div><?php endforeach; endif; ?>
                        </div>
                    </div>
                    <div class="shj_sxgt_img_controller_btn shj_sxgt_img_controller_next" title="下一张" data="next"></div>
                    <div class="shj_sxgt_img_next">
                        <a href="javascript:alert('最后一页');">
                            <img src="http://www.shj.cn/statics/images/nopic_small.gif" alt="">
                            <div class="shj_sxgt_img_controller_text">下一套</div>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="shj_srj_right_block shj_sxgt_right_block">
            <div class="shj_srj_tbm">
                <img src="http://www.shj.cn/statics/2017/images/tjsq.jpg" alt="" />
                <div class="shj_srj_tbm_box">
                    <input type="text" class="shj_srj_tbm_input" id="name" placeholder="先生/女士"/>
                    <div class="shj_srj_tbm_input_box">
                        <select name="" id="city" class="shj_srj_tjsq_select">
                            <option value="3399">成都</option>
                            <option value="3557">北京</option>
                            <option value="3400">南充</option>
                            <option value="3401">贵阳</option>
                            <option value="3403">西安</option>
                            <option value="3471">昆明</option>
                            <option value="3402">武汉</option>
                            <option value="3404">长沙</option>
                            <option value="3594">合肥</option>
                            <option value="3774">南京</option>
                            <option value="3775">重庆</option>
                            <option value="3792">石家庄</option>
                            <option value="3795">济宁</option>
                            <option value="3798">天津</option>
                            <option value="3799">苏州</option>
                            <option value="3800">上海</option>
                            <option value="3801">济南</option>
                            <option value="3802">广州</option>
                            <option value="3829">大连</option>
                            <option value="3833">青岛</option>
                            <option value="3838">福州</option>
                            <option value="3837">沈阳</option>
                            <option value="3844">杭州</option>
                            <option value="3847">太原</option>
                        </select>
                        <input type="text" class="shj_tbm_short_input" id="xiaoqu" placeholder="请输入小区名称"/>
                    </div>
                    <div class="shj_srj_tbm_input_box shj_srj_tbm_input_box_bordernoe">
                        <select name="" class="shj_tbm_short_input shj_tbm_short_short" id="shi">
                            <option value="1">1室</option>
                            <option value="2">2室</option>
                            <option value="3">3室</option>
                        </select>
                        <select name="" class="shj_tbm_short_input shj_tbm_short_short" id="ting">
                            <option value="1">1厅</option>
                            <option value="2">2厅</option>
                            <option value="3">3厅</option>
                        </select>
                        <select name="" class="shj_tbm_short_input shj_tbm_short_short" id="wei">
                            <option value="1">1卫</option>
                            <option value="2">2卫</option>
                            <option value="3">3卫</option>
                        </select>
                    </div>
                    <div class="shj_srj_tbm_input_box">
                        <select name="" class="shj_srj_tjsq_select" style="width: 85px" id="tx">
                            <option value="拎包装">轻奢装</option>
                        </select>
                        <input type="number" class="shj_tbm_short_input" style="width: 133px" id="mianji" placeholder="套内面积"/>
                    </div>
                    <input type="text" class="shj_srj_tbm_input" id="tel" placeholder="请输入手机号码"/>
                    <input type="button" value="发送报价到手机" class="shj_srj_tbm_tjbtn"/>
                </div>
            </div>
            <div class="shj_srj_recommend">
                <h4>热门效果图推荐</h4>
                <ul>
                    <li>
                        <img src="http://www.shj.cn/uploadfile/2018/21/20180321085134878.jpg" alt="现代简约风格案例——万达茂" />
                        <div class="shj_srj_recommend_title">
                            <h6><span>· </span>现代简约风格案例——万达茂</h6>
                            <a href="http://xiaoguotu.shj.cn/775.html" class="shj_srj_recommend_link">查看详情</a>
                        </div>
                    </li>
                    <li>
                        <img src="http://www.shj.cn/uploadfile/2018/11/20180311045516356.jpg" alt="神仙树大院138㎡北欧装修效果图" />
                        <div class="shj_srj_recommend_title">
                            <h6><span>· </span>神仙树大院138㎡北欧装修效果图</h6>
                            <a href="http://xiaoguotu.shj.cn/761.html" class="shj_srj_recommend_link">查看详情</a>
                        </div>
                    </li>
                    <li>
                        <img src="http://www.shj.cn/uploadfile/2018/09/20180309035854173.jpg" alt="中海九号公馆 别墅装修效果图" />
                        <div class="shj_srj_recommend_title">
                            <h6><span>· </span>中海九号公馆 别墅装修效果图</h6>
                            <a href="http://xiaoguotu.shj.cn/753.html" class="shj_srj_recommend_link">查看详情</a>
                        </div>
                    </li>
                    <li>
                        <img src="http://www.shj.cn/uploadfile/2018/27/20180227053742850.jpg" alt="九号公馆现代简约装修效果图" />
                        <div class="shj_srj_recommend_title">
                            <h6><span>· </span>九号公馆现代简约装修效果图</h6>
                            <a href="http://xiaoguotu.shj.cn/722.html" class="shj_srj_recommend_link">查看详情</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="clear"></div>
    <div class="shj_sxgt_bjtc_bg">
        <div class="shj_sxgt_bjtc_box">
				<span>
					<div class="shj_sxgt_bjtc">
						<div class="shj_sxgt_bjtc_rst">
							<h4>您的家装预算为</h4>
							<h3>0</h3>
						</div>
						<div class="shj_sxgt_bjtc_text">以上价格供参考、实际价格以公司最终报价为准</div>
						<button class="shj_sxgt_bjtc_btn" onclick="window.open ('http://www17.53kf.com/webCompany.php?arg=9006234&style=22','newwindow','height=660,width=770,toolbar=no,menubar=no,scrollbars=no, resizable=no,location=no, status=no');">在线咨询</button>
						<div class="shj_sxgt_bjtc_text">已有<span><script language="javascript" src="http://www.shj.cn/index.php?m=luckdraw&c=index&a=countNum"></script><script> document.write(countnum);</script></span>位业主成功获取人工精准报价</div>
						<div class="shj_sxgt_bjtc_close shj_bjtc_close" title="关闭">╳</div>
					</div>
				</span>
        </div>
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
</body>
</html>