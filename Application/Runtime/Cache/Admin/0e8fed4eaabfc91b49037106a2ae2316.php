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
    <!-- bootstrap-wysiwyg -->
    <link href="<?php echo ($ui); ?>/vendors/google-code-prettify/bin/prettify.min.css" rel="stylesheet">
    <!-- Select2 -->
    <link href="<?php echo ($ui); ?>/vendors/select2/dist/css/select2.min.css" rel="stylesheet">
    <!-- Switchery -->
    <link href="<?php echo ($ui); ?>/vendors/switchery/dist/switchery.min.css" rel="stylesheet">
    <!-- starrr -->
    <link href="<?php echo ($ui); ?>/vendors/starrr/dist/starrr.css" rel="stylesheet">
    <!-- bootstrap-daterangepicker -->
    <link href="<?php echo ($ui); ?>/vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

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
                <div class="clearfix"></div>
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="x_panel">
                            <div class="x_title">
                                <h2><?php echo ($modalName); ?> <small><?php echo ($modalName); ?></small></h2>

                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
                                <br />
                                <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" action="<?php echo ($app); ?>/<?php echo ($tableUC); ?>/save">


                                    <?php if(is_array($fields)): $i = 0; $__LIST__ = $fields;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i; if($vo["isPk"] == 1 ): ?>
                                                <if condition="$model">
                                            
                                                    <input type="hidden" id="<?php echo ($vo["colName"]); ?>" name="<?php echo ($vo["colName"]); ?>" value="{$model.<?php echo ($vo["colName"]); ?>}">

                                                    
                                                    <else/>
                                                    
                                                    <input type="hidden" id="<?php echo ($vo["colName"]); ?>" name="<?php echo ($vo["colName"]); ?>" >
                                                
                                                </if>

                                         <?php else: ?>
                                            <?php if($vo["isHidden"] == 1): ?>
                                                    <if condition="$model">
                                                    
                                                    <input type="hidden" id="<?php echo ($vo["colName"]); ?>" name="<?php echo ($vo["colName"]); ?>" value="{$model.<?php echo ($vo["colName"]); ?>}">

                                                    
                                                        <else/>
                                                    
                                                    <input type="hidden" id="<?php echo ($vo["colName"]); ?>" name="<?php echo ($vo["colName"]); ?>" >
                                                    
                                                </if>

                                                <?php else: ?>
                                                <div class="form-group">
                                                    <label class="control-label col-md-3 col-sm-3 col-xs-12"><?php echo ($vo["remark"]); ?> </label>
                                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                                        
                                                            <if condition="$model">
                                                                <input type="text" id="<?php echo ($vo["colName"]); ?>" name="<?php echo ($vo["colName"]); ?>" value="{$model.<?php echo ($vo["colName"]); ?>}"  required="required" class="form-control col-md-7 col-xs-12">
                                                                <else />
                                                                <input type="text" id="<?php echo ($vo["colName"]); ?>" name="<?php echo ($vo["colName"]); ?>"  required="required" class="form-control col-md-7 col-xs-12">
                                                            </if>
                                                        
                                                    </div>
                                                </div><?php endif; endif; endforeach; endif; else: echo "" ;endif; ?>

                                    <div class="ln_solid"></div>
                                    <div class="form-group">
                                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                            <!--<button class="btn btn-primary" type="reset">重置</button>-->
                                            <button type="submit" class="btn btn-success">保存</button>
                                        </div>
                                    </div>

                                </form>
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
<!-- bootstrap-progressbar -->
<script src="<?php echo ($ui); ?>/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
<!-- iCheck -->
<script src="<?php echo ($ui); ?>/vendors/iCheck/icheck.min.js"></script>
<!-- bootstrap-daterangepicker -->
<script src="<?php echo ($ui); ?>/vendors/moment/min/moment.min.js"></script>
<script src="<?php echo ($ui); ?>/vendors/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- bootstrap-wysiwyg -->
<script src="<?php echo ($ui); ?>/vendors/bootstrap-wysiwyg/js/bootstrap-wysiwyg.min.js"></script>
<script src="<?php echo ($ui); ?>/vendors/jquery.hotkeys/jquery.hotkeys.js"></script>
<script src="<?php echo ($ui); ?>/vendors/google-code-prettify/src/prettify.js"></script>
<!-- jQuery Tags Input -->
<script src="<?php echo ($ui); ?>/vendors/jquery.tagsinput/src/jquery.tagsinput.js"></script>
<!-- Switchery -->
<script src="<?php echo ($ui); ?>/vendors/switchery/dist/switchery.min.js"></script>
<!-- Select2 -->
<script src="<?php echo ($ui); ?>/vendors/select2/dist/js/select2.full.min.js"></script>
<!-- Parsley -->
<script src="<?php echo ($ui); ?>/vendors/parsleyjs/dist/parsley.min.js"></script>
<!-- Autosize -->
<script src="<?php echo ($ui); ?>/vendors/autosize/dist/autosize.min.js"></script>
<!-- jQuery autocomplete -->
<script src="<?php echo ($ui); ?>/vendors/devbridge-autocomplete/dist/jquery.autocomplete.min.js"></script>
<!-- starrr -->
<script src="<?php echo ($ui); ?>/vendors/starrr/dist/starrr.js"></script>
<!-- Custom Theme Scripts -->
<script src="<?php echo ($ui); ?>/build/js/custom.min.js"></script>

</body>
</html>