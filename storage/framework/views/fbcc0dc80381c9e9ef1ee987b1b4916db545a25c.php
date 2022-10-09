<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="csrf-token"   content="<?php echo e(csrf_token()); ?>">
    <meta name="Description" content="<?php echo $__env->yieldContent('description'); ?>">
    <title> <?php echo $__env->yieldContent('title', config('app.name')); ?></title>
    <?php echo app('Illuminate\Foundation\Vite')(['resources/back/css/app.css', 'resources/back/js/app.js']); ?>
</head>
<body class="h-screen" data-theme="<?php echo e(Cache::get('theme', config('base.theme'))); ?>">
    <?php echo $__env->yieldContent('content'); ?>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\papa2\vendor\sdkconsultoria\base\src/../views/back/layouts/empty.blade.php ENDPATH**/ ?>