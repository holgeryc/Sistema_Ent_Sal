

<?php $__env->startSection('title', 'Inicio'); ?>

<?php $__env->startSection('meta-description', 'Inicio meta description'); ?>

<?php $__env->startSection('content'); ?>
    <h1><?php echo e($post->correo); ?></h1>
    <a href="/entrada">Regresar</a>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('Diseños.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Sistema_Ent_Sal\resources\views/posts/show.blade.php ENDPATH**/ ?>