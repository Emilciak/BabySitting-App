<!DOCTYPE html>
<html lang="pl">
<?php echo $__env->make('partials.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<body>
<?php echo $__env->make('partials.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('partials.navi', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<div id="zawartosc">
<div class="container text-align-center">
    <div class="text-center mt-3 dodanie">
 <a href="<?=config('app.url'); ?>rozliczeniamodule/add"><i class="fa-brands fa-pagelines"></i>Dodaj rozliczenie<i class="fa-brands fa-pagelines"></i></a>
  </div> 
<table class="table table-bordered text-center mt-3">
    <tr>
        <th>ID</th>
        <th>ID Zlecenia</th>
        <th>ID Opiekuna</th>
        <th>Rozliczenie</th>
        <th>Edit</th>
        <th>Delete</th>
    </tr>
 <?php $__currentLoopData = $rozliczenia; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $el): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<tr>
    <tr>
        <td><?php echo e($el->id); ?></td>
        <td><?php echo e($el->idZlecenia); ?></td>
        <td><?php echo e($el->idOpiekuna); ?></td>
        <td><?php echo e($el->rozliczenieFinansowe); ?> zł</td>
        <td><a href="<?=config('app.url'); ?>rozliczeniamodule/edit/<?php echo e($el->id); ?>">Edit</a></td>
        <td><a href="<?=config('app.url'); ?>rozliczeniamodule/show/<?php echo e($el->id); ?>">Del</a></td>    
    </tr>
</tr>
 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>
</div>
</div>
</body>
</html>
<?php /**PATH /home/s47525/public_html/laravel_proj/resources/views/rozliczeniamodule/list.blade.php ENDPATH**/ ?>