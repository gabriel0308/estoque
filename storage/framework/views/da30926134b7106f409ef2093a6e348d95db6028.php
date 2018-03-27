<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><?php echo e(__('Cadastro de Tipo')); ?></div>

                <div class="card-body">
                    <form method="POST" action="<?php echo e('AdicionaTipo'); ?>">
                        <?php echo csrf_field(); ?>

                        <div class="form-group row">
                            <label for="tipo" class="col-sm-4 col-form-label text-md-right"><?php echo e(__('Tipo')); ?></label>

                            <div class="col-md-6">
                                <input id="tipo" type="text" class="form-control<?php echo e($errors->has('email') ? ' is-invalid' : ''); ?>" name="tipo" value="<?php echo e(old('email')); ?>" required autofocus>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    <?php echo e(__('Gravar')); ?>

                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>