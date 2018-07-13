<?php $__env->startSection('content'); ?>
<div class="container">
	<div id="basic-form" class="section">
		<div class="row">  
			<div class="col s12 m12 l6 offset-l3">   
				<div class="card-panel">
					<h4 class="header2">Login</h4>
						<div class="row">
					
							<form class="col s12" method="POST" action="<?php echo e('ValidaLogin'); ?>">
								<?php echo csrf_field(); ?>

									<?php if(session('loginErrors')): ?>
										

										<script type='text/javascript'>
											 $(document).ready(function() {

												M.toast({html: "<?php echo e(Session::get('loginErrors')); ?>", classes:'red accent-2'});

											}); 
										</script>

									<?php endif; ?>

								<div class="row">
									<div class="input-field col s12">                                    
										<input id="MatriculaAnalista" type="text" name="MatriculaAnalista" value="<?php echo e(old('email')); ?>" required>
										<label for="MatriculaAnalista "><?php echo e(__('Matricula')); ?></label>
									</div>
								</div>

								<div class="row">
									<div class="input-field col s12">
										<input id="password" type="password" class="form-control<?php echo e($errors->has('password') ? ' is-invalid' : ''); ?>" name="password" required>
										<label for="password" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Senha')); ?></label>
									</div>
								</div>

								<div class="row">
									<div class="input-field col s12">
										<button type="submit" class="btn pink darken-2 waves-effect waves-light right">
											<?php echo e(__('Entrar')); ?>

										</button>
									</div>
								</div>
							</form>
						</div>
					</div>
			</div>
		</div>
	</div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>