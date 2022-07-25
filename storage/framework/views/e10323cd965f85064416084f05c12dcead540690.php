<?php $__env->startSection('title', 'add new items'); ?>
<?php $__env->startSection('content'); ?>
        <div class="col-md-12 card">
            <form
                action="<?php echo e(route('store-products')); ?>"
                class="card-body"
                method="post"
                enctype="multipart/form-data"
            >
                <?php echo csrf_field(); ?>
                <div class="form-group">
                    <h5>please select an excel file </h5>
                </div>
                <div class="form-group my-2">
                    <input
                        type="file"
                        name="file"
                        accept=".xlsx,.xls"
                        class="form-control <?php $__errorArgs = ['file'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                    >
                </div>
                <?php if (isset($component)) { $__componentOriginal3facbb459eedf29b74ea41c525678e34bdd4b822 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\ErrorMessage::class, ['field' => 'file']); ?>
<?php $component->withName('error-message'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal3facbb459eedf29b74ea41c525678e34bdd4b822)): ?>
<?php $component = $__componentOriginal3facbb459eedf29b74ea41c525678e34bdd4b822; ?>
<?php unset($__componentOriginal3facbb459eedf29b74ea41c525678e34bdd4b822); ?>
<?php endif; ?>
                <div class="form-group my-2">
                    <input
                        type="submit"
                        class="btn btn-primary form-control"
                        value="save products"
                    >
                </div>
                <?php if (isset($component)) { $__componentOriginalae0fc96714e2a5c93b226fc869a225dc21060012 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Message::class, []); ?>
<?php $component->withName('message'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalae0fc96714e2a5c93b226fc869a225dc21060012)): ?>
<?php $component = $__componentOriginalae0fc96714e2a5c93b226fc869a225dc21060012; ?>
<?php unset($__componentOriginalae0fc96714e2a5c93b226fc869a225dc21060012); ?>
<?php endif; ?>
            </form>
        </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/mac/Documents/laravel-project/filter/resources/views/product/create.blade.php ENDPATH**/ ?>