

<?php $__env->startSection('content'); ?>

<div class="container"> 
 
    <h3>Tambah Data Mahasiswa</h3> 
    <form action="<?php echo e(url('/mahasiswa')); ?>" method="POST"> 
        <?php echo csrf_field(); ?> 
        <div class="form-group">
            <label for=""> NIM </label>
            <input type="text" name="mhsw_nim" class="form-control">
        </div>
        <div class="form-group">
            <label for=""> NAMA</label>
            <input type="text" name="mhsw_nama" class="form-control">
        </div>
        <div class="form-group">
            <label for=""> JURUSAN </label>
            <input type="text" name="mhsw_jurusan" class="form-control">
        </div>
        <div class="form-group">
            <label for=""> ALAMAT </label>
            <textarea name="mhsw_alamat" cols="30" rows="5" class="form-control"></textarea>
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
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel-quiz\resources\views/mahasiswa/add.blade.php ENDPATH**/ ?>