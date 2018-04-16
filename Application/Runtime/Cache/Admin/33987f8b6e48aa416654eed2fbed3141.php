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
    <!-- Datatables -->
    <link href="/Design/Public/Vendor/gentelella/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="/Design/Public/Vendor/gentelella/vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">
    <link href="/Design/Public/Vendor/gentelella/vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css" rel="stylesheet">
    <link href="/Design/Public/Vendor/gentelella/vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">
    <link href="/Design/Public/Vendor/gentelella/vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="/Design/Public/Vendor/gentelella/build/css/custom.min.css" rel="stylesheet">

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


                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="x_panel">
                            <div class="x_title">
                                <h2>装修效果图 <small>列表</small></h2>
                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
                                <table id="datatable1" class="table table-striped table-bordered">
                                    <thead>
                                    <tr>
                                        <th>名称</th><th>装修风格</th><th>户型名称</th><th>空间</th>
                                        <th></th>
                                    </tr>
                                    </thead>

                                    <tbody>
                                    </tbody>
                                </table>
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
<!-- iCheck -->
<script src="/Design/Public/Vendor/gentelella/vendors/iCheck/icheck.min.js"></script>
<!-- Datatables -->
<script src="/Design/Public/Vendor/gentelella/vendors/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="/Design/Public/Vendor/gentelella/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<script src="/Design/Public/Vendor/gentelella/vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
<script src="/Design/Public/Vendor/gentelella/vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
<script src="/Design/Public/Vendor/gentelella/vendors/datatables.net-buttons/js/buttons.flash.min.js"></script>
<script src="/Design/Public/Vendor/gentelella/vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
<script src="/Design/Public/Vendor/gentelella/vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
<script src="/Design/Public/Vendor/gentelella/vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
<script src="/Design/Public/Vendor/gentelella/vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
<script src="/Design/Public/Vendor/gentelella/vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
<script src="/Design/Public/Vendor/gentelella/vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
<script src="/Design/Public/Vendor/gentelella/vendors/datatables.net-scroller/js/dataTables.scroller.min.js"></script>
<script src="/Design/Public/Vendor/gentelella/vendors/jszip/dist/jszip.min.js"></script>
<script src="/Design/Public/Vendor/gentelella/vendors/pdfmake/build/pdfmake.min.js"></script>
<script src="/Design/Public/Vendor/gentelella/vendors/pdfmake/build/vfs_fonts.js"></script>

<!-- Custom Theme Scripts -->
<script src="/Design/Public/Vendor/gentelella/build/js/custom.min.js"></script>
<script src="/Design/Public/Admin//js/effect.js"></script>

</body>
</html>