<!DOCTYPE html>
<html>
<?php echo $__env->make('partials.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<body>
<?php echo $__env->make('partials.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
 <?php echo $__env->make('partials.navi', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

 <div id="zawartosc">
 <div class="container justify-content-center text-center">
    <h2 class="text-center mt-3 text-uppercase h4">Dodanie opiekuna</h2>
    <form class="form-inline" action="<?=config('app.url'); ?>opiekunimodule/save" method="post">
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
        <label for="wiek"> Wiek: </label>
        <input id="wiek" name="wiek" size="2" required>
    </p>
    <p>
        <label for="ileLatWzawodzie"> Ile lat w zawodzie: </label>
        <input id="ileLatWzawodzie" name="ileLatWzawodzie" size="2" required>
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
</body>
</html><?php /**PATH /home/s47525/public_html/laravel_proj/resources/views/opiekunimodule/add.blade.php ENDPATH**/ ?>