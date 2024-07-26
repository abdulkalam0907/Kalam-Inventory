
<?php $__env->startSection('admin'); ?>


 <div class="page-content">
                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-sm-flex  align-items-center justify-content-between">
                                    <h4 class="mb-sm-0">Credit Customer All</h4>

                                     

                                </div>
                            </div>
                        </div>
                        <!-- end page title -->
                        
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

    <a href="<?php echo e(route('credit.customer.print.pdf')); ?>" target="_blank" class="btn btn-dark btn-rounded waves-effect waves-light" style="float:right;"><i class="fa fa-print"> Print Credit Customer  </i></a> <br>  <br>               

                    <h4 class="card-title">Credit Customer Data </h4>
                    

                    <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead>
                        <tr>
                            <th>Sl</th>
                            <th>Customer Name</th> 
                            <th>Invoice No </th>
                            <th>Date</th>
                            <th>Due Amount</th> 
                            <th>Action</th>
                            
                        </thead>


                        <tbody>
                        	 
                        	<?php $__currentLoopData = $allData; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
        <td> <?php echo e($key+1); ?> </td>
        <td> <?php echo e($item['customer']['name']); ?> </td> 
        <td> #<?php echo e($item['invoice']['invoice_no']); ?>   </td> 
        <td> <?php echo e(date('d-m-Y',strtotime($item['invoice']['date']))); ?> </td> 
        <td> <?php echo e($item->due_amount); ?> </td> 
        <td>
   <a href="<?php echo e(route('customer.edit.invoice',$item->invoice_id)); ?>" class="btn btn-info sm" title="Edit Data">  <i class="fas fa-edit"></i> </a>

     <a href="<?php echo e(route('customer.invoice.details.pdf',$item->invoice_id)); ?>" target="_blank" class="btn btn-danger sm" title="Customer Invoice Details">  <i class="fa fa-eye"></i> </a>

                            </td>
                           
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        
                        </tbody>
                    </table>
        
                                    </div>
                                </div>
                            </div> <!-- end col -->
                        </div> <!-- end row -->
        
                     
                        
                    </div> <!-- container-fluid -->
                </div>
 

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.admin_master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Project2\m-supplies\resources\views/backend/customer/customer_credit.blade.php ENDPATH**/ ?>