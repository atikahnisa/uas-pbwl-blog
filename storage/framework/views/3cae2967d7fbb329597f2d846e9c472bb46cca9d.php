

<?php $__env->startSection('content'); ?>

<div class="container"> 
 
    <h3>Tambah Data Kategori</h3> 
    <form action="<?php echo e(url('/kategori')); ?>" method="POST"> 
        <?php echo csrf_field(); ?> 
        <div class="form-group">
            <label for=""> NAMA KATEGORI </label>
            <input type="text" name="cat_nama" class="form-control">
        </div>
        <div class="form-group">
            <label for=""> KETERANGAN </label>
            <input type="text" name="cat_ket" class="form-control">
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
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel-quiz\resources\views/kategori/add.blade.php ENDPATH**/ ?>