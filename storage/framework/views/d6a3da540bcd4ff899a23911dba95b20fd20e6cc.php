<div>
    <?php if(config('base.hybridauth.enabled')): ?>
        <div class="text-center">
            <?php if(config('base.hybridauth.facebook.enabled')): ?>
                <a href="<?php echo e(route('social-auth', 'facebook')); ?>" class="btn btn-social-icon mr-1 mb-1 btn-outline-facebook"><span class="la la-facebook"></span></a>
            <?php endif; ?>
            <?php if(config('base.hybridauth.twitter.enabled')): ?>
                <a href="<?php echo e(route('social-auth', 'twitter')); ?>" class="btn btn-social-icon mr-1 mb-1 btn-outline-twitter"><span class="la la-twitter"></span></a>
            <?php endif; ?>
            <?php if(config('base.hybridauth.google.enabled')): ?>
                <a href="<?php echo e(route('social-auth', 'google')); ?>" class="btn btn-social-icon mr-1 mb-1 btn-outline-google"><span class="la la-google font-medium-4"></span></a>
            <?php endif; ?>
        </div>
    <?php endif; ?>
</div><?php /**PATH C:\xampp\htdocs\papa2\vendor\sdkconsultoria\base\src/../views/auth/sso.blade.php ENDPATH**/ ?>