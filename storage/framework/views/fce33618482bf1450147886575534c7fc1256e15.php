

<?php $__env->startSection('content'); ?>
    <div class="container"> 
 
        <h3>
            Daftar Kategori
            <a href="<?php echo e(url('/kategori/create')); ?>" class="btn btn-warning float-right">Tambah Data</a>
        </h3> 
 
        <table class= "table table-bordered"> 
            <tr> 
                <th>NO.</th>
                <th>KATEGORI NAMA</th> 
                <th>KATEGORI KETERANGAN</th> 
                <th>EDIT</th> 
                <th>DELETE</th> 
            </tr> 
            <?php $__currentLoopData = $rows; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
            <tr> 
                <td><?php echo e($loop->iteration); ?></td>
                <td><?php echo e($row->cat_nama); ?></td> 
                <td><?php echo e($row->cat_ket); ?></td> 
                <td><a href="<?php echo e(url('kategori/' . $row->cat_id . '/edit')); ?>" class="btn btn-primary"> Edit</a></td>
                <td>
                    <form action="<?php echo e(url('/kategori/' . $row->cat_id)); ?>" method="POST">
                        <input name="_method" type="hidden" value="DELETE"> 
                        <?php echo csrf_field(); ?> 
                        
                        <button class="btn btn-danger" onclick="return confirm('Yakin Hapus ?')">Delete</button>
                        
                    </form>
                </td>
            </tr> 
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
    </table> 
</div> 
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel-quiz\resources\views/kategori/index.blade.php ENDPATH**/ ?>