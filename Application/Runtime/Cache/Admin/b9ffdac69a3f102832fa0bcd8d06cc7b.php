<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="<?php echo ($system["lang"]); ?>">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<!-- Meta, title, CSS, favicons, etc. -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title><?php echo ($system["sysName"]); ?></title>

    <!-- Bootstrap -->
    <link href="/Design/Public/Vendor/gentelella/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="/Design/Public/Vendor/gentelella/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="/Design/Public/Vendor/gentelella/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="/Design/Public/Vendor/gentelella/vendors/iCheck/skins/flat/green.css" rel="stylesheet">
    <!-- bootstrap-wysiwyg -->
    <link href="/Design/Public/Vendor/gentelella/vendors/google-code-prettify/bin/prettify.min.css" rel="stylesheet">
    <!-- Select2 -->
    <link href="/Design/Public/Vendor/gentelella/vendors/select2/dist/css/select2.min.css" rel="stylesheet">
    <!-- Switchery -->
    <link href="/Design/Public/Vendor/gentelella/vendors/switchery/dist/switchery.min.css" rel="stylesheet">
    <!-- starrr -->
    <link href="/Design/Public/Vendor/gentelella/vendors/starrr/dist/starrr.css" rel="stylesheet">
    <!-- bootstrap-daterangepicker -->
    <link href="/Design/Public/Vendor/gentelella/vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="/Design/Public/Vendor/gentelella/build/css/custom.min.css" rel="stylesheet">
    <style>
        .grallery{
            width:120px;
            height:120px;
            position: relative;
            display: inline-block;
        }

        .img{
            width:100px;
            height:100px;
            margin-top: 20px;
        }

        .swiper-close{

            position: absolute;
            right: 5px;
            top: 0px;
            color: #FF9300;
            z-index: 1000;
            font-size: 30px;
            cursor: pointer;
            width:30px;
            height:30px;
        }

    </style>
    <script type="text/javascript">
        var ENV = '/Design/admin.php';
    </script>
</head>

<body class="nav-md">
<div class="container body">
    <div class="main_container">
        <div class="col-md-3 left_col">
    <div class="left_col scroll-view">
        <div class="navbar nav_title" style="border: 0;">
            <a href="/Design/admin.php" class="site_title"><i class="fa fa-paw"></i> <span>Gentelella Alela!</span></a>
        </div>

        <div class="clearfix"></div>

        <!-- menu profile quick info -->
        <div class="profile clearfix">
            <div class="profile_pic">
                <img src="/Supermaket/Public/Vendor/gentelella/production/images/img.jpg" alt="..." class="img-circle profile_img">
            </div>
            <div class="profile_info">
                <span>Welcome,</span>
                <h2>John Doe</h2>
            </div>
        </div>
        <!-- /menu profile quick info -->

        <br />

        <!-- sidebar menu -->
        <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
            <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                    <?php if(is_array($menus)): $i = 0; $__LIST__ = $menus;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$m): $mod = ($i % 2 );++$i;?><li><a><i class="fa fa-clone"></i><?php echo ($m["name"]); ?> <?php if( $m["children"] > 0 ): ?><span class="fa fa-chevron-down"></span><?php endif; ?></a>
                            <?php if( $m["children"] > 0 ): ?><ul class="nav child_menu">
                                    <?php if(is_array($m["children"])): $i = 0; $__LIST__ = $m["children"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ms): $mod = ($i % 2 );++$i;?><li><a  <?php if( $ms["menuUrl"] != '' ): ?>href="/Design/admin.php/<?php echo ($ms["menuUrl"]); ?>"<?php endif; ?> ><?php echo ($ms["name"]); if( $ms["children"] > 0 ): ?><span class="fa fa-chevron-down"></span><?php endif; ?></a>
                                            <?php if( $ms["children"] > 0 ): ?><ul class="nav child_menu">
                                                    <!--<?php if(is_array($ms["children"])): $i = 0; $__LIST__ = $ms["children"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$mss): $mod = ($i % 2 );++$i;?>-->
                                                        <!--<li class="sub_menu"><a href="/Design/admin.php/<?php echo ($mss["menuUrl"]); ?>"><?php echo ($mss["name"]); ?></a></li>-->
                                                    <!--<?php endforeach; endif; else: echo "" ;endif; ?>-->

                                                    <?php if(is_array($ms["children"])): foreach($ms["children"] as $key=>$mss): ?><li><a  <?php if( $mss["menuUrl"] != '' ): ?>href="/Design/admin.php/<?php echo ($mss["menuUrl"]); ?>"<?php endif; ?> ><?php echo ($mss["name"]); if( $mss["children"] > 0 ): ?><span class="fa fa-chevron-down"></span><?php endif; ?></a>
                                                            <?php if( $mss["children"] > 0 ): ?><ul class="nav child_menu">
                                                                    <?php if(is_array($mss["children"])): foreach($mss["children"] as $key=>$msss): ?><li class="sub_menu"><a href="/Design/admin.php/<?php echo ($msss["menuUrl"]); ?>"><?php echo ($msss["name"]); ?></a></li><?php endforeach; endif; ?>
                                                                </ul><?php endif; ?>
                                                        </li><?php endforeach; endif; ?>
                                                </ul><?php endif; ?>
                                        </li><?php endforeach; endif; else: echo "" ;endif; ?>
                                </ul><?php endif; ?>
                        </li><?php endforeach; endif; else: echo "" ;endif; ?>

                </ul>
            </div>

        </div>
        <!-- /sidebar menu -->

        <!-- /menu footer buttons -->
        <div class="sidebar-footer hidden-small">
            <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="Logout" href="login.html">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
            </a>
        </div>
        <!-- /menu footer buttons -->
    </div>
</div>

<!-- top navigation -->
<div class="top_nav">
    <div class="nav_menu">
        <nav>
            <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
            </div>

            <ul class="nav navbar-nav navbar-right">
                <li class="">
                    <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                        <img src="/Supermaket/Public/Vendor/gentelella/production/images/img.jpg" alt="">John Doe
                        <span class=" fa fa-angle-down"></span>
                    </a>
                    <ul class="dropdown-menu dropdown-usermenu pull-right">
                        <li><a href="javascript:;"> Profile</a></li>
                        <li>
                            <a href="javascript:;">
                                <span class="badge bg-red pull-right">50%</span>
                                <span>Settings</span>
                            </a>
                        </li>
                        <li><a href="javascript:;">Help</a></li>
                        <li><a href="login.html"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                    </ul>
                </li>

                <li role="presentation" class="dropdown">
                    <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
                        <i class="fa fa-envelope-o"></i>
                        <span class="badge bg-green">6</span>
                    </a>
                    <ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">
                        <li>
                            <a>
                                <span class="image"><img src="/Supermaket/Public/Vendor/gentelella/production/images/img.jpg" alt="Profile Image" /></span>
                                <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                                <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                            </a>
                        </li>
                        <li>
                            <a>
                                <span class="image"><img src="/Supermaket/Public/Vendor/gentelella/production/images/img.jpg" alt="Profile Image" /></span>
                                <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                                <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                            </a>
                        </li>
                        <li>
                            <a>
                                <span class="image"><img src="/Supermaket/Public/Vendor/gentelella/production/images/img.jpg" alt="Profile Image" /></span>
                                <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                                <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                            </a>
                        </li>
                        <li>
                            <a>
                                <span class="image"><img src="/Supermaket/Public/Vendor/gentelella/production/images/img.jpg" alt="Profile Image" /></span>
                                <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                                <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                            </a>
                        </li>
                        <li>
                            <div class="text-center">
                                <a>
                                    <strong>See All Alerts</strong>
                                    <i class="fa fa-angle-right"></i>
                                </a>
                            </div>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
    </div>
</div>
<!-- /top navigation -->
        <!-- page content -->
        <div class="right_col" role="main">
            <div class="">
                <div class="clearfix"></div>
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="x_panel">
                            <div class="x_title">
                                <h2>装修案例 <small>装修案例</small></h2>

                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
                                <br />
                                <form id="demo-form2" data-parsley-validate enctype="multipart/form-data"  method="post" class="form-horizontal form-label-left" action="/Design/admin.php/Exbuild/save">


                                                                                    <?php if($model): ?><input type="hidden" id="id" name="id" value="<?php echo ($model["id"]); ?>">

                                                    
                                                    <?php else: ?>
                                                    
                                                    <input type="hidden" id="id" name="id" ><?php endif; ?>

                                                                                                                                     <div class="form-group">
                                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">名称 </label>
                                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                                        
                                                            <?php if($model): ?><input type="text" id="name" name="name" value="<?php echo ($model["name"]); ?>"  class="form-control col-md-7 col-xs-12">
                                                                <?php else: ?>
                                                                <input type="text" id="name" name="name"  class="form-control col-md-7 col-xs-12"><?php endif; ?>
                                                        
                                                    </div>
                                                </div>                                                                                                <?php if($model): ?><input type="hidden" id="publishTime" name="publishTime" value="<?php echo ($model["publishTime"]); ?>">

                                                    
                                                        <?php else: ?>
                                                    
                                                    <input type="hidden" id="publishTime" name="publishTime" ><?php endif; ?>

                                                                                                                                                <?php if($model): ?><input type="hidden" id="browse" name="browse" value="<?php echo ($model["browse"]); ?>">

                                                    
                                                        <?php else: ?>
                                                    
                                                    <input type="hidden" id="browse" name="browse" ><?php endif; ?>
                                                 <div class="form-group">
                                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">装修风格 </label>
                                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                                        <select class="form-control" id="buildstyleId" name="buildstyleId">
                                                            <?php if($buildstyle): if(is_array($buildstyle)): $i = 0; $__LIST__ = $buildstyle;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i; if($model): if($model["buildstyleId"] == $vo.id): ?><option selected value="<?php echo ($vo["id"]); ?>"><?php echo ($vo["name"]); ?></option>
                                                                            <?php else: ?>
                                                                            <option value="<?php echo ($vo["id"]); ?>"><?php echo ($vo["name"]); ?></option><?php endif; ?>

                                                                        <?php else: ?>
                                                                        <option value="<?php echo ($vo["id"]); ?>"><?php echo ($vo["name"]); ?></option><?php endif; endforeach; endif; else: echo "" ;endif; endif; ?>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">户型 </label>
                                                    <div class="col-md-6 col-sm-6 col-xs-12">

                                                        <select class="form-control" id="hoursetypeId" name="hoursetypeId">
                                                            <?php if($hoursetype): if(is_array($hoursetype)): $i = 0; $__LIST__ = $hoursetype;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i; if($model): if($model["hoursetypeId"] == $vo.id): ?><option selected value="<?php echo ($vo["id"]); ?>"><?php echo ($vo["name"]); ?></option>
                                                                            <?php else: ?>
                                                                            <option value="<?php echo ($vo["id"]); ?>"><?php echo ($vo["name"]); ?></option><?php endif; ?>

                                                                        <?php else: ?>
                                                                        <option value="<?php echo ($vo["id"]); ?>"><?php echo ($vo["name"]); ?></option><?php endif; endforeach; endif; else: echo "" ;endif; endif; ?>
                                                        </select>
                                                        
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">面积范围 </label>
                                                    <div class="col-md-6 col-sm-6 col-xs-12">

                                                        <select class="form-control" id="areaId" name="areaId">
                                                            <?php if($area): if(is_array($area)): $i = 0; $__LIST__ = $area;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i; if($model): if($model["areaId"] == $vo.id): ?><option selected value="<?php echo ($vo["id"]); ?>"><?php echo ($vo["name"]); ?></option>
                                                                            <?php else: ?>
                                                                            <option value="<?php echo ($vo["id"]); ?>"><?php echo ($vo["name"]); ?></option><?php endif; ?>

                                                                        <?php else: ?>
                                                                        <option value="<?php echo ($vo["id"]); ?>"><?php echo ($vo["name"]); ?></option><?php endif; endforeach; endif; else: echo "" ;endif; endif; ?>
                                                        </select>
                                                        
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">套系 </label>
                                                    <div class="col-md-6 col-sm-6 col-xs-12">

                                                        <select class="form-control" id="seriesId" name="seriesId">
                                                            <?php if($series): if(is_array($series)): $i = 0; $__LIST__ = $series;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i; if($model): if($model["seriesId"] == $vo.id): ?><option selected value="<?php echo ($vo["id"]); ?>"><?php echo ($vo["name"]); ?></option>
                                                                            <?php else: ?>
                                                                            <option value="<?php echo ($vo["id"]); ?>"><?php echo ($vo["name"]); ?></option><?php endif; ?>

                                                                        <?php else: ?>
                                                                        <option value="<?php echo ($vo["id"]); ?>"><?php echo ($vo["name"]); ?></option><?php endif; endforeach; endif; else: echo "" ;endif; endif; ?>
                                                        </select>
                                                        
                                                    </div>
                                                </div>
                                              <div class="form-group">
                                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">面积(单位㎡) </label>
                                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                                        
                                                            <?php if($model): ?><input type="text" id="reallyArea" name="reallyArea" value="<?php echo ($model["reallyArea"]); ?>"  class="form-control col-md-7 col-xs-12">
                                                                <?php else: ?>
                                                                <input type="text" id="reallyArea" name="reallyArea"  class="form-control col-md-7 col-xs-12"><?php endif; ?>
                                                        
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">楼盘名称 </label>
                                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                                        
                                                            <?php if($model): ?><input type="text" id="floorName" name="floorName" value="<?php echo ($model["floorName"]); ?>"  class="form-control col-md-7 col-xs-12">
                                                                <?php else: ?>
                                                                <input type="text" id="floorName" name="floorName"  class="form-control col-md-7 col-xs-12"><?php endif; ?>
                                                        
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">所在城市 </label>
                                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                                        
                                                            <?php if($model): ?><input type="text" id="location" name="location" value="<?php echo ($model["location"]); ?>"  class="form-control col-md-7 col-xs-12">
                                                                <?php else: ?>
                                                                <input type="text" id="location" name="location"  class="form-control col-md-7 col-xs-12"><?php endif; ?>
                                                        
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">造价(单位万) </label>
                                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                                        
                                                            <?php if($model): ?><input type="text" id="coast" name="coast" value="<?php echo ($model["coast"]); ?>"  class="form-control col-md-7 col-xs-12">
                                                                <?php else: ?>
                                                                <input type="text" id="coast" name="coast"  class="form-control col-md-7 col-xs-12"><?php endif; ?>
                                                        
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">图片（可多选） </label>
                                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                                        <input type="file" name="url[]"  multiple class="form-control col-md-7 col-xs-12" />
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label class="control-label col-md-3 col-sm-3 col-xs-12"> </label>
                                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                                        <?php if(is_array($imgs)): foreach($imgs as $key=>$vo): ?><div class="grallery" id="img<?php echo ($vo["id"]); ?>">
                                                                <img src="http://localhost:8888/Design/Uploads/<?php echo ($vo["url"]); ?>" class="img">
                                                                <div onclick="delImg(<?php echo ($vo["id"]); ?>)"  class="swiper-close"><i class="fa fa-close"></i></div>
                                                            </div><?php endforeach; endif; ?>
                                                    </div>
                                                </div>

                                                <?php if($model): ?><input type="hidden" id="designer" name="designer" value="<?php echo ($model["designer"]); ?>">

                                                    
                                                        <?php else: ?>
                                                    
                                                    <input type="hidden" id="designer" name="designer" ><?php endif; ?>


                                                <?php if($model): ?><input type="hidden" id="state" name="state" value="<?php echo ($model["state"]); ?>">

                                                    
                                                        <?php else: ?>
                                                    
                                                    <input type="hidden" id="state" name="state" ><?php endif; ?>


                                                
                                    <div class="ln_solid"></div>
                                    <div class="form-group">
                                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                            <!--<button class="btn btn-primary" type="reset">重置</button>-->
                                            <button type="submit" class="btn btn-success">保存</button>
                                        </div>
                                    </div>


                                    <!-- /modals 装修风格 -->

                                    <div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-hidden="true" id="youModel">
                                        <div class="modal-dialog modal-sm" style="width:400px;">
                                            <div class="modal-content">

                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span>
                                                    </button>
                                                    <h4 class="modal-title" id="myModalLabel2">装修风格</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <ul id="treeDemo" class="ztree" style="height:300px;overflow:auto;"></ul>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <!-- /modals 装修风格 -->
                                </form>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
    <div class="pull-right">
        <?php echo ($system["sysVision"]); ?>
    </div>
    <div class="clearfix"></div>
</footer>        <!-- /footer content -->
    </div>
</div>

<!-- jQuery -->
<script src="/Design/Public/Vendor/gentelella/vendors/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="/Design/Public/Vendor/gentelella/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="/Design/Public/Vendor/gentelella/vendors/fastclick/lib/fastclick.js"></script>
<!-- NProgress -->
<script src="/Design/Public/Vendor/gentelella/vendors/nprogress/nprogress.js"></script>
<!-- bootstrap-progressbar -->
<script src="/Design/Public/Vendor/gentelella/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
<!-- iCheck -->
<script src="/Design/Public/Vendor/gentelella/vendors/iCheck/icheck.min.js"></script>
<!-- bootstrap-daterangepicker -->
<script src="/Design/Public/Vendor/gentelella/vendors/moment/min/moment.min.js"></script>
<script src="/Design/Public/Vendor/gentelella/vendors/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- bootstrap-wysiwyg -->
<script src="/Design/Public/Vendor/gentelella/vendors/bootstrap-wysiwyg/js/bootstrap-wysiwyg.min.js"></script>
<script src="/Design/Public/Vendor/gentelella/vendors/jquery.hotkeys/jquery.hotkeys.js"></script>
<script src="/Design/Public/Vendor/gentelella/vendors/google-code-prettify/src/prettify.js"></script>
<!-- jQuery Tags Input -->
<script src="/Design/Public/Vendor/gentelella/vendors/jquery.tagsinput/src/jquery.tagsinput.js"></script>
<!-- Switchery -->
<script src="/Design/Public/Vendor/gentelella/vendors/switchery/dist/switchery.min.js"></script>
<!-- Select2 -->
<script src="/Design/Public/Vendor/gentelella/vendors/select2/dist/js/select2.full.min.js"></script>
<!-- Parsley -->
<script src="/Design/Public/Vendor/gentelella/vendors/parsleyjs/dist/parsley.min.js"></script>
<!-- Autosize -->
<script src="/Design/Public/Vendor/gentelella/vendors/autosize/dist/autosize.min.js"></script>
<!-- jQuery autocomplete -->
<script src="/Design/Public/Vendor/gentelella/vendors/devbridge-autocomplete/dist/jquery.autocomplete.min.js"></script>
<!-- starrr -->
<script src="/Design/Public/Vendor/gentelella/vendors/starrr/dist/starrr.js"></script>
<!-- Custom Theme Scripts -->
<script src="/Design/Public/Vendor/gentelella/build/js/custom.min.js"></script>

<link rel="stylesheet" href="/Design/Public/Vendor/zTree_v3/css/zTreeStyle/zTreeStyle.css" type="text/css">
<script type="text/javascript" src="/Design/Public/Vendor/zTree_v3/js/jquery.ztree.core.js"></script>
<script>
    var setting = {
        async: {
            enable: true,
            url:ENV+"/Sysmenu/loadTree"
        },
        callback: {
            onClick:function(event, treeId, treeNode){
                $('#parentId').val(treeNode.id);
                $('#parentName').val(treeNode.name);
                $('#orderNo').val(parseInt(treeNode.count)+1);
                $('#youModel').modal('hide');
            }
        }
    };

    $(function(){
        $.fn.zTree.init($("#treeDemo"), setting);
        $('#youModel').on('show.bs.modal', function (e) {
            // 关键代码，如没将modal设置为 block，则$modala_dialog.height() 为零
            $(this).css('display', 'block');
            var modalHeight = $(window).height() / 2 - $('#youModel .modal-dialog').height() / 2;
            $(this).find('.modal-dialog').css({
                'margin-top': modalHeight
            });
        });
    });

    function delImg(id){
        var i = "img"+id;
        if (window.confirm("确定删除？")){
            $.post(ENV + '/Exbuildimgs/delete',{id:id},function(result){
                if(result.success == true || result.success == 'true'){
                    $("#"+i).remove();
                }else{
                    alert("删除失败！");
                }
            },'json');
        }
    }
</script>
</body>
</html>