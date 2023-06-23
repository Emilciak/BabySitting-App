<!DOCTYPE html>
<html lang="pl">
<?php echo $__env->make('partials.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<body>
<?php echo $__env->make('partials.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('partials.navi', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<div id="zawartosc">
<div class="container text-align-center">
    <div class="text-center mt-3 dodanie">
 <a href="<?=config('app.url'); ?>rodzicemodule/add"><i class="fa-brands fa-pagelines"></i>Dodaj rodzica<i class="fa-brands fa-pagelines"></i></a>
  </div> 
    <table class="table table-bordered text-center mt-3"> 
        <tr>
            <th scope="col">ID</th>
        <th scope="col">Imię</th>
        <th scope="col">Nazwisko</th>
        <th scope="col">Ile dzieci</th>
        <th scope="col">Edit</th>
        <th scope="col">Delete</th>
    </tr>
 <?php $__currentLoopData = $rodzic; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $el): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
 <tr>
     <tr>
         <td><?php echo e($el->id); ?></td>
        <td><a href = '<?=config('app.url'); ?>rodzicemodule/dzieci/<?php echo e($el->id); ?>'><?php echo e($el->imie); ?></a></td>
        <td><?php echo e($el->nazwisko); ?></td>
        <td><?php echo e($el->ileDzieci); ?></td>
        <td><a href="<?=config('app.url'); ?>rodzicemodule/edit/<?php echo e($el->id); ?>">Edit</a></td>
        <td><a href="<?=config('app.url'); ?>rodzicemodule/show/<?php echo e($el->id); ?>">Del</a></td>    
    </tr>
</tr>
 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
 </div>
</div>
</div>
</body>
</html>
<?php /**PATH /home/s47525/public_html/laravel_proj/resources/views/rodzicemodule/list.blade.php ENDPATH**/ ?>