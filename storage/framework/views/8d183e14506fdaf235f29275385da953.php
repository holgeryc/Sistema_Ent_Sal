<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema - <?php echo $__env->yieldContent('title'); ?></title>
    <meta name="description" content="<?php echo $__env->yieldContent('meta-description', 'Default meta description'); ?>">
    <?php echo app('Illuminate\Foundation\Vite')(['resources/css/app.css','resources/js/app.js']); ?>
    <!-- <link rel="stylesheet" href="/css/app.css">
    <script src="/is/app.js"></script> -->

</head>
<body>
    <?php echo $__env->make('Navegacion.navigation', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- Imprimimos el contenido de la variable de cada página -->

    <?php echo $__env->yieldContent('content'); ?>
</body>
</html><?php /**PATH C:\xampp\htdocs\Sistema_Ent_Sal\resources\views/Diseños/app.blade.php ENDPATH**/ ?>