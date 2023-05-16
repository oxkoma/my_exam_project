
<?php $__env->startSection('content'); ?>

<div class="float-start mb-3">
   	<a class="btn btn-primary" href= "<?php echo e(route('students.index')); ?>">Back</a> 
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
	<form action="<?php echo e(route('students.store')); ?>" method="POST">
		<?php echo csrf_field(); ?>
		<h3>Create student</h3>
		<div class="mb-3">
			<label for="fname" class="form-label">First name</label>
			<input type="text" class="form-control" name="fname" placeholder="First name">
		</div>
		<div class="mb-3">
			<label for="lname" class="form-label">Last name</label>
			<input type="text" class="form-control" name="lname" placeholder="Last name">
		</div>
		<div class="mb-3">
			<label for="age" class="form-label">Age</label>
			<input type="number" class="form-control" name="age" placeholder="Age">
		</div>
		<div class="mb-3">
			<label for="email" class="form-label">Email</label>
			<input type="email" class="form-control" name="email" placeholder="Email">
		</div>
		<div class="mb-3">
			<label for="group" class="form-label">Group</label>
				<select class="form-select" aria-label="Default select example" name="group_id">
			<?php $__currentLoopData = $groups; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $group): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				<option value="<?php echo e($group->id); ?>"><?php echo e($group->name); ?></option>
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
			</select>
		</div>
		<button class="btn btn-primary" type="submit">Submit</button>
	</form>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OneDrive\OneDrive - Дніпровський державний медичний університет\Робочий стіл\Шаг\OSPanel\domains\Exam\exam_09\site-app\resources\views/student/create.blade.php ENDPATH**/ ?>