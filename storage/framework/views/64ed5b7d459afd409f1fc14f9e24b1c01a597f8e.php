
<div class="d-inline-block mx-1" style="width: 70px;">
    <input type="checkbox" name="ram[]" value="<?php echo e($ram); ?>" <?php if(in_array($ram, request('ram') ?? [])): ?> checked <?php endif; ?>><?php echo e($ram); ?>GB
</div>
<?php /**PATH /Users/mac/Documents/laravel-project/filter/resources/views/components/ram-checkbox.blade.php ENDPATH**/ ?>