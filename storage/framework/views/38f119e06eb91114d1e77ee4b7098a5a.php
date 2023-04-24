

<?php $__env->startSection('title', 'Formulario'); ?>

<?php $__env->startSection('meta-description', 'Formulario para ingresar datos'); ?>

<?php $__env->startSection('content'); ?>
    <h1>Crar nuevo formulario</h1>
    <form action="<?php echo e(route('posts.store')); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <label for="">
            Title <br>
            <input name="title" type="text">
        </label><br>
        <label for="">
            cuerpo<br>
            <textarea name="body">
            </textarea>
        </label><br>
        <button type="submit">
                Enviar
        </button><br>
    </form>
    <a href="/entrada">Regresar</a>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('Diseños.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Sistema_Ent_Sal\resources\views/posts/formulario.blade.php ENDPATH**/ ?>