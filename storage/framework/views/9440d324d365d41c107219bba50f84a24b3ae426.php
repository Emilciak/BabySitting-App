<!DOCTYPE html>
<html>
<?php echo $__env->make('partials.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<body>
<?php echo $__env->make('partials.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
 <?php echo $__env->make('partials.navi', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

 <div id="zawartosc">
 <div class="container justify-content-center text-center">
    <h2 class="text-center mt-3 text-uppercase h4">Potwierdzenie usunięcia ID: <?php echo e($rodzicemodule->id); ?></h2>
    <form class="form-inline" action="<?=config('app.url'); ?>rodzicemodule/delete/<?php echo e($rodzicemodule->id); ?>" method="post">
    <?php echo csrf_field(); ?>
    <p>
        <label for="id"> ID: </label>
        <input id="id" name="id" value="<?php echo e($rodzicemodule->id); ?>" readonly>
    </p>
    <p>
        <label for="imie"> imie: </label>
        <input id="imie" name="imie" value="<?php echo e($rodzicemodule->imie); ?>" readonly>
    </p>
    <p>
        <label for="nazwisko"> Nazwisko: </label>
        <input id="nazwisko" name="nazwisko" value="<?php echo e($rodzicemodule->nazwisko); ?>" readonly>
    </p>
    <p>
        <label for="ileDzieci"> ileDzieci: </label>
        <input id="ileDzieci" name="ileDzieci" value="<?php echo e($rodzicemodule->ileDzieci); ?>" readonly>
    </p>

    <p><button type="submit" class="btn btn-light mb-2">Usuń</button></p>
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
</html><?php /**PATH /home/s47525/public_html/laravel_proj/resources/views/rodzicemodule/show.blade.php ENDPATH**/ ?>