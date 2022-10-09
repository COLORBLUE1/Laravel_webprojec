<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="csrf-token"   content="<?php echo e(csrf_token()); ?>">
    <meta property="og:title" content="<?php echo $__env->yieldContent('title', config('app.name')); ?>" />
    <meta property="og:type"  content="<?php echo $__env->yieldContent('og:type', 'website'); ?>" />
    <meta property="og:url"   content="<?php echo $__env->yieldContent('og:url', URL::current()); ?>" />
    <meta property="og:image" content="<?php echo $__env->yieldContent('og:image', asset('assets/img/logo/logo-1.svg')); ?>" />
    <meta name="description"  content="<?php echo $__env->yieldContent('description', ''); ?>">
    <meta name="author"       content="<?php echo $__env->yieldContent('author', config('app.name')); ?>">
    <title> <?php echo $__env->yieldContent('title', config('app.name')); ?></title>
    <?php echo app('Illuminate\Foundation\Vite')(['resources/front/css/app.css', 'resources/front/js/app.js']); ?>
</head>
<body data-theme="<?php echo e(Cache::get('theme', config('base.theme'))); ?>" >
    <?php echo $__env->yieldContent('content'); ?>
</body>
</html>

<?php /**PATH C:\xampp\htdocs\papa2\resources\views/front/layouts/app.blade.php ENDPATH**/ ?>