
<?php $__env->startSection('admin'); ?>

 <div class="page-content">
                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                    <h4 class="mb-sm-0">Daily Purchase Report</h4>

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);"> </a></li>
                                            <li class="breadcrumb-item active">Daily Purchase Report</li>
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
                    <h3 class="font-size-16"><strong>Daily Purchase Report 
    <span class="btn btn-info"> <?php echo e(date('d-m-Y',strtotime($start_date))); ?> </span> -
     <span class="btn btn-success"> <?php echo e(date('d-m-Y',strtotime($end_date))); ?> </span>
                    </strong></h3>
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
            <td class="text-center"><strong>Purchase No </strong></td>
            <td class="text-center"><strong>Date  </strong>
            </td>
            <td class="text-center"><strong>Product Name</strong>
            </td>
            <td class="text-center"><strong>Quantity</strong>
            </td>
            <td class="text-center"><strong>Unit Price  </strong>
            </td>
            <td class="text-center"><strong>Total Price  </strong>
            </td>
            
            
        </tr>
        </thead>
        <tbody>
        <!-- foreach ($order->lineItems as $line) or some such thing here -->
        
      <?php
        $total_sum = '0';
        ?>
        <?php $__currentLoopData = $allData; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
           <td class="text-center"><?php echo e($key+1); ?></td>
            <td class="text-center"><?php echo e($item->purchase_no); ?></td>
            <td class="text-center"><?php echo e(date('d-m-Y',strtotime($item->date))); ?></td>
            <td class="text-center"><?php echo e($item['product']['name']); ?></td>
            <td class="text-center"><?php echo e($item->buying_qty); ?> <?php echo e($item['product']['unit']['name']); ?> </td>
            <td class="text-center"><?php echo e($item->unit_price); ?></td>
            <td class="text-center"><?php echo e($item->buying_price); ?></td>
            
            
        </tr>
         <?php
        $total_sum += $item->buying_price;
        ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            
           
           
            <tr>
                <td class="no-line"></td>
                <td class="no-line"></td>
                <td class="no-line"></td> 
                <td class="no-line"></td>
                <td class="no-line text-center">
                    <strong>Grand Amount</strong></td>
                <td class="no-line text-end"><h4 class="m-0">$<?php echo e($total_sum); ?></h4></td>
            </tr>
                            </tbody>
                        </table>
                    </div>

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
<?php echo $__env->make('admin.admin_master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Project2\m-supplies\resources\views/backend/pdf/daily_purchase_report_pdf.blade.php ENDPATH**/ ?>