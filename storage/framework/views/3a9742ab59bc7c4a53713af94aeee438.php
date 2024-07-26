
<?php $__env->startSection('admin'); ?>


 <div class="page-content">
                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                    <h4 class="mb-sm-0">Stock Report All</h4>

                                     

                                </div>
                            </div>
                        </div>
                        <!-- end page title -->
                        
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

    <a href="<?php echo e(route('stock.report.pdf')); ?>" target="_blank" class="btn btn-dark btn-rounded waves-effect waves-light" style="float:right;"><i class="fa fa-print"> Stock Report Print </i></a> <br>  <br>               

                    <h4 class="card-title">Stock Report </h4>
                    

                    <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead>
                        <tr>
                            <th>Sl</th>
                            <th>Supplier Name </th>
                            <th>Unit</th>
                            <th>Category</th> 
                            <th>Product Name</th> 
                            <th>In Qty</th> 
                            <th>Out Qty </th>  
                            <th>Stock </th>
                            
                        </thead>


                        <tbody>
                             
                            <?php $__currentLoopData = $allData; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<?php
$buying_total = App\Models\Purchase::where('category_id',$item->category_id)->where('product_id',$item->id)->where('status','1')->sum('buying_qty');
$selling_total = App\Models\InvoiceDetail::where('category_id',$item->category_id)->where('product_id',$item->id)->where('status','1')->sum('selling_qty');
?>

    <tr>
        <td> <?php echo e($key+1); ?> </td> 
        <td> <?php echo e($item['supplier']['name']); ?> </td> 
        <td> <?php echo e($item['unit']['name']); ?> </td> 
        <td> <?php echo e($item['category']['name']); ?> </td> 
        <td> <?php echo e($item->name); ?> </td> 
        <td> <span class="btn btn-success"> <?php echo e($buying_total); ?></span>  </td> 
        <td> <span class="btn btn-info"> <?php echo e($selling_total); ?></span> </td> 
        <td> <span class="btn btn-danger"> <?php echo e($item->quantity); ?></span> </td> 
        
       
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
<?php echo $__env->make('admin.admin_master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Project2\m-supplies\resources\views/backend/stock/stock_report.blade.php ENDPATH**/ ?>