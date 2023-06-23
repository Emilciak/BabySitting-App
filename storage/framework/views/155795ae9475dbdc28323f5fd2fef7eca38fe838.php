<!DOCTYPE html>
<html>
<?php echo $__env->make('partials.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<body>
<?php echo $__env->make('partials.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
 <?php echo $__env->make('partials.navi', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

 <div id="zawartosc">
 <div class="container justify-content-center text-center">
    <h2 class="text-center mt-3 text-uppercase h4">Dodaj Rozliczenie</h2>
    <form class="form-inline" action="<?=config('app.url'); ?>rozliczeniamodule/save" method="post">
    <?php echo csrf_field(); ?>
    <p>
        <label for="idZlecenia"> :)id Zlecenia: </label>
        <input id="idZlecenia" name="idZlecenia" size="3" required>
    </p>
    <p>
        <label for="idOpiekuna"> ID Opiekuna: </label>
        <input id="idOpiekuna" name="idOpiekuna" size="3" required>
    </p>
    <p>
        <label for="rozliczenieFinansowe"> Rozliczenie finansowe: </label>
        <input id="rozliczenieFinansowe" name="rozliczenieFinansowe" size="5" required>
    </p>
    <p><button type="submit" class="btn btn-light mb-2">Dodaj</button></p>
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
</html><?php /**PATH /home/s47525/public_html/laravel_proj/resources/views/rozliczeniamodule/add.blade.php ENDPATH**/ ?>