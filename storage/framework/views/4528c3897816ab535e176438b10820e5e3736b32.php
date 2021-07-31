

<?php $__env->startSection('content'); ?>

<div class="container">
    <h3>Edit Data Post</h3>
    <form action="<?php echo e(url('/post/' . $rows->post_id)); ?>" method="POST">
        <input name="_method" type="hidden" value="PATCH">
        <?php echo csrf_field(); ?> 

        <div class="form-group">
            <label for=""> TANGGAL </label>
            <input type="date" name="post_tanggal" class="form-control" value="<?php echo e($rows->post_tanggal); ?>">
        </div>

        <div class="form-group">
            <label for=""> SLUG </label>
            <input type="text" name="post_slug" class="form-control" value="<?php echo e($rows->post_slug); ?>">
        </div>

        <div class="form-group">
            <label for=""> TITLE </label>
            <input type="text" name="post_title" class="form-control" value="<?php echo e($rows->post_title); ?>">
        </div>
        
        <div class="form-group">
            <label for=""> KETERANGAN </label>
            <input type="text" name="post_ket" class="form-control" value="<?php echo e($rows->post_ket); ?>">
        </div>

        <div class="form-group">
            <label for=""> KATEGORI ID </label>
            <select class ="form-control select2" style="width: 100%;" name="cat_id" id="cat_id" value="<?php echo e($rows->cat_id); ?>">
                <option disabled value> Pilih </option>
                <?php $__currentLoopData = $rows; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option value="<?php echo e($rows->cat_id); ?>"> <?php echo e($rows->cat_id); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
        </div>

        <div class="form-group">
            <input button type="submit" value="UPDATE" class="btn btn-primary">
        </div>
 
    </form>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel-quiz\resources\views/post/edit.blade.php ENDPATH**/ ?>