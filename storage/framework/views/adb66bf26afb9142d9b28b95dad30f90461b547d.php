<?php $__env->startSection('central'); ?>
    <form class="" action="<?php echo e(route('register')); ?>" method="post" novalidate>
       <?php echo csrf_field(); ?>
       <p class="text-center text-gray-500 fancy"><?php echo app('translator')->get('auth.register'); ?></p>

       <div class="form-control w-full">
            <input type="text" name="email" placeholder="Correo Electronico" class="input input-bordered w-full" value="<?php echo e(old('email')); ?>" required />
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
            <input type="text" name="name" placeholder="Nombre" class="input input-bordered w-full" value="<?php echo e(old('name')); ?>" required />
            <label class="label">
                <small class="text-error">
                    <ul>
                        <?php $__currentLoopData = $errors->get('name'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li v-for="error in errors" :key="error"> <?php echo e($error); ?> </li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                </small>
            </label>
        </div>

        <div class="form-control w-full">
            <input type="text" name="lastname" placeholder="Apellido Materno" class="input input-bordered w-full" value="<?php echo e(old('lastname')); ?>" required />
            <label class="label">
                <small class="text-error">
                    <ul>
                        <?php $__currentLoopData = $errors->get('lastname'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li v-for="error in errors" :key="error"> <?php echo e($error); ?> </li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                </small>
            </label>
        </div>

        <div class="form-control w-full">
            <input type="text" name="lastname_2" placeholder="Apellido Paterno" class="input input-bordered w-full" value="<?php echo e(old('lastname_2')); ?>" required />
            <label class="label">
                <small class="text-error">
                    <ul>
                        <?php $__currentLoopData = $errors->get('lastname_2'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li v-for="error in errors" :key="error"> <?php echo e($error); ?> </li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                </small>
            </label>
        </div>

        <div class="form-control w-full">
            <input type="password" name="password" placeholder="Contraseña" class="input input-bordered w-full" value="<?php echo e(old('password')); ?>" required />
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

        <div class="form-control w-full">
            <input type="password" name="password_confirmation" placeholder="Confirmar contraseña" class="input input-bordered w-full" value="<?php echo e(old('password_confirmation')); ?>" required />
            <label class="label">
                <small class="text-error">
                    <ul>
                        <?php $__currentLoopData = $errors->get('password_confirmation'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li v-for="error in errors" :key="error"> <?php echo e($error); ?> </li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                </small>
            </label>
        </div>

       <button class="w-full mt-2 btn" type="submit"><?php echo app('translator')->get('auth.create'); ?></button>
       <a class="w-full mt-2 btn btn-primary" type="button" href="<?php echo e(route('login')); ?>"><?php echo app('translator')->get('auth.log_in'); ?></a>

       <div class="mt-3 flex justify-center">
            <a class="tracking-wider text-white bg-blue-500 px-5 py-2 text-sm rounded leading-loose mx-2 font-semibold" href="<?php echo e(route('social-auth', 'facebook')); ?>"> Facebook</a>
            <a class="tracking-wider text-white bg-red-500 px-5 py-2 text-sm rounded leading-loose mx-2 font-semibold"  href="<?php echo e(route('social-auth', 'google')); ?>"> Google </a>
        </div>
    </form>
    <?php echo $__env->make('base::auth.sso', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('base::back.layouts.widget.central', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\papa2\vendor\sdkconsultoria\base\src/../views/auth/register.blade.php ENDPATH**/ ?>