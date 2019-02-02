<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title><?php echo e(config('app.name', 'Laravel')); ?></title>
    <!-- Scripts -->
    
    <!-- Styles -->
    <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('css/style.css')); ?>" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo e(asset('assets/vendor_components/datatable/datatables.min.css')); ?>">
                
                <!-- Bootstrap extend-->
<link rel="stylesheet" href="<?php echo e(asset('css/bootstrap-extend.css')); ?>">

<!-- theme style -->
    <link rel="stylesheet" href="<?php echo e(asset('css/master_style.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/dropify/dist/css/dropify.css')); ?>">
    <!-- Superieur Admin skins -->
    <link rel="stylesheet" href="<?php echo e(asset('css/skins/_all-skins.css')); ?>">
    <!-- jQuery 3 -->
    <script src="<?php echo e(asset('js/jquery.min.js')); ?>"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="<?php echo e(asset('assets/vendor_components/jquery-ui/jquery-ui.js')); ?>"></script>

    <script>
        $.widget.bridge('uibutton', $.ui.button);
    </script>
    <!-- This is data table -->
    <script src="<?php echo e(asset('js/main.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/vendor_components/datatable/datatables.min.js')); ?>"></script>
    <style>
        .table-bordered td, th{
            text-align: center;
        }
        .table-bordered{
            margin-top: 10px;
        }
    </style>
</head>
<body class="hold-transition skin-blue sidebar-mini">
<?php if(Auth::user()): ?>
<div class="wrapper">
    <header class="main-header">
        <!-- Header Navbar -->
        <nav class="navbar navbar-static-top">
            <!-- Sidebar toggle button-->
            <div>
                <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                    <span class="sr-only">Toggle navigation</span>
                </a>
            </div>
        </nav>
    </header>
    <aside class="main-sidebar">
        <!-- sidebar-->
        <section class="sidebar">

            <!-- sidebar menu-->
            <ul class="sidebar-menu" data-widget="tree">
                <li class="user-profile treeview">
                    <a href="index.html">
                        <span>
                            <span class="d-block font-weight-600 font-size-16"><?php echo e(Auth::user()->name); ?></span>
                            <span class="email-id"><?php echo e(Auth::user()->email); ?></span>
                        </span>
                        <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="javascript:void()"><i class="fa fa-user mr-5"></i>My Profile </a></li>
                        <li><a href="javascript:void()"><i class="fa fa-money mr-5"></i>My Balance</a></li>
                        <li><a href="javascript:void()"><i class="fa fa-envelope-open mr-5"></i>Inbox</a></li>
                        <li><a href="javascript:void()"><i class="fa fa-cog mr-5"></i>Account Setting</a></li>
                        <li><a href="/logout"><i class="fa fa-power-off mr-5"></i>Logout</a></li>
                    </ul>
                </li>

                <li>
                    <a href="/admin/home">
                        <i class="mdi mdi-food-fork-drink"></i>
                        <span>Գլխավոր</span>
                    </a>
                </li>

                <li>
                    <a href="/admin/about">
                        <i class="mdi mdi-credit-card-setting"></i>
                        <span>Մեր Մասին</span>
                    </a>
                </li>

                <li>
                    <a href="/admin/news">
                        <i class="mdi mdi-newspaper"></i>
                        <span>Նորություններ</span>
                    </a>
                </li>

                <li>
                    <a href="/admin/type">
                        <i class="mdi mdi-format-list-bulleted-type"></i>
                        <span>Գովազդի Տեսակներ</span>
                    </a>
                </li>

                <li>
                    <a href="/admin/partner">
                        <i class="mdi mdi-format-list-bulleted-type"></i>
                        <span>Գործընկերներ</span>
                    </a>
                </li>

                <li>
                    <a href="/admin/images">
                        <i class="mdi mdi-image"></i>
                        <span>Նկարներ</span>
                    </a>
                </li>
            </ul>
        </section>
    </aside>
    <?php endif; ?>
    <div class="content-wrapper">
        <div class="content-header">
            <?php echo $__env->yieldContent('content'); ?>
        </div>
    </div>
</div>

<div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true" id="mi-modal">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Are You Sure You Want to Delete Current Record ?</h4>
            </div>
            <div class="modal-footer">
                <form method="post" action="" style="display: inline-block">
                    <?php echo method_field("DELETE"); ?>
                    <?php echo e(csrf_field()); ?>

                    <button class="btn btn-danger" id="modal-btn-si">Yes</button>
                </form>
                <button type="button" data-dismiss="modal" aria-label="Close" class="btn btn-default" id="modal-btn-no">No</button>
            </div>
        </div>
    </div>
</div>

<div id="myModal" class="modal fade" role="dialog">
    <div class="modal-dialog modal-lg">



    </div>
</div>


</body>

<!-- popper -->
<script src="<?php echo e(asset('assets/vendor_components/popper/dist/popper.min.js')); ?>"></script>

<!-- date-range-picker -->
<script src="<?php echo e(asset('assets/vendor_components/moment/min/moment.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/vendor_components/bootstrap-daterangepicker/daterangepicker.js')); ?>"></script>

<!-- Bootstrap 4.0-->
<script src="<?php echo e(asset('assets/vendor_components/bootstrap/dist/js/bootstrap.js')); ?>"></script>

<!-- Slimscroll -->
<script src="<?php echo e(asset('assets/vendor_components/jquery-slimscroll/jquery.slimscroll.js')); ?>"></script>

<!-- FastClick -->
<script src="<?php echo e(asset('assets/vendor_components/fastclick/lib/fastclick.js')); ?>"></script>

<!-- Superieur Admin App -->
<script src="<?php echo e(asset('js/template.js')); ?>"></script>

                
<script src="<?php echo e(asset('assets/dropify/dist/js/dropify.js')); ?>"></script>
<script>
    function getAnswer(){
        $("#mi-modal").modal('show');
        return false;
    }

    $("#modal-btn-si").on("click", function(){
        return true;
        $("#mi-modal").modal('hide');
    });

    $('.dropify').dropify();
</script>
</html>
