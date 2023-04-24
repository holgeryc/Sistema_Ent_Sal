

<?php $__env->startSection('title', 'Entrada'); ?>

<?php $__env->startSection('meta-description', 'Entrada meta description'); ?>

<?php $__env->startSection('content'); ?>
    <h1>Entrada</h1>
    <a href="<?php echo e(route('posts.formulario')); ?>">Ingresos</a>
    <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <h1>
            <a href="<?php echo e(route('posts.show', $post)); ?>">
                <?php echo e($post-> correo); ?>

            </a>
        </h1>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('Diseños.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Sistema_Ent_Sal\resources\views/Entrada.blade.php ENDPATH**/ ?>