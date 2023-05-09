

<?php $__env->startSection('title', 'Inicio'); ?>

<?php $__env->startSection('meta-description', 'Inicio meta description'); ?>

<?php $__env->startSection('content'); ?>
    <h1 class="my-4 font-serif text-3xl text-center text-sky-600 dark:text-sky-500"><?php echo e($post->Monto); ?></h1>
    <div class="flex flex-col max-w-xl px-8 py-4 mx-auto bg-white rounded shadow h-96 dark:bg-slate-800">
        <!-- <p class="flex-1 leading-normal text-slate-600 dark:text-slate-400"><?php echo e($post->body); ?></p> -->

        <a class="mr-auto text-sm font-semibold underline border-2 border-transparent rounded dark:text-slate-300 text-slate-600 focus:border-slate-500 focus:outline-none" href="/entrada">Regresar</a>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('Diseños.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Sistema_Ent_Sal\resources\views/posts/show.blade.php ENDPATH**/ ?>