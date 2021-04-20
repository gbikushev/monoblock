<div class="<?php echo e($viewClass['form-group'], false); ?> <?php echo !$errors->has($errorKey) ? '' : 'has-error'; ?>">

    <label for="<?php echo e($id, false); ?>" class="<?php echo e($viewClass['label'], false); ?> control-label"><?php echo e($label, false); ?></label>

    <div class="<?php echo e($viewClass['field'], false); ?>">

        <?php echo $__env->make('admin::form.error', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <div class="input-group">

            <?php if($prepend): ?>
            <span class="input-group-addon"><?php echo $prepend; ?></span>
            <?php endif; ?>

            <input <?php echo $attributes; ?> />

            <?php if($append): ?>
                <span class="input-group-addon clearfix"><?php echo $append; ?></span>
            <?php endif; ?>

            <?php if(isset($btn)): ?>
                <span class="input-group-btn">
                  <?php echo $btn; ?>

                </span>
            <?php endif; ?>

        </div>

        <?php echo $__env->make('admin::form.help-block', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    </div>
</div>
<?php /**PATH W:\domains\test.com\vendor\encore\laravel-admin\src/../resources/views/form/input.blade.php ENDPATH**/ ?>