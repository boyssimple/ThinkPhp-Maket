<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="{$system.lang}">
<head>
    <?php echo ($header); ?>
    <!-- Bootstrap -->
    <link href="<?php echo ($ui); ?>/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?php echo ($ui); ?>/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="<?php echo ($ui); ?>/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="<?php echo ($ui); ?>/vendors/iCheck/skins/flat/green.css" rel="stylesheet">
    <!-- Datatables -->
    <link href="<?php echo ($ui); ?>/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo ($ui); ?>/vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo ($ui); ?>/vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo ($ui); ?>/vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo ($ui); ?>/vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="<?php echo ($ui); ?>/build/css/custom.min.css" rel="stylesheet">

    <script type="text/javascript">
        var ENV = '<?php echo ($app); ?>';
    </script>

</head>

<body class="nav-md">
<div class="container body">
    <div class="main_container">
        <?php echo ($lefttop); ?>

        <!-- page content -->
        <div class="right_col" role="main">
            <div class="">


                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="x_panel">
                            <div class="x_title">
                                <h2><?php echo ($modalName); ?> <small>列表</small></h2>
                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
                                <table id="datatable1" class="table table-striped table-bordered">
                                    <thead>
                                    <tr>
                                        <?php if(is_array($fields)): $i = 0; $__LIST__ = $fields;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i; if($vo["isHidden"] != 1): ?><th><?php echo ($vo["remark"]); ?></th><?php endif; endforeach; endif; else: echo "" ;endif; ?>

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
        <?php echo ($footer); ?>
        <!-- /footer content -->
    </div>
</div>

<!-- jQuery -->
<script src="<?php echo ($ui); ?>/vendors/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="<?php echo ($ui); ?>/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="<?php echo ($ui); ?>/vendors/fastclick/lib/fastclick.js"></script>
<!-- NProgress -->
<script src="<?php echo ($ui); ?>/vendors/nprogress/nprogress.js"></script>
<!-- iCheck -->
<script src="<?php echo ($ui); ?>/vendors/iCheck/icheck.min.js"></script>
<!-- Datatables -->
<script src="<?php echo ($ui); ?>/vendors/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="<?php echo ($ui); ?>/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<script src="<?php echo ($ui); ?>/vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
<script src="<?php echo ($ui); ?>/vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
<script src="<?php echo ($ui); ?>/vendors/datatables.net-buttons/js/buttons.flash.min.js"></script>
<script src="<?php echo ($ui); ?>/vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
<script src="<?php echo ($ui); ?>/vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
<script src="<?php echo ($ui); ?>/vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
<script src="<?php echo ($ui); ?>/vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
<script src="<?php echo ($ui); ?>/vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
<script src="<?php echo ($ui); ?>/vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
<script src="<?php echo ($ui); ?>/vendors/datatables.net-scroller/js/dataTables.scroller.min.js"></script>
<script src="<?php echo ($ui); ?>/vendors/jszip/dist/jszip.min.js"></script>
<script src="<?php echo ($ui); ?>/vendors/pdfmake/build/pdfmake.min.js"></script>
<script src="<?php echo ($ui); ?>/vendors/pdfmake/build/vfs_fonts.js"></script>

<!-- Custom Theme Scripts -->
<script src="<?php echo ($ui); ?>/build/js/custom.min.js"></script>
<script src="<?php echo ($admin); ?>/js/<?php echo ($tableLC); ?>.js"></script>

</body>
</html>