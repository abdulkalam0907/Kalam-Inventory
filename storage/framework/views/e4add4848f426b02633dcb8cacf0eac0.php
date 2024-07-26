
<?php $__env->startSection('admin'); ?>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<div class="page-content">
<div class="container-fluid">

<div class="row">
<div class="col-12">
    <div class="card">
        <div class="card-body">

            <h4 class="card-title">Edit Product Page </h4><br><br>



 <form method="post" action="<?php echo e(route('product.update')); ?>" id="myForm" >
                <?php echo csrf_field(); ?>

                <input type="hidden" name="id" value="<?php echo e($product->id); ?>">

            <div class="row mb-3">
                <label for="example-text-input" class="col-sm-2 col-form-label">Product Name </label>
                <div class="form-group col-sm-10">
                    <input name="name" value="<?php echo e($product->name); ?>" class="form-control" type="text"    >
                </div>
            </div>
            <!-- end row -->


            <div class="row mb-3">
        <label class="col-sm-2 col-form-label">Supplier Name </label>
        <div class="col-sm-10">
            <select name="supplier_id" class="form-select" aria-label="Default select example">
                <option selected="">Open this select menu</option>
                <?php $__currentLoopData = $supplier; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $supp): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option value="<?php echo e($supp->id); ?>" <?php echo e($supp->id == $product->supplier_id ? 'selected' : ''); ?>   ><?php echo e($supp->name); ?></option>
               <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
        </div>
    </div>
  <!-- end row -->

      <div class="row mb-3">
        <label class="col-sm-2 col-form-label">Unit Name </label>
        <div class="col-sm-10">
            <select name="unit_id" class="form-select" aria-label="Default select example">
                <option selected="">Open this select menu</option>
                <?php $__currentLoopData = $unit; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $uni): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option value="<?php echo e($uni->id); ?>" <?php echo e($uni->id == $product->unit_id ? 'selected' : ''); ?> ><?php echo e($uni->name); ?></option>
               <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
        </div>
    </div>
  <!-- end row -->



      <div class="row mb-3">
        <label class="col-sm-2 col-form-label">Category Name </label>
        <div class="col-sm-10">
            <select name="category_id" class="form-select" aria-label="Default select example">
                <option selected="">Open this select menu</option>
                <?php $__currentLoopData = $category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option value="<?php echo e($cat->id); ?>" <?php echo e($cat->id == $product->category_id ? 'selected' : ''); ?>><?php echo e($cat->name); ?></option>
               <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
        </div>
    </div>
  <!-- end row -->


<input type="submit" class="btn btn-info waves-effect waves-light" value="Update Product">
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
                 supplier_id: {
                    required : true,
                },
                 unit_id: {
                    required : true,
                },
                 category_id: {
                    required : true,
                },
            },
            messages :{
                name: {
                    required : 'Please Enter Your Product Name',
                },
                supplier_id: {
                    required : 'Please Select One Supplier',
                },
                unit_id: {
                    required : 'Please Select One Unit',
                },
                category_id: {
                    required : 'Please Select One Category',
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
<?php echo $__env->make('admin.admin_master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Project2\m-supplies\resources\views/backend/product/product_edit.blade.php ENDPATH**/ ?>