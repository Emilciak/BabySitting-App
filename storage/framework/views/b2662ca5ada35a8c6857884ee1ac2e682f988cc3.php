<!DOCTYPE html>
<html lang="pl">
<?php echo $__env->make('partials.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<body>
<?php echo $__env->make('partials.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('partials.navi', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div id="zawartosc">
    <div class="container justify-content-center text-center">
        <h1 class="text-center mt-3 text-uppercase h4">Lista dzieci przypisanych do rodzica: <?php echo e($rodzic->imie); ?></h1>
        <table class="table table-bordered text-center mt-3">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>imie</th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $dzieci; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $el): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($el->id); ?></td>
                    <td><?php echo e($el->imie); ?></td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>
</div>
</body>

</html><?php /**PATH /home/s47525/public_html/laravel_proj/resources/views/rodzicemodule/dzieci.blade.php ENDPATH**/ ?>