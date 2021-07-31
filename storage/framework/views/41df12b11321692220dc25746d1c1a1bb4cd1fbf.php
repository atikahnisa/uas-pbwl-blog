

<?php $__env->startSection('content'); ?>

<div class="container"> 
 
    <h3>Tambah Data Post</h3> 
    <form action="<?php echo e(url('/post')); ?>" method="POST"> 
        <?php echo csrf_field(); ?> 
        <div class="form-group">
            <label for=""> TANGGAL </label>
            <input type="date" name="post_tanggal" class="form-control">
        </div>

        <div class="form-group">
            <label for=""> SLUG </label>
            <input type="text" name="post_slug" class="form-control">
        </div>

        <div class="form-group">
            <label for=""> TITLE </label>
            <input type="text" name="post_title" class="form-control">
        </div>
        
        <div class="form-group">
            <label for=""> KETERANGAN </label>
            <input type="text" name="post_ket" class="form-control">
        </div>

        <div class="form-group">
            <label for=""> KATEGORI ID </label>
            <select class ="form-control select2" style="width: 100%;" name="cat_id" id="cat_id">
                <option disabled value> Pilih </option>
                <?php $__currentLoopData = $rows; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option value="<?php echo e($row->cat_id); ?>"> <?php echo e($row->cat_id); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
        </div>
        
        <div class="form-group">
            <input button type="submit" value="SIMPAN" class="btn btn-primary" type="button" active>
            <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
            <span class="sr-only">Loading...</span>
            </button>
        </div>
    </form> 
 </div> 

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel-quiz\resources\views/post/add.blade.php ENDPATH**/ ?>