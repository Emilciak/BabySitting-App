<!DOCTYPE html>
<html>
<?php echo $__env->make('partials.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<body>
<?php echo $__env->make('partials.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
 <?php echo $__env->make('partials.navi', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

 <div id="zawartosc">
    <h2>Edytuj dziecko</h2>
    <form class="form-inline" action="<?=config('app.url'); ?>dziecimodule/update/<?php echo e($myDzieckoEdit->id); ?>" method="post">
    <?php echo csrf_field(); ?>
    <p>
        <label for="id"> ID: </label>
        <input id="id" name="id" size="3" value="<?php echo e($myDzieckoEdit->id); ?>" readonly>
    </p>
    <p>
        <label for="imie"> Imię: </label>
        <input id="imie" name="imie" size="25" value="<?php echo e($myDzieckoEdit->imie); ?>"size="25" required>
    </p>
    <p>
        <label for="idRodzica">ID Rodzica: </label>
        <input id="idRodzica" name="idRodzica" size="3" value="<?php echo e($myDzieckoEdit->idRodzica); ?>" size="25" required>
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
</body>
</html><?php /**PATH /home/s47525/public_html/laravel_proj/resources/views/dziecimodule/edit.blade.php ENDPATH**/ ?>