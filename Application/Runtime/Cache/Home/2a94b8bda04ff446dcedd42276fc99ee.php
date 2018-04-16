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
    <title> 重庆装修公司_重庆装修公司哪家好 生活家装饰</title>
    <link rel="stylesheet" href="/Design/Public/Home//css/index.css" />
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
<input type="hidden" id="page_flag" value="index">
<input type="hidden" value="3775">
<input type="hidden" value="http://cq.shj.cn">
<!--banner开始-->
<div class="swiper-container swiper-container-h">
    <div class="swiper-wrapper">
        <?php if(is_array($gallerys)): foreach($gallerys as $key=>$vo): ?><div class="swiper-slide" style="background: url('http://localhost:8888/Design/Uploads/<?php echo ($vo["url"]); ?>') no-repeat center top;"><a style=" height:100%; width:100%; display:block;" href="http://cq.shj.cn/zt/20180202.html" target="_blank"></a></div><?php endforeach; endif; ?>
    </div>
    <div class="swiper-button-prev swiper-button-prev-h swiper-button-white"></div>
    <div class="swiper-button-next swiper-button-next-h swiper-button-white"></div>
    <div class="swiper-pagination"></div>
</div>
<!--banner结束-->
<!--装修计算器开始-->
<div class="shj_index_jsq_box">
    <div class="shj_index_jsq">
        <div class="shj_index_jsq_title">
            <h2>装修计算器</h2>
            <h6 class="shj_index_jsq_title_line">——</h6>
            <h6>FREE OFFER</h6>
        </div>
        <div class="shj_index_jsq_content">
            <div class="shj_index_jsq_menu_box">
                <div class="shj_index_jsq_menu" data-v="lf">
                    <div class="shj_index_jsq_menu_bg"></div>
                    <img src="http://www.shj.cn/statics/2017/images/lficon.png" alt=""/>
                    <h5>免费量房</h5>
                </div>
                <div class="shj_index_jsq_menu shj_index_jsq_menu_left" data-v="yf">
                    <div class="shj_index_jsq_menu_bg"></div>
                    <img src="http://www.shj.cn/statics/2017/images/yficon.png" alt=""/>
                    <h5>免费验房</h5>
                </div>
                <div class="shj_index_jsq_menu shj_index_jsq_menu_big shj_index_jsq_menu_click" data-v="bj">
                    <div class="shj_index_jsq_menu_bg"></div>
                    <img src="http://www.shj.cn/statics/2017/images/bjicon1.png" alt=""/>
                    <h5>免费报价</h5>
                </div>
            </div>
            <div class="shj_index_jsq_info_box">
                <div id="shj_index_jsq_bj">
                    <div class="shj_index_jsq_item">
                        <h5>房屋户型</h5>
                        <div class="shj_index_jsq_select">
                            <div class="shj_index_jsq_select_bg"></div>
                            <span class="shj_jsq_rst" id="bjshi" data-v="1">1室</span>
                            <span class="shj_index_jsq_jicon">▼</span>
                            <ul class="shj_index_jsq_select_list">
                                <li data-v="1">1室</li>
                                <li data-v="2">2室</li>
                                <li data-v="3">3室</li>
                                <li data-v="4">4室</li>
                                <li data-v="5">5室</li>
                            </ul>
                        </div>
                        <div class="shj_index_jsq_select">
                            <div class="shj_index_jsq_select_bg"></div>
                            <span class="shj_jsq_rst" id="bjting" data-v="1">1厅</span>
                            <span class="shj_index_jsq_jicon">▼</span>
                            <ul class="shj_index_jsq_select_list">
                                <li data-v="1">1厅</li>
                                <li data-v="2">2厅</li>
                                <li data-v="3">3厅</li>
                            </ul>
                        </div>
                        <div class="shj_index_jsq_select">
                            <div class="shj_index_jsq_select_bg"></div>
                            <span class="shj_jsq_rst" id="bjwei" data-v="1">1卫</span>
                            <span class="shj_index_jsq_jicon">▼</span>
                            <ul class="shj_index_jsq_select_list">
                                <li data-v="1">1卫</li>
                                <li data-v="2">2卫</li>
                                <li data-v="3">3卫</li>
                            </ul>
                        </div>
                        <input type="text" class="shj_index_jsq_text" id="bjmj" placeholder="输入室内面积㎡"/>
                    </div>
                    <div class="shj_index_jsq_item">
                        <h5>装修城市</h5>
                        <div class="shj_index_jsq_select">
                            <div class="shj_index_jsq_select_bg"></div>
                            <span class="shj_jsq_rst" id="bjcity" data-v="3775">重庆</span>
                            <span class="shj_index_jsq_jicon">▼</span>
                            <ul class="shj_index_jsq_select_list shj_index_jsq_city_list">
                                <li data-v="3399">成都</li>
                                <li data-v="3557">北京</li>
                                <li data-v="3400">南充</li>
                                <li data-v="3401">贵阳</li>
                                <li data-v="3403">西安</li>
                                <li data-v="3471">昆明</li>
                                <li data-v="3402">武汉</li>
                                <li data-v="3404">长沙</li>
                                <li data-v="3594">合肥</li>
                                <li data-v="3774">南京</li>
                                <li data-v="3775">重庆</li>
                                <li data-v="3792">石家庄</li>
                                <li data-v="3795">济宁</li>
                                <li data-v="3798">天津</li>
                                <li data-v="3799">苏州</li>
                                <li data-v="3800">上海</li>
                                <li data-v="3801">济南</li>
                                <li data-v="3802">广州</li>
                                <li data-v="3829">大连</li>
                                <li data-v="3833">青岛</li>
                                <li data-v="3838">福州</li>
                                <li data-v="3837">沈阳</li>
                                <li data-v="3844">杭州</li>
                                <li data-v="3847">太原</li>
                            </ul>
                        </div>
                        <input type="text" class="shj_index_jsq_text shj_index_jsq_input" id="bjxq" placeholder="请填写小区名称"/>
                    </div>
                    <div class="shj_index_jsq_item">
                        <h5>装修风格</h5>
                        <input type="hidden" id="bjfg" value="现代简约" />
                        <div class="shj_index_jsq_radio">
                            <div class="shj_index_jsq_radio_bg"></div>
                            <i class="shj_index_jsq_ricon shj_index_jsq_ricon_check"></i>
                            <span>现代简约</span>
                        </div>
                        <div class="shj_index_jsq_radio">
                            <div class="shj_index_jsq_radio_bg"></div>
                            <i class="shj_index_jsq_ricon"></i>
                            <span>欧美风格</span>
                        </div>
                        <div class="shj_index_jsq_radio">
                            <div class="shj_index_jsq_radio_bg"></div>
                            <i class="shj_index_jsq_ricon"></i>
                            <span>田园风格</span>
                        </div>
                        <div class="shj_index_jsq_radio">
                            <div class="shj_index_jsq_radio_bg"></div>
                            <i class="shj_index_jsq_ricon"></i>
                            <span>地中海风格</span>
                        </div>
                        <div class="shj_index_jsq_radio">
                            <div class="shj_index_jsq_radio_bg"></div>
                            <i class="shj_index_jsq_ricon"></i>
                            <span>中式风格</span>
                        </div>
                        <div class="shj_index_jsq_radio">
                            <div class="shj_index_jsq_radio_bg"></div>
                            <i class="shj_index_jsq_ricon"></i>
                            <span>其它风格</span>
                        </div>
                    </div>
                    <div class="shj_index_jsq_item">
                        <h5>装修套系</h5>
                        <input type="hidden" id="bjtx" value="拎包装" />
                        <div class="shj_index_jsq_radio">
                            <div class="shj_index_jsq_radio_bg"></div>
                            <i class="shj_index_jsq_ricon shj_index_jsq_ricon_check"></i>
                            <span>轻奢装</span>
                        </div>
                    </div>
                    <div class="shj_index_jsq_item">
                        <h5>您的称呼</h5>
                        <input type="text" class="shj_index_jsq_text" placeholder="先生/女士" id="bjname"/>
                        <input type="text" class="shj_index_jsq_text" placeholder="请输入手机号码" id="bjtel"/>
                        <input type="button" class="shj_index_jsq_text shj_index_jsq_cbtn" value="发送报价到手机" id="shj_code_btn"/>
                    </div>
                </div>
                <div id="shj_index_jsq_lfyf">
                    <div class="shj_index_jsq_wdiv"></div>
                    <div class="shj_index_jsq_item">
                        <h5>房屋户型</h5>
                        <div class="shj_index_jsq_select">
                            <div class="shj_index_jsq_select_bg"></div>
                            <span class="shj_jsq_rst" id="lfyfshi" data-v="1">1室</span>
                            <span class="shj_index_jsq_jicon">▼</span>
                            <ul class="shj_index_jsq_select_list">
                                <li data-v="1">1室</li>
                                <li data-v="2">2室</li>
                                <li data-v="3">3室</li>
                                <li data-v="4">4室</li>
                                <li data-v="5">5室</li>
                            </ul>
                        </div>
                        <div class="shj_index_jsq_select">
                            <div class="shj_index_jsq_select_bg"></div>
                            <span class="shj_jsq_rst" id="lfyfting" data-v="1">1厅</span>
                            <span class="shj_index_jsq_jicon">▼</span>
                            <ul class="shj_index_jsq_select_list">
                                <li data-v="1">1厅</li>
                                <li data-v="2">2厅</li>
                                <li data-v="3">3厅</li>
                            </ul>
                        </div>
                        <div class="shj_index_jsq_select">
                            <div class="shj_index_jsq_select_bg"></div>
                            <span class="shj_jsq_rst" id="lfyfwei" data-v="1">1卫</span>
                            <span class="shj_index_jsq_jicon">▼</span>
                            <ul class="shj_index_jsq_select_list">
                                <li data-v="1">1卫</li>
                                <li data-v="2">2卫</li>
                                <li data-v="3">3卫</li>
                            </ul>
                        </div>
                        <input type="text" class="shj_index_jsq_text" id="lfyfmj" placeholder="输入室内面积㎡"/>
                    </div>
                    <div class="shj_index_jsq_item">
                        <h5>装修城市</h5>
                        <div class="shj_index_jsq_select">
                            <div class="shj_index_jsq_select_bg"></div>
                            <span class="shj_jsq_rst" id="lfyfcity" data-v="3775">重庆</span>
                            <span class="shj_index_jsq_jicon">▼</span>
                            <ul class="shj_index_jsq_select_list shj_index_jsq_city_list">
                                <li data-v="3399">成都</li>
                                <li data-v="3557">北京</li>
                                <li data-v="3400">南充</li>
                                <li data-v="3401">贵阳</li>
                                <li data-v="3403">西安</li>
                                <li data-v="3471">昆明</li>
                                <li data-v="3402">武汉</li>
                                <li data-v="3404">长沙</li>
                                <li data-v="3594">合肥</li>
                                <li data-v="3774">南京</li>
                                <li data-v="3775">重庆</li>
                                <li data-v="3792">石家庄</li>
                                <li data-v="3795">济宁</li>
                                <li data-v="3798">天津</li>
                                <li data-v="3799">苏州</li>
                                <li data-v="3800">上海</li>
                                <li data-v="3801">济南</li>
                                <li data-v="3802">广州</li>
                                <li data-v="3829">大连</li>
                                <li data-v="3833">青岛</li>
                                <li data-v="3838">福州</li>
                                <li data-v="3837">沈阳</li>
                                <li data-v="3844">杭州</li>
                                <li data-v="3847">太原</li>
                            </ul>
                        </div>
                        <input type="text" class="shj_index_jsq_text shj_index_jsq_input" id="lfyfxq" placeholder="请填写小区名称"/>
                    </div>
                    <div class="shj_index_jsq_item">
                        <h5>您的称呼</h5>
                        <input type="text" class="shj_index_jsq_text" placeholder="先生/女士" id="lfyfname"/>
                        <input type="text" class="shj_index_jsq_text" placeholder="请输入手机号码" id="lfyftel"/>
                        <input type="button" class="shj_jsq_lfbtn shj_index_jsq_select shj_index_jsq_cbtn" value="免费量房" id="shj_lfyf_btn" data-v="免费量房"/>
                    </div>
                </div>
            </div>
            <div class="shj_index_jsq_bj_box">
                <div id="shj_index_jsq_bj_right">
                    <!--<div class="shj_index_jsq_brst">
                        <h5>您的家装预算为</h5>
                        <span id="shj_bj_result">0</span>
                    </div>-->
                    <div class="shj_index_jsq_brst" style="color: #fff; background: #cf832f; line-height: 60px; cursor: pointer;" onclick="getSite()">发送地址到手机</div>
                    <p>报价信息仅供参考，实际价格以公司最终报价为准</p>
                    <input type="button" value="人工精准报价" class="shj_index_jsq_btn shj_index_jsq_rbtn" onclick="window.open ('http://www17.53kf.com/webCompany.php?arg=9006234&style=22','newwindow','height=660,width=770,toolbar=no,menubar=no,scrollbars=no, resizable=no,location=no, status=no');" />
                </div>
                <div id="shj_index_jsq_lf_right">
                    <div class="shj_index_jsq_right_img">
                        <a href="http://www.shj.cn/mflf/"><img src="http://www.shj.cn/statics/2017/images/mflf.png" alt="" /></a>
                    </div>
                </div>
                <div id="shj_index_jsq_yf_right">
                    <div class="shj_index_jsq_right_img">
                        <img src="http://www.shj.cn/statics/2017/images/mfyf.png" alt="" />
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--装修计算器结束-->
<!--服务流程-->
<div class="server-step_box">
    <div class="server-step">
        <div class="server-step_title">
            <h2><a href="http://cq.shj.cn/3d/">服务流程</a></h2>
            <span> / 最全面的服务流程</span>
        </div>

        <div class="server-step-content">
            <ul class="stepCon">
                <li><a class="J-Pop-Order" data-pageid="170001" data-title="免费预约" href="javascript:;"><img alt="" class="step lazy"
                                                                                                           data-lazyload="http://static.fuwo.com/fuwo/images/new/pfuwo/home/service-step1.png?v=2.19.1"
                                                                                                           src="http://static.fuwo.com/fuwo/images/new/pfuwo/home/service-step1.png?v=2.19.1"
                                                                                                           style="display: block;"><img
                        class="stepCover"
                        src="http://static.fuwo.com/fuwo/images/new/pfuwo/home/service-step-cover.png?v=2.19.1"></a></li>
                <li><a class="J-Pop-Order" data-pageid="170001" data-title="免费量房" href="javascript:;"><img alt="" class="step lazy"
                                                                                                           data-lazyload="http://static.fuwo.com/fuwo/images/new/pfuwo/home/service-step2.png?v=2.19.1"
                                                                                                           src="http://static.fuwo.com/fuwo/images/new/pfuwo/home/service-step2.png?v=2.19.1"
                                                                                                           style="display: block;"><img
                        class="stepCover"
                        src="http://static.fuwo.com/fuwo/images/new/pfuwo/home/service-step-cover.png?v=2.19.1"></a></li>
                <li><a class="J-Pop-Order" data-pageid="170001" data-title="免费设计" href="javascript:;"><img alt="" class="step lazy"
                                                                                                           data-lazyload="http://static.fuwo.com/fuwo/images/new/pfuwo/home/service-step3.png?v=2.19.1"
                                                                                                           src="http://static.fuwo.com/fuwo/images/new/pfuwo/home/service-step3.png?v=2.19.1"
                                                                                                           style="display: block;"><img
                        class="stepCover"
                        src="http://static.fuwo.com/fuwo/images/new/pfuwo/home/service-step-cover.png?v=2.19.1"></a></li>
                <li><a href="javascript:;"><img alt="" class="step lazy"
                                                data-lazyload="http://static.fuwo.com/fuwo/images/new/pfuwo/home/service-step4.png?v=2.19.1"
                                                src="http://static.fuwo.com/fuwo/images/new/pfuwo/home/service-step4.png?v=2.19.1"
                                                style="display: block;"><img class="stepCover"
                                                                             src="http://static.fuwo.com/fuwo/images/new/pfuwo/home/service-step-cover.png?v=2.19.1"></a>
                </li>
                <li><a href="javascript:;"><img alt="" class="step lazy"
                                                data-lazyload="http://static.fuwo.com/fuwo/images/new/pfuwo/home/service-step5.png?v=2.19.1"
                                                src="http://static.fuwo.com/fuwo/images/new/pfuwo/home/service-step5.png?v=2.19.1"
                                                style="display: block;"><img class="stepCover"
                                                                             src="http://static.fuwo.com/fuwo/images/new/pfuwo/home/service-step-cover.png?v=2.19.1"></a>
                </li>
                <li><a href="javascript:;"><img alt="" class="step lazy"
                                                data-lazyload="http://static.fuwo.com/fuwo/images/new/pfuwo/home/service-step6.png?v=2.19.1"
                                                src="http://static.fuwo.com/fuwo/images/new/pfuwo/home/service-step6.png?v=2.19.1"
                                                style="display: block;"><img class="stepCover"
                                                                             src="http://static.fuwo.com/fuwo/images/new/pfuwo/home/service-step-cover.png?v=2.19.1"></a>
                </li>
                <li><a href="/jianli_free.html"><img alt="" class="step lazy"
                                                     data-lazyload="http://static.fuwo.com/fuwo/images/new/pfuwo/home/service-step7.png?v=2.19.1"
                                                     src="http://static.fuwo.com/fuwo/images/new/pfuwo/home/service-step7.png?v=2.19.1"
                                                     style="display: block;"><img class="stepCover"
                                                                                  src="http://static.fuwo.com/fuwo/images/new/pfuwo/home/service-step-cover.png?v=2.19.1"></a>
                </li>
                <li><a href="javascript:;"><img alt="" class="step lazy"
                                                data-lazyload="http://static.fuwo.com/fuwo/images/new/pfuwo/home/service-step8.png?v=2.19.1"
                                                src="http://static.fuwo.com/fuwo/images/new/pfuwo/home/service-step8.png?v=2.19.1"
                                                style="display: block;"><img class="stepCover"
                                                                             src="http://static.fuwo.com/fuwo/images/new/pfuwo/home/service-step-cover.png?v=2.19.1"></a>
                </li>
            </ul>
        </div>
    </div>
</div>
<!--服务流程结束-->


<!--3D实景图开始-->
<div class="shj_index_3d_box">
    <div class="shj_index_3d">
        <div class="shj_index_3d_title">
            <h2><a href="http://cq.shj.cn/3d/">360全景图</a></h2>
            <span> / 裸眼3D给您带来一样的装修之旅</span>
            <h5><a href="http://cq.shj.cn/3d/">更多3d实景图 》</a></h5>
        </div>

        <div class="shj_index_3d_content">
            <div class="shj_index_3d_item">
                <div class="shj_index_3d_item_img_box">
                    <img src="http://www.shj.cn/uploadfile/2018/21/20180321113232623.jpg" alt="" />
                </div>
                <div class="shj_index_3d_item_info">梧桐郡 现代风格</div>
                <div class="shj_index_3d_item_hover">
                    <div class="shj_index_3d_item_fg">
                        <h2>现代简约</h2>
                        <span>Fashion contracted wind</span>
                    </div>
                    <a href="/Design/index.php/Example/vrshow" target="_blank"><div class="shj_index_3d_item_bbtn">开启3D体验</div></a>
                    <h5><a href="http://www.shj.cn/yuyue/" target="_blank">预约设计师</a></h5>
                </div>
                <div class="shj_index_3d_item_icon"></div>
            </div>
            <div class="shj_index_3d_item">
                <div class="shj_index_3d_item_img_box">
                    <img src="http://www.shj.cn/uploadfile/2017/04/20171104031011426.jpg" alt="" />
                </div>
                <div class="shj_index_3d_item_info">公园大道上东汇120㎡欧式风格	</div>
                <div class="shj_index_3d_item_hover">
                    <div class="shj_index_3d_item_fg">
                        <h2>欧式</h2>
                        <span>Fashion contracted wind</span>
                    </div>
                    <a href="/Design/index.php/Example/vrshow" target="_blank"><div class="shj_index_3d_item_bbtn">开启3D体验</div></a>
                    <h5><a href="http://www.shj.cn/yuyue/" target="_blank">预约设计师</a></h5>
                </div>
                <div class="shj_index_3d_item_icon"></div>
            </div>
            <div class="shj_index_3d_item">
                <div class="shj_index_3d_item_img_box">
                    <img src="http://www.shj.cn/uploadfile/2017/29/20171029032821682.jpg" alt="" />
                </div>
                <div class="shj_index_3d_item_info">庆隆南山高尔夫380㎡欧式风格</div>
                <div class="shj_index_3d_item_hover">
                    <div class="shj_index_3d_item_fg">
                        <h2></h2>
                        <span>Fashion contracted wind</span>
                    </div>
                    <a href="/Design/index.php/Example/vrshow" target="_blank"><div class="shj_index_3d_item_bbtn">开启3D体验</div></a>
                    <h5><a href="http://www.shj.cn/yuyue/" target="_blank">预约设计师</a></h5>
                </div>
                <div class="shj_index_3d_item_icon"></div>
            </div>
        </div>
    </div>
</div>
<!--3D实景图结束-->
<!--家装效果图开始-->
<div class="shj_index_xgt_box">
    <div class="shj_index_xgt">
        <div class="shj_index_3d_title">
            <h2><a href="http://xiaoguotu.shj.cn/">装修效果图</a></h2>
            <span> / 精挑细选200套案例</span>
            <a href="http://xiaoguotu.shj.cn/?zxfg_3376" style="margin-left: 220px;" target="_blank">现代简约</a>
            <a href="http://xiaoguotu.shj.cn/?zxfg_3377" target="_blank">田园</a>
            <a href="http://xiaoguotu.shj.cn/?zxfg_3378" target="_blank">欧式</a>
            <a href="http://xiaoguotu.shj.cn/?zxfg_3379" target="_blank">美式乡村</a>
            <a href="http://xiaoguotu.shj.cn/?zxfg_3380" target="_blank">中式</a>
            <a href="http://xiaoguotu.shj.cn/?zxfg_3382" target="_blank">混搭</a>
            <a href="http://xiaoguotu.shj.cn/?kj_ktimg" target="_blank">客厅</a>
            <a href="http://xiaoguotu.shj.cn/?kj_wsimg" target="_blank">卧室</a>
            <a href="http://xiaoguotu.shj.cn/?kj_ctimg" target="_blank">餐厅</a>
            <h5><a href="http://xiaoguotu.shj.cn/">更多优质家装效果图 》</a></h5>
        </div>
        <div class="shj_index_xgt_anli">
            <div class="shj_index_xgt_swiper_box">
                <div class="swiper-container swiper-container-v" >
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <a href="http://xiaoguotu.shj.cn/761.html" title="神仙树大院138㎡北欧装修效果图" target="_blank"><img src="http://www.shj.cn/uploadfile/2018/11/20180311045516356.jpg" alt="神仙树大院138㎡北欧装修效果图" /></a>
                            <div class="shj_index_xgt_swiper_info">
                                神仙树大院138㎡北欧装修效果图									<span class="shj_index_xgt_swiper_info_price"><a href="http://www.shj.cn/yuyue/" target="_blank">预约设计</a></span>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <a href="http://xiaoguotu.shj.cn/753.html" title="中海九号公馆 别墅装修效果图" target="_blank"><img src="http://www.shj.cn/uploadfile/2018/09/20180309035854173.jpg" alt="中海九号公馆 别墅装修效果图" /></a>
                            <div class="shj_index_xgt_swiper_info">
                                中海九号公馆 别墅装修效果图									<span class="shj_index_xgt_swiper_info_price"><a href="http://www.shj.cn/yuyue/" target="_blank">预约设计</a></span>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <a href="http://xiaoguotu.shj.cn/722.html" title="九号公馆现代简约装修效果图" target="_blank"><img src="http://www.shj.cn/uploadfile/2018/27/20180227053742850.jpg" alt="九号公馆现代简约装修效果图" /></a>
                            <div class="shj_index_xgt_swiper_info">
                                九号公馆现代简约装修效果图									<span class="shj_index_xgt_swiper_info_price"><a href="http://www.shj.cn/yuyue/" target="_blank">预约设计</a></span>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <a href="http://xiaoguotu.shj.cn/680.html" title="青城山花语别墅装修效果图" target="_blank"><img src="http://www.shj.cn/uploadfile/2018/27/20180127111246748.jpg" alt="青城山花语别墅装修效果图" /></a>
                            <div class="shj_index_xgt_swiper_info">
                                青城山花语别墅装修效果图									<span class="shj_index_xgt_swiper_info_price"><a href="http://www.shj.cn/yuyue/" target="_blank">预约设计</a></span>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <a href="http://xiaoguotu.shj.cn/649.html" title="河滨印象鸿运道 305平摩登美式装修效果图" target="_blank"><img src="http://www.shj.cn/uploadfile/2018/19/20180119050555634.jpg" alt="河滨印象鸿运道 305平摩登美式装修效果图" /></a>
                            <div class="shj_index_xgt_swiper_info">
                                河滨印象鸿运道 305平摩登美式装修效果图									<span class="shj_index_xgt_swiper_info_price"><a href="http://www.shj.cn/yuyue/" target="_blank">预约设计</a></span>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-button-prev swiper-button-prev-v"></div>
                    <div class="swiper-button-next swiper-button-next-v"></div>
                </div>
            </div>
            <ul class="shj_index_xgt_anli_box">
                <li>
                    <div class="shj_index_xgt_item_img_box">
                        <img src="http://www.shj.cn/uploadfile/2018/21/20180321085134878.jpg" alt="现代简约风格案例——万达茂" />
                    </div>
                    <div class="shj_index_xgt_item_info">
                        <h3>现代简约风格案例——万达茂</h3>
                        <a href="http://xiaoguotu.shj.cn/775.html" target="_blank"><div class="shj_index_xgt_item_bbtn">查看美图</div></a>
                        <h5><a href="http://www.shj.cn/yuyue/" target="_blank">预约设计</a></h5>
                    </div>
                </li>
                <li>
                    <div class="shj_index_xgt_item_img_box">
                        <img src="http://www.shj.cn/uploadfile/2018/11/20180311045516356.jpg" alt="神仙树大院138㎡北欧装修效果图" />
                    </div>
                    <div class="shj_index_xgt_item_info">
                        <h3>神仙树大院138㎡北欧装修效果图</h3>
                        <a href="http://xiaoguotu.shj.cn/761.html" target="_blank"><div class="shj_index_xgt_item_bbtn">查看美图</div></a>
                        <h5><a href="http://www.shj.cn/yuyue/" target="_blank">预约设计</a></h5>
                    </div>
                </li>
                <li>
                    <div class="shj_index_xgt_item_img_box">
                        <img src="http://www.shj.cn/uploadfile/2018/09/20180309035854173.jpg" alt="中海九号公馆 别墅装修效果图" />
                    </div>
                    <div class="shj_index_xgt_item_info">
                        <h3>中海九号公馆 别墅装修效果图</h3>
                        <a href="http://xiaoguotu.shj.cn/753.html" target="_blank"><div class="shj_index_xgt_item_bbtn">查看美图</div></a>
                        <h5><a href="http://www.shj.cn/yuyue/" target="_blank">预约设计</a></h5>
                    </div>
                </li>
                <li>
                    <div class="shj_index_xgt_item_img_box">
                        <img src="http://www.shj.cn/uploadfile/2018/27/20180227053742850.jpg" alt="九号公馆现代简约装修效果图" />
                    </div>
                    <div class="shj_index_xgt_item_info">
                        <h3>九号公馆现代简约装修效果图</h3>
                        <a href="http://xiaoguotu.shj.cn/722.html" target="_blank"><div class="shj_index_xgt_item_bbtn">查看美图</div></a>
                        <h5><a href="http://www.shj.cn/yuyue/" target="_blank">预约设计</a></h5>
                    </div>
                </li>
            </ul>
        </div>
        <div class="shj_index_xgt_fglist">
            <div class="shj_index_xgt_fglist_item">
                <a href="http://xiaoguotu.shj.cn/?zxfg_3376" target="_blank"><img src="http://www.shj.cn/statics/2017/images/ixgt_xd.jpg" alt="" class="shj_index_xgt_fglist_item_img"/></a>
                <h5>现代简约</h5>
            </div>
            <div class="shj_index_xgt_fglist_item">
                <a href="http://xiaoguotu.shj.cn/?zxfg_3377" target="_blank"><img src="http://www.shj.cn/statics/2017/images/ixgt_ty.jpg" alt="" class="shj_index_xgt_fglist_item_img"/></a>
                <h5>田园风格</h5>
            </div>
            <div class="shj_index_xgt_fglist_item">
                <a href="http://xiaoguotu.shj.cn/?zxfg_3378" target="_blank"><img src="http://www.shj.cn/statics/2017/images/ixgt_os.jpg" alt="" class="shj_index_xgt_fglist_item_img"/></a>
                <h5>欧式风格</h5>
            </div>
            <div class="shj_index_xgt_fglist_item">
                <a href="http://xiaoguotu.shj.cn/?zxfg_3380" target="_blank"><img src="http://www.shj.cn/statics/2017/images/ixgt_zs.jpg" alt="" class="shj_index_xgt_fglist_item_img"/></a>
                <h5>中式风格</h5>
            </div>
            <div class="shj_index_xgt_fglist_item">
                <a href="http://xiaoguotu.shj.cn/?zxfg_3379" target="_blank"><img src="http://www.shj.cn/statics/2017/images/ixgt_ms.jpg" alt="" class="shj_index_xgt_fglist_item_img"/></a>
                <h5>美式风格</h5>
            </div>
            <div class="shj_index_xgt_fglist_item">
                <a href="http://xiaoguotu.shj.cn/?zxfg_3382" target="_blank"><img src="http://www.shj.cn/statics/2017/images/ixgt_hd.jpg" alt="" class="shj_index_xgt_fglist_item_img"/></a>
                <h5>混搭风格</h5>
            </div>
            <div class="shj_index_xgt_fglist_item">
                <a href="http://xiaoguotu.shj.cn/?zxfg_3381" target="_blank"><img src="http://www.shj.cn/statics/2017/images/ixgt_dzh.jpg" alt="" class="shj_index_xgt_fglist_item_img"/></a>
                <h5>地中海风格</h5>
            </div>
            <div class="shj_index_xgt_fglist_item">
                <a href="http://xiaoguotu.shj.cn/?zxfg_3849" target="_blank"><img src="http://www.shj.cn/statics/2017/images/ixgt_bo.jpg" alt="" class="shj_index_xgt_fglist_item_img"/></a>
                <h5>北欧风格</h5>
            </div>
        </div>
    </div>
</div>
<!--家装效果图结束-->
<!--团装小区开始-->
<div class="shj_index_tuan_box">
    <div class="shj_index_tuan">
        <div class="shj_index_3d_title">
            <h2><a href="http://cq.shj.cn/tuanzhuang/">团装小区</a></h2>
            <span> / 500个在建工地让你看个够</span>
            <h5><a href="http://cq.shj.cn/tuanzhuang/">更多团装小区 》</a></h5>
        </div>
        <div class="shj_index_tuan_content">
            <div class="shj_index_tuan_swiper_box">
                <div class="swiper-container swiper-container-t" >
                    <div class="swiper-wrapper">

                        <div class="swiper-slide">
                            <a href="http://cq.shj.cn/tuanzhuang/543.html" ><img src="http://www.shj.cn/uploadfile/2017/17/20170217030329313.png" alt="龙湖两江新宸" /></a>
                            <div class="shj_index_xgt_swiper_info">
                                龙湖两江新宸									<span class="shj_index_tuan_swiper_num">已签数量户</span>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <a href="http://cq.shj.cn/tuanzhuang/1010.html" ><img src="http://www.shj.cn/uploadfile/2015/18/20151018094410279.png" alt="融景城" /></a>
                            <div class="shj_index_xgt_swiper_info">
                                融景城									<span class="shj_index_tuan_swiper_num">已签数量户</span>
                            </div>
                        </div>

                        <div class="swiper-slide">
                            <a href="http://cq.shj.cn/tuanzhuang/1012.html" ><img src="http://www.shj.cn/uploadfile/2015/18/20151018095228799.jpg" alt="龙湖源著" /></a>
                            <div class="shj_index_xgt_swiper_info">
                                龙湖源著									<span class="shj_index_tuan_swiper_num">已签数量户</span>
                            </div>
                        </div>

                    </div>
                    <div class="swiper-button-prev swiper-button-prev-t"></div>
                    <div class="swiper-button-next swiper-button-next-t"></div>
                </div>
            </div>
            <div class="shj_index_tuan_list">

                <div class="shj_index_tuan_item">
                    <a href="http://cq.shj.cn/tuanzhuang/298.html" title="江与城"><img src="http://www.shj.cn/uploadfile/2015/02/20150502053028272.jpg" alt="江与城" width="236" height="200"/></a>
                    <h6 style="margin-top: 12px;">小区：江与城</h6>
                    <h6>已签约：户</h6>
                    <h6>活动结束时间：</h6>
                    <h6>2019-03-09 16:50:00</h6>
                    <a href="http://cq.shj.cn/tuanzhuang/298.html" class="shj_index_tuan_item_btn">查看优惠详情</a>
                </div>

                <div class="shj_index_tuan_item">
                    <a href="http://cq.shj.cn/tuanzhuang/299.html" title="江屿朗廷"><img src="http://www.shj.cn/uploadfile/2015/02/20150502053112302.jpg" alt="江屿朗廷" width="236" height="200"/></a>
                    <h6 style="margin-top: 12px;">小区：江屿朗廷</h6>
                    <h6>已签约：户</h6>
                    <h6>活动结束时间：</h6>
                    <h6>2021-03-13 16:49:00</h6>
                    <a href="http://cq.shj.cn/tuanzhuang/299.html" class="shj_index_tuan_item_btn">查看优惠详情</a>
                </div>

                <div class="shj_index_tuan_item">
                    <a href="http://cq.shj.cn/tuanzhuang/313.html" title="协信溪山墅"><img src="http://www.shj.cn/uploadfile/2015/02/20150502053823951.jpg" alt="协信溪山墅" width="236" height="200"/></a>
                    <h6 style="margin-top: 12px;">小区：协信溪山墅</h6>
                    <h6>已签约：户</h6>
                    <h6>活动结束时间：</h6>
                    <h6>2020-03-07 16:35:00</h6>
                    <a href="http://cq.shj.cn/tuanzhuang/313.html" class="shj_index_tuan_item_btn">查看优惠详情</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!--团装小区结束-->
<!--视频案例开始-->
<div class="shj_index_shiping_box">
    <div class="shj_index_shiping">
        <div class="shj_index_3d_title">
            <h2><a href="http://cq.shj.cn/shipin/">视频案例</a></h2>
            <span> / 360°全方位解析了解家装从这里开始</span>
            <h5><a href="http://cq.shj.cn/shipin/">更多视频案例 》</a></h5>
        </div>
        <div class="shj_index_shiping_content">
            <a href="http://cq.shj.cn/shipin/408.html" title="打造140平完美简约家">
                <div class="shj_index_shiping_item">
                    <img src="http://www.shj.cn/uploadfile/2017/24/20170224020908947.jpg" alt="打造140平完美简约家" width="386" height="350"/>
                    <div class="shj_index_shiping_item_hover">
                        <h3>打造140平完美简约家</h3>
                        <h6>生活家装饰—好设计让家更懂你</h6>
                        <div class="shj_index_shiping_item_play"></div>
                    </div>
                </div>
            </a>
            <a href="http://cq.shj.cn/shipin/397.html" title="生活家整装标准工地——隐蔽工程开放日">
                <div class="shj_index_shiping_item">
                    <img src="http://www.shj.cn/uploadfile/2016/26/20161026112423270.png" alt="生活家整装标准工地——隐蔽工程开放日" width="386" height="350"/>
                    <div class="shj_index_shiping_item_hover">
                        <h3>生活家整装标准工地——隐蔽工程开放日</h3>
                        <h6>生活家装饰—好设计让家更懂你</h6>
                        <div class="shj_index_shiping_item_play"></div>
                    </div>
                </div>
            </a>
            <a href="http://cq.shj.cn/shipin/396.html" title="整装标准工地——隐蔽工程开放强弱电">
                <div class="shj_index_shiping_item">
                    <img src="http://www.shj.cn/uploadfile/2016/05/20161005112232455.jpg" alt="整装标准工地——隐蔽工程开放强弱电" width="386" height="350"/>
                    <div class="shj_index_shiping_item_hover">
                        <h3>整装标准工地——隐蔽工程开放强弱电</h3>
                        <h6>生活家装饰—好设计让家更懂你</h6>
                        <div class="shj_index_shiping_item_play"></div>
                    </div>
                </div>
            </a>
        </div>
    </div>
</div>
<!--视频案例结束-->
<!--装修百科知识开始-->
<div class="shj_index_baike_box">
    <div class="shj_index_baike">
        <div class="shj_index_3d_title">
            <h2><a href="http://www.shj.cn/zhishi/">装修百科知识</a></h2>
            <span> / 明明白白掌控家装从家装课堂开始</span>
            <h5><a href="http://www.shj.cn/zhishi/">更多家装知识 》</a></h5>

        </div>
        <div class="shj_index_baike_content">
            <div class="shj_index_baike_left">
                <div class="shj_index_baike_item">
                    <div class="shj_index_baike_item_logo">
                        <img src="http://www.shj.cn/statics/2017/images/zxrj.jpg" alt="" width="176" height="200"/>
                    </div>
                    <div class="shj_index_baike_item_list">
                        <a href="http://www.shj.cn/zxrj/61.html" title="云玺468三室两厅现代风—你们的用心，我看在眼里">
                            <div class="shj_index_baike_item_anli">
                                <div class="shj_index_baike_item_imgbox">
                                    <img src="http://www.shj.cn/uploadfile/2018/11/20180311024930362.jpg" alt="云玺468三室两厅现代风—你们的用心，我看在眼里"/>
                                </div>
                                <div class="shj_index_baike_item_anli_info">
                                    云玺468三室两厅现代风&mdash;你...									</div>
                            </div>
                        </a>
                        <a href="http://www.shj.cn/zxrj/60.html" title="晒晒我那简约美式的家—适合才是最好的！">
                            <div class="shj_index_baike_item_anli">
                                <div class="shj_index_baike_item_imgbox">
                                    <img src="http://www.shj.cn/uploadfile/2018/09/20180309024205989.jpg" alt="晒晒我那简约美式的家—适合才是最好的！"/>
                                </div>
                                <div class="shj_index_baike_item_anli_info">
                                    晒晒我那简约美式的家&mdash;适合...									</div>
                            </div>
                        </a>
                        <a href="http://www.shj.cn/zxrj/56.html" title="134㎡二手房改造，看一眼就会爱上的家！">
                            <div class="shj_index_baike_item_anli">
                                <div class="shj_index_baike_item_imgbox">
                                    <img src="http://www.shj.cn/uploadfile/2018/26/20180126042351272.jpg" alt="134㎡二手房改造，看一眼就会爱上的家！"/>
                                </div>
                                <div class="shj_index_baike_item_anli_info">
                                    134㎡二手房改造，看一眼就...									</div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="shj_index_baike_item shj_index_baike_item_mtop">
                    <div class="shj_index_baike_item_logo">
                        <img src="http://www.shj.cn/statics/2017/images/djdzw.jpg" alt="" width="176" height="200"/>
                    </div>
                    <div class="shj_index_baike_item_menu">
                        <div class="shj_index_baike_block_wenda">
                            <h4>家装攻略</h4>
                            <div class="shj_index_baike_block_cover">
                                <img src="http://www.shj.cn/statics/2017/images/wenda.jpg" alt="" />
                            </div>
                            <div class="shj_index_baike_lists">
                                <ul>
                                    <li>
                                        <i class="shj_index_baike_li_icon"></i>
                                        <a href="http://www.shj.cn/gonglue/10797.html" title="清水房装修步骤，带你1分钟看懂整个装修流程！">清水房装修步骤，带你1分钟看懂整个装修流程！</a>
                                    </li>
                                    <li>
                                        <i class="shj_index_baike_li_icon"></i>
                                        <a href="http://www.shj.cn/gonglue/11057.html" title="生活家与你分享装修完工墙面验收注意事项">生活家与你分享装修完工墙面验收注意事项</a>
                                    </li>
                                    <li>
                                        <i class="shj_index_baike_li_icon"></i>
                                        <a href="http://www.shj.cn/gonglue/11105.html" title="如何在年底装修涨价狂潮中成功逆袭？">如何在年底装修涨价狂潮中成功逆袭？</a>
                                    </li>
                                    <li>
                                        <i class="shj_index_baike_li_icon"></i>
                                        <a href="http://www.shj.cn/gonglue/11230.html" title="重庆装修公司哪家好 2017重庆装修公司排名">重庆装修公司哪家好 2017重庆装修公司排名</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="shj_index_baike_block_fengshui">
                            <h4>家装风水</h4>
                            <div class="shj_index_baike_block_cover">
                                <img src="http://www.shj.cn/statics/2017/images/fengshui.jpg" alt="" />
                            </div>
                            <div class="shj_index_baike_lists">
                                <ul>
                                    <li>
                                        <i class="shj_index_baike_li_icon"></i>
                                        <a href="http://www.shj.cn/fengshui/7572.html" title="重庆生活家装饰告诉您：让您走运的客厅风水布局">重庆生活家装饰告诉您：让您走运的客厅风水布局</a>
                                    </li>
                                    <li>
                                        <i class="shj_index_baike_li_icon"></i>
                                        <a href="http://www.shj.cn/fengshui/7779.html" title="重庆装饰公司  家装风水">重庆装饰公司  家装风水</a>
                                    </li>
                                    <li>
                                        <i class="shj_index_baike_li_icon"></i>
                                        <a href="http://www.shj.cn/fengshui/8677.html" title="【重庆装修公司】新房装修风水禁忌">【重庆装修公司】新房装修风水禁忌</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="shj_index_baike_right">
                <h3>客户见证<a href="http://www.shj.cn/kehu/">更多见证</a></h3>
                <div class="shj_index_baike_jianzhen_img">
                    <img src="http://www.shj.cn/statics/2017/images/kehujz.jpg" alt="" />
                </div>
                <div class="shj_index_baike_lists shj_index_baike_jianzhen_lists">
                    <ul>
                        <li>
                            <i class="shj_index_baike_li_icon"></i>
                            <a href="http://www.shj.cn/kehu/11088.html" title="查看详情">【锦旗】保利山庄海棠张小姐送来锦旗以至感谢！</a>
                        </li>
                        <li>
                            <i class="shj_index_baike_li_icon"></i>
                            <a href="http://www.shj.cn/kehu/10956.html" title="查看详情">【锦旗】东原D7苏阿兰老师送来锦旗以至感谢！</a>
                        </li>
                        <li>
                            <i class="shj_index_baike_li_icon"></i>
                            <a href="http://www.shj.cn/kehu/9622.html" title="查看详情">【锦旗】首创德尔菲谷两位业主送来锦旗以至感谢！</a>
                        </li>
                        <li>
                            <i class="shj_index_baike_li_icon"></i>
                            <a href="http://www.shj.cn/kehu/9449.html" title="查看详情">【锦旗】上品十六业主郭老师送来锦旗以至感谢！</a>
                        </li>
                        <li>
                            <i class="shj_index_baike_li_icon"></i>
                            <a href="http://www.shj.cn/kehu/9384.html" title="查看详情">【锦旗】象屿两江公元业主蒋老师送来锦旗以至感谢！</a>
                        </li>

                    </ul>
                </div>
            </div>
        </div>

    </div>
</div>
<!--装修百科知识结束-->

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
<!--<script type='text/javascript' src='http://chat.53kf.com/kf.php?arg=sdlcjt&style=22'></script>--><!--在线咨询-->

</body>
</html>	<script>
    var cityid = 3775;
    if(cityid == 3399) {
        setTimeout(function() {
            $("#topBj").click();
        },5000);
    }
</script>