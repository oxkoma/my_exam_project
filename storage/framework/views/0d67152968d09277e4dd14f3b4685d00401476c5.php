
<?php $__env->startSection('content'); ?>

<div class="float-start mb-3">
   	<a class="btn btn-primary" href= "<?php echo e(route('users.index')); ?>">Back</a> 
</div>

<?php if($errors->any()): ?>
        <div class="alert alert-danger">
		<strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li><?php echo e($error); ?></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>
    <?php endif; ?>

<div class="mt-5">
	<form action="<?php echo e(route('users.store')); ?>" method="POST">
		<?php echo csrf_field(); ?>
		<h3>Create user</h3>
		<div class="mb-3">
			<label for="fname" class="form-label">Name</label>
			<input type="text" class="form-control" name="name" placeholder="Name">
		</div>
		<div class="mb-3">
			<label for="email" class="form-label">Email</label>
			<input type="email" class="form-control" name="email" placeholder="Email">
		</div>
		<div class="mb-3">
			<label for="password" class="form-label">Password</label>
			<input type="password" class="form-control" name="password" placeholder="Password">
		</div>

		<button class="btn btn-primary" type="submit">Submit</button>
	</form>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OneDrive\OneDrive - Дніпровський державний медичний університет\Робочий стіл\Шаг\OSPanel\domains\Exam\exam_09\site-app\resources\views/user/create.blade.php ENDPATH**/ ?>