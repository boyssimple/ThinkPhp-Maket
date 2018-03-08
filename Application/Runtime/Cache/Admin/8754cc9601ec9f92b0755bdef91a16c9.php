<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Gentelella Alela! | </title>

    <!-- Bootstrap -->
    <link href="/Supermaket/Public/Vendor/gentelella/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="/Supermaket/Public/Vendor/gentelella/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="/Supermaket/Public/Vendor/gentelella/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="/Supermaket/Public/Vendor/gentelella/vendors/iCheck/skins/flat/green.css" rel="stylesheet">
    <!-- bootstrap-wysiwyg -->
    <link href="/Supermaket/Public/Vendor/gentelella/vendors/google-code-prettify/bin/prettify.min.css" rel="stylesheet">
    <!-- Select2 -->
    <link href="/Supermaket/Public/Vendor/gentelella/vendors/select2/dist/css/select2.min.css" rel="stylesheet">
    <!-- Switchery -->
    <link href="/Supermaket/Public/Vendor/gentelella/vendors/switchery/dist/switchery.min.css" rel="stylesheet">
    <!-- starrr -->
    <link href="/Supermaket/Public/Vendor/gentelella/vendors/starrr/dist/starrr.css" rel="stylesheet">
    <!-- bootstrap-daterangepicker -->
    <link href="/Supermaket/Public/Vendor/gentelella/vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="/Supermaket/Public/Vendor/gentelella/build/css/custom.min.css" rel="stylesheet">

    <script type="text/javascript">
        var ENV = '/Supermaket/admin.php';
    </script>
</head>

<body class="nav-md">
<div class="container body">
    <div class="main_container">

        <div class="col-md-3 left_col">
    <div class="left_col scroll-view">
        <div class="navbar nav_title" style="border: 0;">
            <a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span>Gentelella Alela!</span></a>
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
                                    <?php if(is_array($m["children"])): $i = 0; $__LIST__ = $m["children"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$ms): $mod = ($i % 2 );++$i;?><li><a  <?php if( $ms["menuUrl"] != '' ): ?>href="/Supermaket/admin.php/<?php echo ($ms["menuUrl"]); ?>"<?php endif; ?> ><?php echo ($ms["name"]); if( $ms["children"] > 0 ): ?><span class="fa fa-chevron-down"></span><?php endif; ?></a>
                                            <?php if( $ms["children"] > 0 ): ?><ul class="nav child_menu">
                                                    <?php if(is_array($ms["children"])): $i = 0; $__LIST__ = $ms["children"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$mss): $mod = ($i % 2 );++$i;?><li class="sub_menu"><a href="/Supermaket/admin.php/<?php echo ($mss["menuUrl"]); ?>"><?php echo ($mss["name"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
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
                                <h2>添加资源 <small>菜单资源</small></h2>

                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
                                <br />
                                <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" action="/Supermaket/admin.php/Sysmenu/save">


                                                                                <?php if($model): ?><input type="hidden" id="id" name="id" value="<?php echo ($model["id"]); ?>">

                                                <?php else: ?>

                                                <input type="hidden" id="id" name="id" ><?php endif; ?>


                                            <div class="form-group">
                                                <label class="control-label col-md-3 col-sm-3 col-xs-12" >资源名称 </label>
                                                <div class="col-md-6 col-sm-6 col-xs-12">
                                                    
                                                        <?php if($model): ?><input type="text" id="name" name="name" value="<?php echo ($model["name"]); ?>"  required="required" class="form-control col-md-7 col-xs-12">
                                                            <?php else: ?>
                                                            <input type="text" id="name" name="name"  required="required" class="form-control col-md-7 col-xs-12"><?php endif; ?>
                                                    
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="control-label col-md-3 col-sm-3 col-xs-12">资源路径 </label>
                                                <div class="col-md-6 col-sm-6 col-xs-12">
                                                    
                                                        <?php if($model): ?><input type="text" id="menuUrl" name="menuUrl" value="<?php echo ($model["menuUrl"]); ?>"  class="form-control col-md-7 col-xs-12">
                                                            <?php else: ?>
                                                            <input type="text" id="menuUrl" name="menuUrl" class="form-control col-md-7 col-xs-12"><?php endif; ?>
                                                    
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-md-3 col-sm-3 col-xs-12">删除否 </label>
                                                <div class="col-md-6 col-sm-6 col-xs-12">
                                                    
                                                        <?php if($model): if($model["isDelete"] == 1 ): ?><input type="checkbox" id="isDelete" name="isDelete" class="flat" checked="checked">
                                                                <?php else: ?>
                                                                <input type="checkbox" id="isDelete" name="isDelete" class="flat"><?php endif; ?>
                                                            <?php else: ?>
                                                            <div class="checkbox">
                                                                <input type="checkbox" id="isDelete" name="isDelete" class="flat">
                                                            </div><?php endif; ?>
                                                    
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-md-3 col-sm-3 col-xs-12" >描述 </label>
                                                <div class="col-md-6 col-sm-6 col-xs-12">
                                                    
                                                        <?php if($model): ?><textarea class="form-control" id="remark" name="remark" value="<?php echo ($model["remark"]); ?>" rows="3" placeholder='添加描述'></textarea>
                                                            <?php else: ?>
                                                            <textarea class="form-control" id="remark" name="remark" rows="3" placeholder='添加描述'></textarea><?php endif; ?>
                                                    
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-md-3 col-sm-3 col-xs-12">上级资源 </label>
                                                <div class="col-md-6 col-sm-6 col-xs-12">
                                                    
                                                        <?php if($model): ?><div class="input-group">
                                                                <input type="hidden" id="parentId" name="parentId" value="<?php echo ($model["parentId"]); ?>">
                                                                <input type="text" class="form-control" id="parentName" name="parentName" value="<?php echo ($model["parentName"]); ?>"  readonly="true">
                                                                <span class="input-group-btn">
                                                                      <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-sm">选择</button>
                                                                </span>
                                                            </div>
                                                        <?php else: ?>
                                                            <div class="input-group">
                                                                <input type="hidden" id="parentId" name="parentId">
                                                                <input type="text" class="form-control" id="parentName" name="parentName" readonly="true">
                                                                <span class="input-group-btn">
                                                                      <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-sm">选择</button>
                                                                </span>
                                                            </div><?php endif; ?>
                                                    
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="control-label col-md-3 col-sm-3 col-xs-12">排序号 </label>
                                                <div class="col-md-6 col-sm-6 col-xs-12">

                                                    <?php if($model): ?><input type="number" id="orderNo" name="orderNo" value="<?php echo ($model["orderNo"]); ?>"  data-min="1" class="form-control col-md-7 col-xs-12">
                                                        <?php else: ?>
                                                        <input type="number" id="orderNo" name="orderNo" value="1" data-min="1" class="form-control col-md-7 col-xs-12"><?php endif; ?>

                                                </div>
                                            </div>
                                    <div class="ln_solid"></div>
                                    <div class="form-group">
                                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                            <button class="btn btn-primary" type="reset">重置</button>
                                            <button type="submit" class="btn btn-success">保存</button>
                                        </div>

                                    </div>



                                    <!-- /modals -->

                                    <div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-hidden="true" id="youModel">
                                         <div class="modal-dialog modal-sm" style="width:400px;">
                                             <div class="modal-content">

                                                 <div class="modal-header">
                                                     <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span>
                                                     </button>
                                                     <h4 class="modal-title" id="myModalLabel2">菜单资源</h4>
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
                                    <!-- /modals -->


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
                Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
            </div>
            <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
    </div>
</div>

<!-- jQuery -->
<script src="/Supermaket/Public/Vendor/gentelella/vendors/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="/Supermaket/Public/Vendor/gentelella/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="/Supermaket/Public/Vendor/gentelella/vendors/fastclick/lib/fastclick.js"></script>
<!-- NProgress -->
<script src="/Supermaket/Public/Vendor/gentelella/vendors/nprogress/nprogress.js"></script>
<!-- bootstrap-progressbar -->
<script src="/Supermaket/Public/Vendor/gentelella/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
<!-- iCheck -->
<script src="/Supermaket/Public/Vendor/gentelella/vendors/iCheck/icheck.min.js"></script>
<!-- bootstrap-daterangepicker -->
<script src="/Supermaket/Public/Vendor/gentelella/vendors/moment/min/moment.min.js"></script>
<script src="/Supermaket/Public/Vendor/gentelella/vendors/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- bootstrap-wysiwyg -->
<script src="/Supermaket/Public/Vendor/gentelella/vendors/bootstrap-wysiwyg/js/bootstrap-wysiwyg.min.js"></script>
<script src="/Supermaket/Public/Vendor/gentelella/vendors/jquery.hotkeys/jquery.hotkeys.js"></script>
<script src="/Supermaket/Public/Vendor/gentelella/vendors/google-code-prettify/src/prettify.js"></script>
<!-- jQuery Tags Input -->
<script src="/Supermaket/Public/Vendor/gentelella/vendors/jquery.tagsinput/src/jquery.tagsinput.js"></script>
<!-- Switchery -->
<script src="/Supermaket/Public/Vendor/gentelella/vendors/switchery/dist/switchery.min.js"></script>
<!-- Select2 -->
<script src="/Supermaket/Public/Vendor/gentelella/vendors/select2/dist/js/select2.full.min.js"></script>
<!-- Parsley -->
<script src="/Supermaket/Public/Vendor/gentelella/vendors/parsleyjs/dist/parsley.min.js"></script>
<!-- Autosize -->
<script src="/Supermaket/Public/Vendor/gentelella/vendors/autosize/dist/autosize.min.js"></script>
<!-- jQuery autocomplete -->
<script src="/Supermaket/Public/Vendor/gentelella/vendors/devbridge-autocomplete/dist/jquery.autocomplete.min.js"></script>
<!-- starrr -->
<script src="/Supermaket/Public/Vendor/gentelella/vendors/starrr/dist/starrr.js"></script>
<!-- Custom Theme Scripts -->
<script src="/Supermaket/Public/Vendor/gentelella/build/js/custom.min.js"></script>



<link rel="stylesheet" href="/Supermaket/Public/Vendor//zTree_v3/css/zTreeStyle/zTreeStyle.css" type="text/css">
<script type="text/javascript" src="/Supermaket/Public/Vendor//zTree_v3/js/jquery.ztree.core.js"></script>
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

    var zNodes =[
        { name:"父节点1 - 展开", open:true,
            children: [
                { name:"父节点11 - 折叠",
                    children: [
                        { name:"叶子节点111"},
                        { name:"叶子节点112"},
                        { name:"叶子节点113"},
                        { name:"叶子节点114"}
                    ]},
                { name:"父节点12 - 折叠",
                    children: [
                        { name:"叶子节点121"},
                        { name:"叶子节点122"},
                        { name:"叶子节点123"},
                        { name:"叶子节点124"}
                    ]},
                { name:"父节点13 - 没有子节点", isParent:true}
            ]},
        { name:"父节点2 - 折叠",
            children: [
                { name:"父节点21 - 展开", open:true,
                    children: [
                        { name:"叶子节点211"},
                        { name:"叶子节点212"},
                        { name:"叶子节点213"},
                        { name:"叶子节点214"}
                    ]},
                { name:"父节点22 - 折叠",
                    children: [
                        { name:"叶子节点221"},
                        { name:"叶子节点222"},
                        { name:"叶子节点223"},
                        { name:"叶子节点224"}
                    ]},
                { name:"父节点23 - 折叠",
                    children: [
                        { name:"叶子节点231"},
                        { name:"叶子节点232"},
                        { name:"叶子节点233"},
                        { name:"叶子节点234"}
                    ]}
            ]},
        { name:"父节点3 - 没有子节点", isParent:true}

    ];

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
</script>

</body>
</html>