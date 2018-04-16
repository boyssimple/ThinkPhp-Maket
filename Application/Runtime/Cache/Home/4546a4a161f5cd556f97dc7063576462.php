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

    <title> 装修知识</title>
    <link rel="stylesheet" href="/Design/Public/Home//css/knowledge.css" />
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
<input type="hidden" id="page_flag" value="ljzzs">
<div class="shj_lrj_box">
    <div class="shj_lrj">
        <div class="shj_crumbs">
            当前位置：
            <span><a href="http://cq.shj.cn">首页</a></span>
            <span class="shj_crumbs_icon">></span>
            <span class="shj_crumbs_now"><a href="http://www.shj.cn/zhishi/">家装知识</a></span>
        </div>
        <div class="shj_srj_left_block">
            <div class="shj_lzs_banner_box">
                <div class="swiper-container">
                    <div class="swiper-wrapper">

                        <div class="swiper-slide">
                            <a href="http://www.shj.cn/zt/ymj.html" target="_blank"><img src="http://www.shj.cn/uploadfile/2017/29/20171229015830689.jpg" alt="" width="930" height="330" /></a>
                        </div>

                        <div class="swiper-slide">
                            <a href="http://www.shj.cn/gonglue/9472.html" target="_blank"><img src="http://www.shj.cn/uploadfile/2017/09/20170309024827965.jpg" alt="" width="930" height="330" /></a>
                        </div>

                        <div class="swiper-slide">
                            <a href="http://www.shj.cn/fengshui/11374.html" target="_blank"><img src="http://www.shj.cn/uploadfile/2017/09/20170309025132604.jpg" alt="" width="930" height="330" /></a>
                        </div>

                        <div class="swiper-slide">
                            <a href="http://www.shj.cn/sheji/7147.html" target="_blank"><img src="http://www.shj.cn/uploadfile/2017/09/20170309025647340.jpg" alt="" width="930" height="330" /></a>
                        </div>

                    </div>
                    <div class="swiper-pagination"></div>
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>
                </div>
            </div>
            <div class="shj_lrj_lists">
                <div class="shj_lrj_lists_nav_box shj_lzs_lists_nav_box">
                    <div class="shj_lrj_lists_nav shj_lzs_lists_nav">
                        <a href="http://www.shj.cn/gonglue/">家装攻略</a></div>
                    <div class="shj_lrj_lists_nav shj_lzs_lists_nav">
                        <a href="http://www.shj.cn/xuancai/">装修选材</a></div>
                    <div class="shj_lrj_lists_nav shj_lzs_lists_nav">
                        <a href="http://www.shj.cn/sheji/">设计知识</a></div>
                    <div class="shj_lrj_lists_nav shj_lzs_lists_nav">
                        <a href="http://www.shj.cn/fengshui/">家装禁忌</a></div>
                </div>
                <div class="shj_lzs_item">
                    <ul>
                        <li>
                            <a href="/Design/index.php/Knowledge/article" title="掌握这些小知识，轻松装修不是梦！">
                                <div class="shj_lzs_item_imgbox"><img src="http://www.shj.cn/uploadfile/2018/23/20180323114117916.png" alt=""></div>
                            </a>
                            <div class="shj_lzs_item_infobox">
                                <a href="/Design/index.php/Knowledge/article" title="掌握这些小知识，轻松装修不是梦！">
                                    <div class="shj_lzs_item_info_title">掌握这些小知识，轻松装修不是梦！</div>
                                </a>
                                <div class="shj_lzs_item_timebox">
                                    <span>2018-03-23 10:50:43</span>
                                    <span class="shj_lzs_item_see">2人浏览</span>
                                </div>
                                <p>装修是每一个业主都很头疼的事情，好不容易买了房子，但是有开始面对一大推材料不知如何下手……</p>
                                <div class="shj_lzs_item_btnbox">
                                    <a href="http://www.shj.cn/sheji/15179.html" class="shj_lzs_item_btn">查看详情</a>
                                    <a href="http://www.shj.cn/sheji/15179.html" class="shj_lzs_item_btn">最新装修优惠</a>
                                </div>

                            </div>
                        </li>
                        <li>
                            <a href="/Design/index.php/Knowledge/article" title="装修千里眼，终结您的装修痛苦！">
                                <div class="shj_lzs_item_imgbox"><img src="http://www.shj.cn/uploadfile/2018/23/20180323094803937.png" alt=""></div>
                            </a>
                            <div class="shj_lzs_item_infobox">
                                <a href="/Design/index.php/Knowledge/article" title="装修千里眼，终结您的装修痛苦！">
                                    <div class="shj_lzs_item_info_title">装修千里眼，终结您的装修痛苦！</div>
                                </a>
                                <div class="shj_lzs_item_timebox">
                                    <span>2018-03-23 09:19:17</span>
                                    <span class="shj_lzs_item_see">21人浏览</span>
                                </div>
                                <p>您在装修的时候是不是经常遇到装修工人三天打鱼，两天晒网，工地经常没人影？项目经理监理根本不到场巡检？</p>
                                <div class="shj_lzs_item_btnbox">
                                    <a href="http://www.shj.cn/gonglue/15178.html" class="shj_lzs_item_btn">查看详情</a>
                                    <a href="http://www.shj.cn/gonglue/15178.html" class="shj_lzs_item_btn">最新装修优惠</a>
                                </div>

                            </div>
                        </li>
                        <li>
                            <a href="/Design/index.php/Knowledge/article" title="装修材料这样选择才省钱">
                                <div class="shj_lzs_item_imgbox"><img src="http://www.shj.cn/uploadfile/2018/22/20180322044817890.png" alt=""></div>
                            </a>
                            <div class="shj_lzs_item_infobox">
                                <a href="/Design/index.php/Knowledge/article" title="装修材料这样选择才省钱">
                                    <div class="shj_lzs_item_info_title">装修材料这样选择才省钱</div>
                                </a>
                                <div class="shj_lzs_item_timebox">
                                    <span>2018-03-22 16:48:11</span>
                                    <span class="shj_lzs_item_see">47人浏览</span>
                                </div>
                                <p>装修一定离不开装修材料，不同的装修风格所需的材料也不同，但是有些装修材料却是“万金油</p>
                                <div class="shj_lzs_item_btnbox">
                                    <a href="/Design/index.php/Knowledge/article" class="shj_lzs_item_btn">查看详情</a>
                                    <a href="/Design/index.php/Knowledge/article" class="shj_lzs_item_btn">最新装修优惠</a>
                                </div>

                            </div>
                        </li>
                        <li>
                            <a href="/Design/index.php/Knowledge/article" title="有孩子的家这样装修，童趣十足！">
                                <div class="shj_lzs_item_imgbox"><img src="http://www.shj.cn/uploadfile/2018/22/20180322040241811.jpg" alt=""></div>
                            </a>
                            <div class="shj_lzs_item_infobox">
                                <a href="/Design/index.php/Knowledge/article" title="有孩子的家这样装修，童趣十足！">
                                    <div class="shj_lzs_item_info_title">有孩子的家这样装修，童趣十足！</div>
                                </a>
                                <div class="shj_lzs_item_timebox">
                                    <span>2018-03-22 16:02:03</span>
                                    <span class="shj_lzs_item_see">44人浏览</span>
                                </div>
                                <p>​有孩子的家庭在装修时多多少少都会考虑一些宝宝的需求在里面。</p>
                                <div class="shj_lzs_item_btnbox">
                                    <a href="/Design/index.php/Knowledge/article" class="shj_lzs_item_btn">查看详情</a>
                                    <a href="/Design/index.php/Knowledge/article" class="shj_lzs_item_btn">最新装修优惠</a>
                                </div>

                            </div>
                        </li>
                        <li>
                            <a href="/Design/index.php/Knowledge/article" title="最新家居装修效果图，让您找到装修灵感">
                                <div class="shj_lzs_item_imgbox"><img src="http://www.shj.cn/uploadfile/2018/22/20180322114216811.png" alt=""></div>
                            </a>
                            <div class="shj_lzs_item_infobox">
                                <a href="/Design/index.php/Knowledge/article" title="最新家居装修效果图，让您找到装修灵感">
                                    <div class="shj_lzs_item_info_title">最新家居装修效果图，让您找到装修灵感</div>
                                </a>
                                <div class="shj_lzs_item_timebox">
                                    <span>2018-03-22 11:13:57</span>
                                    <span class="shj_lzs_item_see">69人浏览</span>
                                </div>
                                <p>春天到了，万物复苏，抬头看看窗外，世界如此的美好，总想出去走走，除了看那美丽的风景外，还可以放飞心里，调节自我。但是，不管走到哪里，我们始终都会回到让我们倍感温馨的小家</p>
                                <div class="shj_lzs_item_btnbox">
                                    <a href="/Design/index.php/Knowledge/article" class="shj_lzs_item_btn">查看详情</a>
                                    <a href="/Design/index.php/Knowledge/article" class="shj_lzs_item_btn">最新装修优惠</a>
                                </div>

                            </div>
                        </li>
                        <li>
                            <a href="/Design/index.php/Knowledge/article" title="春季装修，好处多多！">
                                <div class="shj_lzs_item_imgbox"><img src="http://www.shj.cn/uploadfile/2018/21/20180321050114573.png" alt=""></div>
                            </a>
                            <div class="shj_lzs_item_infobox">
                                <a href="/Design/index.php/Knowledge/article" title="春季装修，好处多多！">
                                    <div class="shj_lzs_item_info_title">春季装修，好处多多！</div>
                                </a>
                                <div class="shj_lzs_item_timebox">
                                    <span>2018-03-21 16:59:46</span>
                                    <span class="shj_lzs_item_see">86人浏览</span>
                                </div>
                                <p>一年之计在于春，春天正是装修的好季节，为什么这么多人选择春季装修呢？因为春天装修好处多多，我们一起来看一下吧！1．气温适中春天的气   </p>
                                <div class="shj_lzs_item_btnbox">
                                    <a href="/Design/index.php/Knowledge/article" class="shj_lzs_item_btn">查看详情</a>
                                    <a href="/Design/index.php/Knowledge/article" class="shj_lzs_item_btn">最新装修优惠</a>
                                </div>

                            </div>
                        </li>

                    </ul>
                </div>
            </div>
        </div>
        <div class="shj_srj_right_block">
            <div class="shj_srj_tbm">
                <img src="http://www.shj.cn/statics/2017/images/tbm.jpg" alt="" />
                <div class="shj_srj_tbm_box">
                    <input type="text" class="shj_srj_tbm_input" id="name" placeholder="先生/女士"/>
                    <input type="text" class="shj_srj_tbm_input" id="xiaoqu" placeholder="请输入小区名称"/>
                    <input type="text" class="shj_srj_tbm_input" id="mianji" placeholder="1室1卫1厅65㎡"/>
                    <input type="text" class="shj_srj_tbm_input" id="tel" placeholder="请输入手机号码"/>
                    <input type="button" value="确认报名" class="shj_srj_tbm_tjbtn" data-info="家装知识列表页报名"/>
                </div>
            </div>

            <div class="shj_srj_recommend">
                <h4>热门家装知识推荐<a href="http://www.shj.cn/zhishi/">查看更多</a></h4>
                <ul>

                    <li>
                        <img src="http://www.shj.cn/uploadfile/2018/23/20180323094803937.png" alt="" />
                        <div class="shj_srj_recommend_title">
                            <h6><span>· </span>装修千里眼，终结您的装修痛苦！</h6>
                            <a href="/Design/index.php/Knowledge/article" class="shj_srj_recommend_link">查看详情</a>
                        </div>
                    </li>

                    <li>
                        <img src="http://www.shj.cn/uploadfile/2018/14/20180314024835339.jpg" alt="" />
                        <div class="shj_srj_recommend_title">
                            <h6><span>· </span>生活家140㎡简约风，储藏了一家人的欢乐幸福时光！</h6>
                            <a href="/Design/index.php/Knowledge/article" class="shj_srj_recommend_link">查看详情</a>
                        </div>
                    </li>

                    <li>
                        <img src="http://www.shj.cn/uploadfile/2018/14/20180314021923203.jpg" alt="" />
                        <div class="shj_srj_recommend_title">
                            <h6><span>· </span>成都装修怎么样最省钱？生活家315品质消费，非去不可！</h6>
                            <a href="/Design/index.php/Knowledge/article" class="shj_srj_recommend_link">查看详情</a>
                        </div>
                    </li>

                    <li>
                        <img src="http://www.shj.cn/uploadfile/2018/01/20180301024310722.jpg" alt="" />
                        <div class="shj_srj_recommend_title">
                            <h6><span>· </span>这些家装投入不能省，否则只有后悔！后悔！后悔！</h6>
                            <a href="/Design/index.php/Knowledge/article" class="shj_srj_recommend_link">查看详情</a>
                        </div>
                    </li>

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
        <div class="shj_page">
            <a class="a1">11796条</a> <a href="index.html" class="a1">上一页</a> <span>1</span> <a href="index_2.html">2</a> <a href="index_3.html">3</a> <a href="index_4.html">4</a> <a href="index_5.html">5</a> <a href="index_6.html">6</a> <a href="index_7.html">7</a> <a href="index_8.html">8</a> <a href="index_9.html">9</a> <a href="index_10.html">10</a> ..<a href="index_1966.html">1966</a> <a href="index_2.html" class="a1">下一页</a>      </div>
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