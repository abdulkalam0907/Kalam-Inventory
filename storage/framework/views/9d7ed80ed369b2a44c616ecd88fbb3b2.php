<!doctype html>
<html lang="en">

    <head>
        
        <meta charset="utf-8" />
        <title>Dashboard | Easy Inventory Shop </title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="Themesdesign" name="author" />

        <!-- App favicon -->
        <link rel="shortcut icon" href="<?php echo e(asset('backend/assets/images/favicon.ico')); ?>">
 
 <!-- Select 2 -->
<link href="<?php echo e(asset('backend/assets/libs/select2/css/select2.min.css')); ?>" rel="stylesheet" type="text/css">
  <!-- end Select 2  -->


        <!-- jquery.vectormap css -->
        <link href="<?php echo e(asset('backend/assets/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.css')); ?>" rel="stylesheet" type="text/css" />

        <!-- DataTables -->
        <link href="<?php echo e(asset('backend/assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css')); ?>" rel="stylesheet" type="text/css" />

        <!-- Responsive datatable examples -->
        <link href="<?php echo e(asset('backend/assets/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css')); ?>" rel="stylesheet" type="text/css" />  

        <!-- Bootstrap Css -->
        <link href="<?php echo e(asset('backend/assets/css/bootstrap.min.css')); ?>" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="<?php echo e(asset('backend/assets/css/icons.min.css')); ?>" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="<?php echo e(asset('backend/assets/css/app.min.css')); ?>" id="app-style" rel="stylesheet" type="text/css" />

        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" >

    </head>

    <body data-topbar="dark">
    
    <!-- <body data-layout="horizontal" data-topbar="dark"> -->

        <!-- Begin page -->
        <div id="layout-wrapper">

            
          <?php echo $__env->make('admin.body.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

            <!-- ========== Left Sidebar Start ========== -->
           <?php echo $__env->make('admin.body.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <!-- Left Sidebar End -->

            

            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="main-content">

               <?php echo $__env->yieldContent('admin'); ?>
                <!-- End Page-content -->

                <?php echo $__env->make('admin.body.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                
                
            </div>
            <!-- end main content-->

        </div>
        <!-- END layout-wrapper -->

        <!-- Right Sidebar -->
        
        <!-- /Right-bar -->

        <!-- Right bar overlay-->
        <div class="rightbar-overlay"></div>

        <!-- JAVASCRIPT -->
        <script src="<?php echo e(asset('backend/assets/libs/jquery/jquery.min.js')); ?>"></script>
        <script src="<?php echo e(asset('backend/assets/libs/bootstrap/js/bootstrap.bundle.min.js')); ?>"></script>
        <script src="<?php echo e(asset('backend/assets/libs/metismenu/metisMenu.min.js')); ?>"></script>
        <script src="<?php echo e(asset('backend/assets/libs/simplebar/simplebar.min.js')); ?>"></script>
        <script src="<?php echo e(asset('backend/assets/libs/node-waves/waves.min.js')); ?>"></script>

        
        <!-- apexcharts -->
        <script src="<?php echo e(asset('backend/assets/libs/apexcharts/apexcharts.min.js')); ?>"></script>

        <!-- jquery.vectormap map -->
        <script src="<?php echo e(asset('backend/assets/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.min.js')); ?>"></script>
        <script src="<?php echo e(asset('backend/assets/libs/admin-resources/jquery.vectormap/maps/jquery-jvectormap-us-merc-en.js')); ?>"></script>

        <!-- Required datatable js -->
        <script src="<?php echo e(asset('backend/assets/libs/datatables.net/js/jquery.dataTables.min.js')); ?>"></script>
        <script src="<?php echo e(asset('backend/assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js')); ?>"></script>
        
        <!-- Responsive examples -->
        <script src="<?php echo e(asset('backend/assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js')); ?>"></script>
        <script src="<?php echo e(asset('backend/assets/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js')); ?>"></script>

        <script src="<?php echo e(asset('backend/assets/js/pages/dashboard.init.js')); ?>"></script>

        <!-- App js -->
        <script src="<?php echo e(asset('backend/assets/js/app.js')); ?>"></script>

        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

<script>
 <?php if(Session::has('message')): ?>
 var type = "<?php echo e(Session::get('alert-type','info')); ?>"
 switch(type){
    case 'info':
    toastr.info(" <?php echo e(Session::get('message')); ?> ");
    break;
    case 'success':
    toastr.success(" <?php echo e(Session::get('message')); ?> ");
    break;
    case 'warning':
    toastr.warning(" <?php echo e(Session::get('message')); ?> ");
    break;
    case 'error':
    toastr.error(" <?php echo e(Session::get('message')); ?> ");
    break; 
 }
 <?php endif; ?> 
</script>

 <!-- Required datatable js -->
        <script src="<?php echo e(asset('backend/assets/libs/datatables.net/js/jquery.dataTables.min.js')); ?>"></script>
        <script src="<?php echo e(asset('backend/assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js')); ?>"></script>

            <!-- Datatable init js -->
        <script src="<?php echo e(asset('backend/assets/js/pages/datatables.init.js')); ?>"></script>

<script src="<?php echo e(asset('backend/assets/js/validate.min.js')); ?>"></script>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

 <script src="<?php echo e(asset('backend/assets/js/code.js')); ?>"></script>

 
  <script src="<?php echo e(asset('backend/assets/js/handlebars.js')); ?>"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/notify/0.4.2/notify.min.js" ></script>

<!--  For Select2 -->
<script src="<?php echo e(asset('backend/assets/libs/select2/js/select2.min.js')); ?>"></script>
<script src="<?php echo e(asset('backend/assets/js/pages/form-advanced.init.js')); ?>"></script>
<!-- end  For Select2 -->

    </body>

</html><?php /**PATH C:\xampp\htdocs\Project2\m-supplies\resources\views/admin/admin_master.blade.php ENDPATH**/ ?>