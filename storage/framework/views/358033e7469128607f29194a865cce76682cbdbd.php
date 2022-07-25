<?php $__env->startSection('title', 'products'); ?>
<?php $__env->startPush('styles'); ?>
    <link rel="stylesheet" href="<?php echo e(asset('jq-ui/jquery-ui.css')); ?>">
<?php $__env->stopPush(); ?>
<?php $__env->startPush('scripts'); ?>
    <script src="<?php echo e(asset('jq-ui/jquery-ui.js')); ?>"></script>
    <script src="<?php echo e(asset('js/range-slider.js')); ?>"></script>
    <script src="<?php echo e(asset('js/functions.js')); ?>"></script>
<?php $__env->stopPush(); ?>
<?php $__env->startSection('content'); ?>
    <div class="card mb-4 container">
        <form
            action="/"
            method="get"
            class="row card-body"
        >
            <div class="col-md-6">
                <p class="my-2 border-bottom">storage range</p>
                <input type="text" value="<?php echo e(request('storage')); ?>" name="storage" id="amount" readonly style="border:0; font-weight:bold;">
                <div id="slider-range"></div>
            </div>
            <div class="col-md-6">
                <p class="my-2 border-bottom">RAM</p>
                <?php $__currentLoopData = [2,4,8,12,16,24,32,48,64,96,128]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ram): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php if (isset($component)) { $__componentOriginald3514d8ce4199c2b6ae81ffa290567dbb0f70e0b = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\RamCheckbox::class, ['ram' => $ram]); ?>
<?php $component->withName('ram-checkbox'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginald3514d8ce4199c2b6ae81ffa290567dbb0f70e0b)): ?>
<?php $component = $__componentOriginald3514d8ce4199c2b6ae81ffa290567dbb0f70e0b; ?>
<?php unset($__componentOriginald3514d8ce4199c2b6ae81ffa290567dbb0f70e0b); ?>
<?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
            <div class="col-md-6">
                <p class="my-2 border-bottom">Harddisk type</p>
                <select name="hard" id="" class="form-control">
                    <option value="">select an option</option>
                    <option value="SAS" <?php if(request('hard') == 'SAS'): ?> selected <?php endif; ?>>SAS</option>
                    <option value="SATA" <?php if(request('hard') == 'SATA'): ?> selected <?php endif; ?>>SATA</option>
                    <option value="SSD" <?php if(request('hard') == 'SSD'): ?> selected <?php endif; ?>>SSD</option>
                </select>
            </div>
            <div class="col-md-6">
                <p class="my-2 border-bottom">Location</p>
                <select name="location" class="form-control">
                    <option value="">select an option</option>
                    <?php $__currentLoopData = $locations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $location): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($location); ?>" <?php if(request('location') == $location): ?> selected <?php endif; ?>><?php echo e($location); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            </div>
            <div class="col-md-3">
                <input type="submit" class="btn btn-primary my-2 form-control" value="filter results">
            </div>
            <div class="col-md-3">
                <a href="<?php echo e(route('index')); ?>" class="my-2 btn btn-warning">reset filters</a>
            </div>
        </form>
    </div>
    <?php if(auth()->guard()->check()): ?>
        <?php if(count($products)): ?>
            <div class="card container mb-4">
                <form action="<?php echo e(route('delete-all')); ?>" class="card-body row" method="post">
                    <?php echo csrf_field(); ?>
                    <div class="col-md-6">
                        <input type="button" class="btn btn-danger delete-all-btn" value="delete all records">
                        <input type="submit" class="delete-all d-none">
                    </div>
                </form>
            </div>
        <?php endif; ?>
    <?php endif; ?>
    <div class="col-md-12 card px-2 container" style="overflow: scroll;">
        <?php if($products->count()): ?>
        <table class="card-body table table-striped table-borderless table-hover table-responsive text-center mw-100">
            <thead>
                <tr>
                    <th>Model</th>
                    <th>RAM</th>
                    <th>HDD</th>
                    <th>Location</th>
                    <th>Price</th>
                    <?php if(auth()->guard()->check()): ?>
                        <th></th>
                    <?php endif; ?>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td class="align-middle"><?php echo e($product->model); ?></td>
                        <td class="align-middle"><?php echo e($product->ram); ?></td>
                        <td class="align-middle"><?php echo e($product->hdd); ?></td>
                        <td class="align-middle"><?php echo e($product->location); ?></td>
                        <td class="align-middle"><?php echo e($product->price . ' ' . $product->unit); ?></td>
                        <?php if(auth()->guard()->check()): ?>
                            <td class="align-middle">
                                <form action="<?php echo e(route('delete', $product->id)); ?>">
                                    <input type="submit" class="btn btn-sm btn-danger" value="delete">
                                </form>
                            </td>
                        <?php endif; ?>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
        <?php else: ?>
            <div class="card-body text-center mx-2">
                no products available
            </div>
        <?php endif; ?>
        <div class="mx-auto">
            <?php echo e($products->links('vendor/pagination/bootstrap-4')); ?>

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

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\M.Amin\Desktop\github\filter\resources\views/product/index.blade.php ENDPATH**/ ?>