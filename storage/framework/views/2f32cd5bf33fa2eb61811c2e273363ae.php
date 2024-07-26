
<?php $__env->startSection('admin'); ?>


 <div class="page-content">
                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                    <h4 class="mb-sm-0">Inovice Approve</h4>

                                     

                                </div>
                            </div>
                        </div>
                        <!-- end page title -->
    <?php
    $payment = App\Models\Payment::where('invoice_id',$invoice->id)->first();
    ?>                    
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
<h4>Invoice No: #<?php echo e($invoice->invoice_no); ?> - <?php echo e(date('d-m-Y',strtotime($invoice->date))); ?> </h4>
    <a href="<?php echo e(route('invoice.pending.list')); ?>" class="btn btn-dark btn-rounded waves-effect waves-light" style="float:right;"><i class="fa fa-list"> Pending Invoice List </i></a> <br>  <br>               

     <table class="table table-dark" width="100%">
        <tbody>
            <tr>
                <td><p> Customer Info </p></td>
                <td><p> Name: <strong> <?php echo e($payment['customer']['name']); ?> </strong> </p></td>
                <td><p> Mobile: <strong> <?php echo e($payment['customer']['mobile_no']); ?> </strong> </p></td>
               <td><p> Email: <strong> <?php echo e($payment['customer']['email']); ?> </strong> </p></td>                
            </tr>

             <tr>
             <td></td>
              <td colspan="3"><p> Description : <strong> <?php echo e($invoice->description); ?> </strong> </p></td>
             </tr>
        </tbody>
         
     </table>    


     <form method="post" action="<?php echo e(route('approval.store',$invoice->id)); ?>">
      <?php echo csrf_field(); ?>         
         <table border="1" class="table table-dark" width="100%">
            <thead>
                <tr>
                    <th class="text-center">Sl</th>
                    <th class="text-center">Category</th>
                    <th class="text-center">Product Name</th>
                    <th class="text-center" style="background-color: #8B008B">Current Stock</th>
                    <th class="text-center">Quantity</th>
                    <th class="text-center">Unit Price </th>
                    <th class="text-center">Total Price</th>
                </tr>
                
            </thead>
    <tbody>
        <?php
        $total_sum = '0';
        ?>
        <?php $__currentLoopData = $invoice['invoice_details']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $details): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            
            <input type="hidden" name="category_id[]" value="<?php echo e($details->category_id); ?>">
            <input type="hidden" name="product_id[]" value="<?php echo e($details->product_id); ?>">
            <input type="hidden" name="selling_qty[<?php echo e($details->id); ?>]" value="<?php echo e($details->selling_qty); ?>">

            <td class="text-center"><?php echo e($key+1); ?></td>
            <td class="text-center"><?php echo e($details['category']['name']); ?></td>
            <td class="text-center"><?php echo e($details['product']['name']); ?></td>
            <td class="text-center" style="background-color: #8B008B"><?php echo e($details['product']['quantity']); ?></td>
            <td class="text-center"><?php echo e($details->selling_qty); ?></td>
            <td class="text-center"><?php echo e($details->unit_price); ?></td>
            <td class="text-center"><?php echo e($details->selling_price); ?></td>
        </tr>
        <?php
        $total_sum += $details->selling_price;
        ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td colspan="6"> Sub Total </td>
             <td > <?php echo e($total_sum); ?> </td>
        </tr>
         <tr>
            <td colspan="6"> Discount </td>
             <td > <?php echo e($payment->discount_amount); ?> </td>
        </tr>

         <tr>
            <td colspan="6"> Paid Amount </td>
             <td ><?php echo e($payment->paid_amount); ?> </td>
        </tr>

         <tr>
            <td colspan="6"> Due Amount </td>
             <td > <?php echo e($payment->due_amount); ?> </td>
        </tr>

        <tr>
            <td colspan="6"> Grand Amount </td>
             <td ><?php echo e($payment->total_amount); ?></td>
        </tr>
    </tbody>
             
         </table>
 
         <button type="submit" class="btn btn-info">Invoice Approve </button>

     </form> 

                    
        
                                    </div>
                                </div>
                            </div> <!-- end col -->
                        </div> <!-- end row -->
        
                     
                        
                    </div> <!-- container-fluid -->
                </div>
 

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.admin_master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Project2\m-supplies\resources\views/backend/invoice/invoice_approve.blade.php ENDPATH**/ ?>