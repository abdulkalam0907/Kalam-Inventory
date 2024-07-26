
<?php $__env->startSection('admin'); ?>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

 <div class="page-content">
                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                    <h4 class="mb-sm-0">Customer Invoice</h4>

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);"> </a></li>
                                            <li class="breadcrumb-item active">Customer Invoice</li>
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
        

  <a href="<?php echo e(route('credit.customer')); ?>" class="btn btn-dark btn-rounded waves-effect waves-light" style="float:right;"><i class="fa fa-list"> Back </i></a> <br>  <br>

    <div class="row">
        <div class="col-12">
            <div>
                <div class="p-2">
     <h3 class="font-size-16"><strong>Customer Invoice ( Invoice No: #<?php echo e($payment['invoice']['invoice_no']); ?> ) </strong></h3>
                </div>
                <div class="">
<div class="table-responsive">
    <table class="table">
        <thead>
        <tr>
            <td><strong>Customer Name </strong></td>
            <td class="text-center"><strong>Customer Mobile</strong></td>
            <td class="text-center"><strong>Address</strong>
            </td>
             
            
        </tr>
        </thead>
        <tbody>
        <!-- foreach ($order->lineItems as $line) or some such thing here -->
        <tr>
            <td> <?php echo e($payment['customer']['name']); ?></td>
            <td class="text-center"><?php echo e($payment['customer']['mobile_no']); ?></td>
            <td class="text-center"><?php echo e($payment['customer']['email']); ?></td>
             
            
        </tr>
        
                            
                            </tbody>
                        </table>
                    </div>

                  
                </div>
            </div>

        </div>
    </div> <!-- end row -->





   <div class="row">
        <div class="col-12">

   <form method="post" action="<?php echo e(route('customer.update.invoice',$payment->invoice_id)); ?>">
          <?php echo csrf_field(); ?>     

            <div>
                <div class="p-2">
                     
                </div>
                <div class="">
<div class="table-responsive">
    <table class="table">
        <thead>
        <tr>
            <td><strong>Sl </strong></td>
            <td class="text-center"><strong>Category</strong></td>
            <td class="text-center"><strong>Product Name</strong>
            </td>
            <td class="text-center"><strong>Current Stock</strong>
            </td>
            <td class="text-center"><strong>Quantity</strong>
            </td>
            <td class="text-center"><strong>Unit Price </strong>
            </td>
            <td class="text-center"><strong>Total Price</strong>
            </td>
            
        </tr>
        </thead>
        <tbody>
        <!-- foreach ($order->lineItems as $line) or some such thing here -->
        
      <?php
        $total_sum = '0';
$invoice_details = App\Models\InvoiceDetail::where('invoice_id',$payment->invoice_id)->get();
        ?>
        <?php $__currentLoopData = $invoice_details; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $details): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
           <td class="text-center"><?php echo e($key+1); ?></td>
            <td class="text-center"><?php echo e($details['category']['name']); ?></td>
            <td class="text-center"><?php echo e($details['product']['name']); ?></td>
            <td class="text-center"><?php echo e($details['product']['quantity']); ?></td>
            <td class="text-center"><?php echo e($details->selling_qty); ?></td>
            <td class="text-center"><?php echo e($details->unit_price); ?></td>
            <td class="text-center"><?php echo e($details->selling_price); ?></td>
            
        </tr>
         <?php
        $total_sum += $details->selling_price;
        ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td class="thick-line"></td>
                <td class="thick-line"></td>
                <td class="thick-line"></td>
                <td class="thick-line"></td>
                <td class="thick-line"></td>
                <td class="thick-line text-center">
                    <strong>Subtotal</strong></td>
                <td class="thick-line text-end">$<?php echo e($total_sum); ?></td>
            </tr>
            <tr>
                <td class="no-line"></td>
                 <td class="no-line"></td>
                  <td class="no-line"></td>
                   <td class="no-line"></td>
                <td class="no-line"></td>
                <td class="no-line text-center">
                    <strong>Discount Amount</strong></td>
                <td class="no-line text-end">$<?php echo e($payment->discount_amount); ?></td>
            </tr>
             <tr>
                <td class="no-line"></td>
                 <td class="no-line"></td>
                  <td class="no-line"></td>
                   <td class="no-line"></td>
                <td class="no-line"></td>
                <td class="no-line text-center">
                    <strong>Paid Amount</strong></td>
                <td class="no-line text-end">$<?php echo e($payment->paid_amount); ?></td>
            </tr>

             <tr>
                <td class="no-line"></td>
                 <td class="no-line"></td>
                  <td class="no-line"></td>
                   <td class="no-line"></td>
                <td class="no-line"></td>
                <td class="no-line text-center">
                    <strong>Due Amount</strong></td>
                    <input type="hidden" name="new_paid_amount" value="<?php echo e($payment->due_amount); ?>">
                <td class="no-line text-end">$<?php echo e($payment->due_amount); ?></td>
            </tr>
            <tr>
                <td class="no-line"></td>
                 <td class="no-line"></td>
                  <td class="no-line"></td>
                   <td class="no-line"></td>
                <td class="no-line"></td>
                <td class="no-line text-center">
                    <strong>Grand Amount</strong></td>
                <td class="no-line text-end"><h4 class="m-0">$<?php echo e($payment->total_amount); ?></h4></td>
            </tr>
                            </tbody>
                        </table>
                    </div>




        <div class="row">

            <div class="form-group col-md-3">
                  <label> Paid Status </label>
                    <select name="paid_status" id="paid_status" class="form-select">
                        <option value="">Select Status </option>
                        <option value="full_paid">Full Paid </option> 
                        <option value="partial_paid">Partial Paid </option>
                        
                    </select>
        <input type="text" name="paid_amount" class="form-control paid_amount" placeholder="Enter Paid Amount" style="display:none;">
            </div>


            <div class="form-group col-md-3">
                <div class="md-3">
                <label for="example-text-input" class="form-label">Date</label>
                 <input class="form-control example-date-input" placeholder="YYYY-MM-DD"  name="date" type="date"  id="date">
            </div>
            </div>

            <div class="form-group col-md-3">
                 <div class="md-3" style="padding-top: 30px;">
                <button type="submit" class="btn btn-info">Invoice Update</button>
            </div>
                
            </div>
            
        </div>




                     
                </div>
            </div>
 </form>


        </div> 
    </div> <!-- end row -->
 
 



</div>
</div>
                            </div> <!-- end col -->
                        </div> <!-- end row -->

                    </div> <!-- container-fluid -->
                </div>


 <script type="text/javascript">
    $(document).on('change','#paid_status', function(){
        var paid_status = $(this).val();
        if (paid_status == 'partial_paid') {
            $('.paid_amount').show();
        }else{
            $('.paid_amount').hide();
        }
    }); 
</script>



<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.admin_master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Project2\m-supplies\resources\views/backend/customer/edit_customer_invoice.blade.php ENDPATH**/ ?>