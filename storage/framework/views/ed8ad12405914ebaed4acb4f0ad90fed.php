
<?php $__env->startSection('admin'); ?>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<div class="page-content">
<div class="container-fluid">

<div class="row">
<div class="col-12">
    <div class="card">
        <div class="card-body">

            <h4 class="card-title">Add Supplier Page </h4><br><br>



            <form method="post" action="<?php echo e(route('supplier.update')); ?>" id="myForm" >
                <?php echo csrf_field(); ?>

                <input type="hidden" name="id" value="<?php echo e($supplier->id); ?>">

            <div class="row mb-3">
                <label for="example-text-input" class="col-sm-2 col-form-label">Supplier Name </label>
                <div class="form-group col-sm-10">
                    <input name="name" class="form-control" value="<?php echo e($supplier->name); ?>" type="text"    >
                </div>
            </div>
            <!-- end row -->


              <div class="row mb-3">
                <label for="example-text-input" class="col-sm-2 col-form-label">Supplier Mobile </label>
                <div class="form-group col-sm-10">
                    <input name="mobile_no" value="<?php echo e($supplier->mobile_no); ?>" class="form-control" type="text"    >
                </div>
            </div>
            <!-- end row -->


  <div class="row mb-3">
                <label for="example-text-input" class="col-sm-2 col-form-label">Supplier Email </label>
                <div class="form-group col-sm-10">
                    <input name="email" value="<?php echo e($supplier->email); ?>" class="form-control" type="email"  >
                </div>
            </div>
            <!-- end row -->


  <div class="row mb-3">
                <label for="example-text-input" class="col-sm-2 col-form-label">Supplier Address </label>
                <div class="form-group col-sm-10">
                    <input name="address" value="<?php echo e($supplier->address); ?>" class="form-control" type="text"  >
                </div>
            </div>
            <!-- end row -->





<input type="submit" class="btn btn-info waves-effect waves-light" value="Update Supplier">
            </form>



        </div>
    </div>
</div> <!-- end col -->
</div>



</div>
</div>

<script type="text/javascript">
    $(document).ready(function (){
        $('#myForm').validate({
            rules: {
                name: {
                    required : true,
                }, 
                 mobile_no: {
                    required : true,
                },
                 email: {
                    required : true,
                },
                 address: {
                    required : true,
                },
            },
            messages :{
                name: {
                    required : 'Please Enter Your Name',
                },
                mobile_no: {
                    required : 'Please Enter Your Mobile Number',
                },
                email: {
                    required : 'Please Enter Your Email',
                },
                address: {
                    required : 'Please Enter Your Address',
                },
            },
            errorElement : 'span', 
            errorPlacement: function (error,element) {
                error.addClass('invalid-feedback');
                element.closest('.form-group').append(error);
            },
            highlight : function(element, errorClass, validClass){
                $(element).addClass('is-invalid');
            },
            unhighlight : function(element, errorClass, validClass){
                $(element).removeClass('is-invalid');
            },
        });
    });
    
</script>



<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.admin_master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Project2\m-supplies\resources\views/backend/supplier/supplier_edit.blade.php ENDPATH**/ ?>