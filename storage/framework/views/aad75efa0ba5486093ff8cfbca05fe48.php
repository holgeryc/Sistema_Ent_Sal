

<?php $__env->startSection('title', 'Entrada'); ?>

<?php $__env->startSection('meta-description', 'Entrada meta description'); ?>

<?php $__env->startSection('content'); ?>
    <header class="px-6 py-4 space-y-2 text-center">
        <h1 class="font-serif text-3xl text-center text-sky-600 dark:text-sky-500">Entrada</h1>
        <a  class="inline-flex items-center px-4 py-2 text-xs font-semibold tracking-widest text-center text-white uppercase transition duration-150 ease-in-out border border-transparent rounded-md dark:text-sky-200 bg-sky-800 hover:bg-sky-700 active:bg-sky-900 focus:outline-none focus:border-sky-900 focus:shadow-outline-sky" href="<?php echo e(route('posts.formulario')); ?>">Ingresos</a>

    </header>
    <main class="grid w-full gap-4 px-4 max-w-7xl sm:grid-cols-2 md:grid-cols-3">

        <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>   
        <div class="max-w-3xl px-4 py-2 space-y-4 bg-white rounded shadow dark:bg-slate-800">
            <h1 class="text-xl text-slate-600 dark:text-slate-300 hover:underline">
                <a href="<?php echo e(route('posts.show', $post)); ?>">
                    <?php echo e($post-> Voucher); ?>

                    <br>
                    <?php echo e($post-> Nombre); ?><br>
                    <?php echo e($post-> Detalle); ?><br>
                    <?php echo e($post-> Monto); ?>

                </a>
            </h1> &nbsp;
            <a class="inline-flex items-center text-xs font-semibold tracking-widest text-center uppercase transition duration-150 ease-in-out dark:text-slate-400 text-slate-500 hover:text-slate-600 dark:hover:text-slate-500 focus:outline-none focus:border-slate-200" href="<?php echo e(route('posts.editar', $post)); ?>">Editar</a>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    </main>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('Diseños.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Sistema_Ent_Sal\resources\views/Entrada.blade.php ENDPATH**/ ?>