<?php $__env->startSection('title', 'profile'); ?>
<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header"><?php echo e(__('Profile')); ?></div>

                    <div class="card-body">
                        <h6>change username :</h6>
                        <form action="<?php echo e(route('change-username')); ?>" class="row w-100" method="post">
                            <?php echo csrf_field(); ?>
                            <div class="form-group col-md-5 my-2">
                                <input type="text" value="<?php echo e(auth()->user()->email); ?>" name="username" placeholder="new username" class="form-control <?php $__errorArgs = ['username'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
                                <?php if (isset($component)) { $__componentOriginal3facbb459eedf29b74ea41c525678e34bdd4b822 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\ErrorMessage::class, ['field' => 'username']); ?>
<?php $component->withName('error-message'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal3facbb459eedf29b74ea41c525678e34bdd4b822)): ?>
<?php $component = $__componentOriginal3facbb459eedf29b74ea41c525678e34bdd4b822; ?>
<?php unset($__componentOriginal3facbb459eedf29b74ea41c525678e34bdd4b822); ?>
<?php endif; ?>
                            </div>
                            <div class="form-group col-md-2 my-2">
                                <input type="submit" class="btn btn-primary" value="change username">
                            </div>
                        </form>
                        <hr>
                        <h6>change password :</h6>
                        <form action="<?php echo e(route('change-password')); ?>" class="row w-100" method="post">
                            <?php echo csrf_field(); ?>
                            <div class="form-group col-md-6 my-2">
                                <input type="password" name="password" placeholder="password" class="form-control <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
                                <?php if (isset($component)) { $__componentOriginal3facbb459eedf29b74ea41c525678e34bdd4b822 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\ErrorMessage::class, ['field' => 'password']); ?>
<?php $component->withName('error-message'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal3facbb459eedf29b74ea41c525678e34bdd4b822)): ?>
<?php $component = $__componentOriginal3facbb459eedf29b74ea41c525678e34bdd4b822; ?>
<?php unset($__componentOriginal3facbb459eedf29b74ea41c525678e34bdd4b822); ?>
<?php endif; ?>
                            </div>
                            <div class="form-group col-md-6 my-2">
                                <input type="password" name="new_password" placeholder="new password" class="form-control <?php $__errorArgs = ['new_password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
                                <?php if (isset($component)) { $__componentOriginal3facbb459eedf29b74ea41c525678e34bdd4b822 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\ErrorMessage::class, ['field' => 'new_password']); ?>
<?php $component->withName('error-message'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal3facbb459eedf29b74ea41c525678e34bdd4b822)): ?>
<?php $component = $__componentOriginal3facbb459eedf29b74ea41c525678e34bdd4b822; ?>
<?php unset($__componentOriginal3facbb459eedf29b74ea41c525678e34bdd4b822); ?>
<?php endif; ?>
                            </div>
                            <div class="form-group col-md-6 my-2">
                                <input type="password" name="new_password_confirmation" placeholder="confirm new password" class="form-control <?php $__errorArgs = ['new_password_confirmation'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">
                                <?php if (isset($component)) { $__componentOriginal3facbb459eedf29b74ea41c525678e34bdd4b822 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\ErrorMessage::class, ['field' => 'new_password_confirmation']); ?>
<?php $component->withName('error-message'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal3facbb459eedf29b74ea41c525678e34bdd4b822)): ?>
<?php $component = $__componentOriginal3facbb459eedf29b74ea41c525678e34bdd4b822; ?>
<?php unset($__componentOriginal3facbb459eedf29b74ea41c525678e34bdd4b822); ?>
<?php endif; ?>
                            </div>
                            <div class="form-group col-md-2 my-2">
                                <input type="submit" class="btn btn-primary" value="change password">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
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
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\M.Amin\Desktop\github\filter\resources\views/profile.blade.php ENDPATH**/ ?>