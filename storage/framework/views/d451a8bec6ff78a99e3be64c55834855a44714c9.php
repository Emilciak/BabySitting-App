<!DOCTYPE html>
<html>
<?php echo $__env->make('partials.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<link rel="stylesheet" href="<?php echo e(URL::asset('styles.css')); ?>" />
<body>
<div class="hero">
<img src="<?php echo e(URL::asset('panda.png')); ?>" class="panda mx-auto d-block img-fluid" alt="panda">
</div>
 <?php echo $__env->make('partials.navi', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

 <div id="zawartosc">
    <div class="container justify-content-center text-center">
    <h2 class="text-center mt-3 text-uppercase h4">Edytuj zlecenie</h2>
    <form class="form-inline" action="<?=config('app.url'); ?>zleceniemodule/update/<?php echo e($myZlecenieEdit->id); ?>" method="post">
    <?php echo csrf_field(); ?>
    <p>
        <label for="id"> ID: </label>
        <input id="id" name="id" value="<?php echo e($myZlecenieEdit->id); ?>" size="3" readonly>
    </p>
    <p>
        <label for="idDziecka"> ID Dziecka: </label>
        <input id="idDziecka" name="idDziecka" size="3" value="<?php echo e($myZlecenieEdit->idDziecka); ?>" required>
    </p>
    <p>
        <label for="idOpiekuna">ID Opiekuna: </label>
        <input id="idOpiekuna" name="idOpiekuna" value="<?php echo e($myZlecenieEdit->idOpiekuna); ?>" size="3" required>
    </p>
    <p>
        <label for="czasWminutach">Czas w minutach: </label>
        <input id="czasWminutach" name="czasWminutach" value="<?php echo e($myZlecenieEdit->czasWminutach); ?>" size="5" required>
    </p>
            <p><button type="submit" class="btn btn-light mb-2">Edytuj</button></p>
    </form>
    <p>
        <?php if($errors->any()): ?>
        <div class="alert alert-danger">
            <ul>
                <?php $__currentLoopData = @errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><?php echo e($error); ?></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>
        <?php endif; ?>
    </p>        
</div>
</div>
</div>
</body>
</html><?php /**PATH /home/s47525/public_html/laravel_proj/resources/views/zleceniemodule/edit.blade.php ENDPATH**/ ?>