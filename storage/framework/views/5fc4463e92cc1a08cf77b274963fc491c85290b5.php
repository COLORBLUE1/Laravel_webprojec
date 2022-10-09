<?php $__env->startSection('central'); ?>
    <form action="<?php echo e(route('login')); ?>" method="post" novalidate>
        <?php echo csrf_field(); ?>
        <div class="form-control w-full">
            <label class="input-group">
                <span><?php echo Base::icon('mail', ['class' => 'h-3']); ?></span>
                <input type="text" name="email" placeholder="Correo Electronico" class="input input-bordered w-full" value="<?php echo e(old('email')); ?>" required/>
            </label>
            <label class="label">
                <small class="text-error">
                    <ul>
                        <?php $__currentLoopData = $errors->get('email'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li v-for="error in errors" :key="error"> <?php echo e($error); ?> </li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                </small>
            </label>
        </div>

        <div class="form-control w-full">
            <label class="input-group">
                <span><?php echo Base::icon('lock-closed', ['class' => 'h-3']); ?></span>
                <input type="password" name="password" placeholder="Contraseña" class="input input-bordered w-full" required />
            </label>
            <label class="label">
                <small class="text-error">
                    <ul>
                        <?php $__currentLoopData = $errors->get('password'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li v-for="error in errors" :key="error"> <?php echo e($error); ?> </li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                </small>
            </label>
        </div>

        <button class="w-full mt-1 btn" type="submit"><?php echo e(__('auth.login')); ?></button>
        <a href="<?php echo e(route('register')); ?>" class="w-full mt-2 btn btn-primary" type="button"><?php echo app('translator')->get('auth.register'); ?></a>
        <a href="<?php echo e(route('password.request')); ?>" class="w-full mt-2 btn btn-outline btn-warning" type="button"><?php echo e(__('auth.forgot')); ?></a>

        <div class="mt-3 flex justify-center">
            <a class="tracking-wider text-white bg-blue-500 px-5 py-2 text-sm rounded leading-loose mx-2 font-semibold" href="<?php echo e(route('social-auth', 'facebook')); ?>"> Facebook</a>
            <a class="tracking-wider text-white bg-red-500 px-5 py-2 text-sm rounded leading-loose mx-2 font-semibold"  href="<?php echo e(route('social-auth', 'google')); ?>"> Google </a>
        </div>
    </form>
    <?php echo $__env->make('base::auth.sso', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('base::back.layouts.widget.central', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\papa2\vendor\sdkconsultoria\base\src/../views/auth/login.blade.php ENDPATH**/ ?>