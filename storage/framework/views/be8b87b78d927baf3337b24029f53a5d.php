
<?php $__env->startSection('admin'); ?>

 <div class="page-content">
                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                    <h4 class="mb-sm-0"> Customer Payment Report </h4>

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);"> </a></li>
                                            <li class="breadcrumb-item active">Customer Payment Report</li>
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
                <h4 class="float-end font-size-16"><strong>Invoice No # <?php echo e($payment['invoice']['invoice_no']); ?></strong></h4>
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
                        <strong>Invoice Date:</strong><br>
                         <?php echo e(date('d-m-Y',strtotime($payment['invoice']['date']))); ?> <br><br>
                    </address>
                </div>
            </div>
        </div>
    </div>

   

    <div class="row">
        <div class="col-12">
            <div>
                <div class="p-2">
                    <h3 class="font-size-16"><strong>Customer Invoice</strong></h3>
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



            <tr>
                <td colspan="7" style="text-align: center;font-weight: bold;">Paid Summary</td>
                
            </tr>

             <tr>
                <td colspan="4" style="text-align: center;font-weight: bold;">Date </td>
                <td colspan="3" style="text-align: center;font-weight: bold;">Amount</td>
                
            </tr>
<?php
$payment_details = App\Models\PaymentDetail::where('invoice_id',$payment->invoice_id)->get();
?>

            <?php $__currentLoopData = $payment_details; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
             <tr>
                <td colspan="4" style="text-align: center;font-weight: bold;"><?php echo e(date('d-m-Y',strtotime($item->date))); ?></td>
                <td colspan="3" style="text-align: center;font-weight: bold;"><?php echo e($item->current_paid_amount); ?></td>
                
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>









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
<?php echo $__env->make('admin.admin_master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Project2\m-supplies\resources\views/backend/pdf/invoice_details_pdf.blade.php ENDPATH**/ ?>