
<?php $__env->startSection('admin'); ?>

 <div class="page-content">
                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                    <h4 class="mb-sm-0">Stock Report</h4>

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);"> </a></li>
                                            <li class="breadcrumb-item active">Stock Report</li>
                                        </ol>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">

    <div class="row">
        <div class="col-12">
            <div class="invoice-title">

                <h3>
                    <img src="<?php echo e(asset('backend/assets/images/logo-sm.png')); ?>" alt="logo" height="24"/> Kalams Merelli Supplies
                </h3>
            </div>
            <hr>

            <div class="row">
                <div class="col-6 mt-4">
                    <address>
                        <strong>Kalams Merelli Supplies:</strong><br>
                        Leeds Beckett University<br>
                        support@merellisupplies.com
                    </address>
                </div>
                <div class="col-6 mt-4 text-end">
                    <address>

                    </address>
                </div>
            </div>
        </div>
    </div>



    <div class="row">
        <div class="col-12">
            <div>
                <div class="p-2">

                </div>

            </div>

        </div>
    </div> <!-- end row -->





   <div class="row">
        <div class="col-12">
            <div>
                <div class="p-2">

                </div>
                <div class="">
<div class="table-responsive">
    <table class="table">
        <thead>
        <tr>
            <td><strong>Sl </strong></td>
            <td class="text-center"><strong>Supplier Name </strong></td>
            <td class="text-center"><strong>Unit  </strong>
            </td>
            <td class="text-center"><strong>Category</strong>
            </td>
            <td class="text-center"><strong>Product Name</strong>
            </td>
            <td class="text-center"><strong>Stock  </strong>
            </td>


        </tr>
        </thead>
        <tbody>
        <!-- foreach ($order->lineItems as $line) or some such thing here -->


        <?php $__currentLoopData = $allData; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
         <td class="text-center"> <?php echo e($key+1); ?> </td> 
         <td class="text-center"> <?php echo e($item['supplier']['name']); ?> </td> 
         <td class="text-center"> <?php echo e($item['unit']['name']); ?> </td> 
         <td class="text-center"> <?php echo e($item['category']['name']); ?> </td> 
         <td class="text-center"> <?php echo e($item->name); ?> </td> 
         <td class="text-center"> <?php echo e($item->quantity); ?> </td> 


        </tr>

        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 


                            </tbody>
                        </table>
                    </div>


        <?php
        $date = new DateTime('now', new DateTimeZone('Asia/Dhaka')); 
        ?>         
        <i>Printing Time : <?php echo e($date->format('F j, Y, g:i a')); ?></i>   

                    <div class="d-print-none">
                        <div class="float-end">
                            <a href="javascript:window.print()" class="btn btn-success waves-effect waves-light"><i class="fa fa-print"></i></a>
                            <a href="#" class="btn btn-primary waves-effect waves-light ms-2">Download</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div> <!-- end row -->






</div>
</div>
                            </div> <!-- end col -->
                        </div> <!-- end row -->

                    </div> <!-- container-fluid -->
                </div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.admin_master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Project2\m-supplies\resources\views/backend/pdf/stock_report_pdf.blade.php ENDPATH**/ ?>