<?php $__env->startPush('scripts'); ?>
    <script src="<?php echo e(asset('js/message.js')); ?>"></script>
<?php $__env->stopPush(); ?>
<?php if(session()->has('success')): ?>
    <div
        class="col-md-6 bg-success mw-100 bg-opacity-75 text-white fixed-bottom my-2 p-1 rounded message-area"
        style="transition: margin-left 1s"
    >
        <?php echo e(session('success')); ?>

    </div>
<?php endif; ?>
<?php if(session()->has('failed')): ?>
    <div
        class="col-md-6 bg-danger mw-100 bg-opacity-75 text-white fixed-bottom my-2 p-1 rounded message-area"
        style="transition: margin-left 1s"
    >
        <?php echo e(session('failed')); ?>

    </div>
<?php endif; ?>
<?php /**PATH /Users/mac/Documents/laravel-project/filter/resources/views/components/message.blade.php ENDPATH**/ ?>