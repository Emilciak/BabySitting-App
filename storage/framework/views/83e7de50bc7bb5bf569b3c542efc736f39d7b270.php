<!DOCTYPE html>
<html>
<?php echo $__env->make('partials.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<body>
<?php echo $__env->make('partials.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
 <?php echo $__env->make('partials.navi', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

 <div id="zawartosc">
 <div class="container justify-content-center text-center">
    <h2 class="text-center mt-3 text-uppercase h4">Dodanie rodzica</h2>
    <div class="container">
    <form class="form-inline" action="<?=config('app.url'); ?>rodzicemodule/save" method="post">
    <?php echo csrf_field(); ?>
    <p>
        <label for="imie"> Imie: </label>
        <input id="imie" name="imie" size="25" required>
    </p>
    <p>
        <label for="nazwisko"> Nazwisko: </label>
        <input id="nazwisko" name="nazwisko" size="25" required>
    </p>
    <p>
        <label for="ileDzieci"> Ile dzieci: </label>
        <input id="ileDzieci" size="3" name="ileDzieci" required>
    </p>
    
    <p><button type="submit" class="btn btn-light mb-2">Dojaj</button></p>
    </form>
    <p>
        <?php if($errors->any()): ?>
        <div class="alert alert-danger">
            <ul>
                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><?php echo e($error); ?></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>
        <?php endif; ?>
    </p>        
</div>
</div>
</body>
</html><?php /**PATH /home/s47525/public_html/laravel_proj/resources/views/rodzicemodule/add.blade.php ENDPATH**/ ?>