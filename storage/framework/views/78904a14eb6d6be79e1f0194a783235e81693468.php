

<?php $__env->startSection('content'); ?>

<div class="container">
    <h3>Edit Data Mahasiswa</h3>
    <form action="<?php echo e(url('/mahasiswa/' . $row->mhsw_id)); ?>" method="POST">
        <input name="_method" type="hidden" value="PATCH">
        <?php echo csrf_field(); ?> 

        <div class="form-group">
            <label for=""> NIM </label>
            <input type="text" name="mhsw_nim" class="form-control" value="<?php echo e($row->mhsw_nim); ?>">
        </div>
        <div class="form-group">
            <label for=""> NAMA</label>
            <input type="text" name="mhsw_nama" class="form-control" value="<?php echo e($row->mhsw_nama); ?>">
        </div>
        <div class="form-group">
            <label for=""> JURUSAN </label>
            <input type="text" name="mhsw_jurusan" class="form-control" value="<?php echo e($row->mhsw_jurusan); ?>">
        </div>
        <div class="form-group">
            <label for=""> ALAMAT </label>
            <textarea name="mhsw_alamat" cols="30" rows="5" class="form-control" ><?php echo e($row->mhsw_alamat); ?></textarea>
        </div>

        <div class="form-group">
            <input button type="submit" value="UPDATE" class="btn btn-primary">
 
    </form>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel-quiz\resources\views/mahasiswa/edit.blade.php ENDPATH**/ ?>