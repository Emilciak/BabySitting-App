<!DOCTYPE html>
<html lang="pl">
<?php echo $__env->make('partials.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<link rel="stylesheet" href="../styles.css">
<body>
<div class="hero">
<img src="../panda.png" class="panda mx-auto d-block img-fluid" alt="panda">
</div>
<?php echo $__env->make('partials.navi', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<div id="zawartosc">
    <div class="container text-align-center">
    <div class="text-center mt-3 dodanie">
 <a href="<?=config('app.url'); ?>zleceniemodule/add"><i class="fa-brands fa-pagelines"></i>Dodaj zlecenie<i class="fa-brands fa-pagelines"></i></a>
  </div> 

<table class="table table-bordered text-center mt-3">
    <tr>
        <th>ID</th>
        <th>ID Dziecka</th>
        <th>ID Opiekuna</th>
        <th>czas w minutach</th>
        <th>Edit</th>
        <th>Delete</th>
    </tr>
 <?php $__currentLoopData = $zlecenia; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $el): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<tr>
    <tr>
        <td><?php echo e($el->id); ?></td>
        <td><?php echo e($el->idDziecka); ?></td>
        <td><?php echo e($el->idOpiekuna); ?></td>
        <td><?php echo e($el->czasWminutach); ?></td>
        <td><a href="<?=config('app.url'); ?>zleceniemodule/edit/<?php echo e($el->id); ?>">Edit</a></td>
        <td><a href="<?=config('app.url'); ?>zleceniemodule/show/<?php echo e($el->id); ?>">Del</a></td>    
    </tr>
</tr>
 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>
</div>
</body>
</html>
<?php /**PATH /home/s47525/public_html/laravel_proj/resources/views/zleceniemodule/list.blade.php ENDPATH**/ ?>