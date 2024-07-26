
<?php $__env->startSection('admin'); ?>


 <div class="page-content">
                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                    <h4 class="mb-sm-0">Purchase All</h4>

                                     

                                </div>
                            </div>
                        </div>
                        <!-- end page title -->
                        
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

    <a href="<?php echo e(route('purchase.add')); ?>" class="btn btn-dark btn-rounded waves-effect waves-light" style="float:right;"><i class="fas fa-plus-circle"> Add Purchase </i></a> <br>  <br>               

                    <h4 class="card-title">Purchase All Data </h4>
                    

                    <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead>
                        <tr>
                            <th>Sl</th>
                            <th>Purhase No</th> 
                            <th>Date </th>
                            <th>Supplier</th>
                            <th>Category</th> 
                            <th>Qty</th> 
                            <th>Product Name</th> 
                            <th>Status</th>
                            <th>Action</th>
                            
                        </thead>


                        <tbody>
                             
                            <?php $__currentLoopData = $allData; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td> <?php echo e($key+1); ?> </td>
                <td> <?php echo e($item->purchase_no); ?> </td> 
                <td> <?php echo e(date('d-m-Y',strtotime($item->date))); ?> </td> 
                 <td> <?php echo e($item['supplier']['name']); ?> </td> 
                 <td> <?php echo e($item['category']['name']); ?> </td> 
                 <td> <?php echo e($item->buying_qty); ?> </td> 
                 <td> <?php echo e($item['product']['name']); ?> </td> 

                 <td> 
                    <?php if($item->status == '0'): ?>
                    <span class="btn btn-warning">Pending</span>
                    <?php elseif($item->status == '1'): ?>
                    <span class="btn btn-success">Approved</span>
                    <?php endif; ?>
                     </td> 

                <td> 
<?php if($item->status == '0'): ?>
<a href="<?php echo e(route('purchase.delete',$item->id)); ?>" class="btn btn-danger sm" title="Delete Data" id="delete">  <i class="fas fa-trash-alt"></i> </a>
<?php endif; ?>
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
<?php echo $__env->make('admin.admin_master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Project2\m-supplies\resources\views/backend/purchase/purchase_all.blade.php ENDPATH**/ ?>