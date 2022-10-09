<?php $__env->startSection('content'); ?>
<div class="p-3 min-h-full flex flex-colum flex-wrap content-center justify-center drop-shadow-2xl">
    <div class="lg:w-2/6 flex flex-col bg-neutral-content rounded-3xl p-10">
        <div class="flex flex-row justify-center">
            <img src="<?php echo e(asset('img/logo.svg')); ?>" width="40%" class="h-24" />
        </div>
        <?php echo $__env->yieldContent('central'); ?>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('base::back.layouts.empty', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\papa2\vendor\sdkconsultoria\base\src/../views/back/layouts/widget/central.blade.php ENDPATH**/ ?>