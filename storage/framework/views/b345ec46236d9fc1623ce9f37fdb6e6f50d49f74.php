

<?php $__env->startSection('content'); ?>
<div class="my-5 w-50 mx-auto">
	<form action="<?php echo e(route('user.login')); ?>" method="POST">
		<?php echo csrf_field(); ?>
		<h3>Sign in</h3>

		<div class="mb-3 ">
			<label for="email" class="form-label">Email</label>
			<input type="email" class="form-control" name="email" placeholder="Email">
			<?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
				<div class="alert alert-danger"><?php echo e($message); ?></div>
			<?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
		</div>
		<div class="mb-3">
			<label for="password" class="form-label">Password</label>
			<input type="password" class="form-control" name="password" placeholder="Password">
		</div>
			<?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
				<div class="alert alert-danger"><?php echo e($message); ?></div>
			<?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
		<button class="btn btn-primary" type="submit">Submit</button>
	</form>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master-front', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OneDrive\OneDrive - Дніпровський державний медичний університет\Робочий стіл\Шаг\OSPanel\domains\Exam\exam_09\site-app\resources\views/login.blade.php ENDPATH**/ ?>