

<?php $__env->startSection('content'); ?>

<div class="container">
    <h3>Edit Data Kategori</h3>
    <form action="<?php echo e(url('/kategori/' . $row->cat_id)); ?>" method="POST">
        <input name="_method" type="hidden" value="PATCH">
        <?php echo csrf_field(); ?> 

        <div class="form-group">
            <label for=""> KATEGORI NAMA </label>
            <input type="text" name="cat_nama" class="form-control" value="<?php echo e($row->cat_nama); ?>">
        </div>
        <div class="form-group">
            <label for=""> KETERANGAN </label>
            <input type="text" name="cat_ket" class="form-control" value="<?php echo e($row->cat_ket); ?>">
        </div>

        <div class="form-group">
            <input button type="submit" value="UPDATE" class="btn btn-primary">
 
    </form>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel-quiz\resources\views/kategori/edit.blade.php ENDPATH**/ ?>