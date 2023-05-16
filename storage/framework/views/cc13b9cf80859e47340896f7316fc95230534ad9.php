

<?php $__env->startSection('content'); ?>
<h2>List Students</h2>
<div class="container">
<a class="float-end btn btn-primary" href="<?php echo e(route('students.create')); ?>"><img src="..\..\assets\add.png" class="pe-2">Add record</a>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First Name</th>
      <th scope="col">Last Name</th>
	  <th scope="col">Age</th>
	  <th scope="col">Email</th>
      <th scope="col">Group</th>
	  <th scope="col">Modify</th>
    </tr>
  </thead>
  <tbody>
	<?php $__currentLoopData = $students; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $student): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
      <th scope="row"><?php echo e($student->id); ?></th>
      <td><?php echo e($student->fname); ?></td>
	  <td><?php echo e($student->lname); ?></td>
	  <td><?php echo e($student->age); ?></td>
	  <td><?php echo e($student->email); ?></td>
	  <td><?php echo e($groups[$student->group_id-1]->name); ?></td>
	  <td>
		<form action="<?php echo e(route('students.destroy', $student->id)); ?>" method="POST">
			<a class="btn btn-info" href="<?php echo e(route('students.show', $student->id)); ?>"><img src="..\..\assets\view.png" class="pe-2">Show</a>
			<a class="btn btn-light" href="<?php echo e(route('students.edit', $student->id)); ?>"><img src="..\..\assets\edit.png" class="pe-2">Edit</a>

			<?php echo csrf_field(); ?>
            <?php echo method_field('DELETE'); ?>
			<button type="submit" class="btn btn-danger"><img src="..\..\assets\bin.png" class="pe-2">Del</button>
		</form>  
	  </td>
	</tr>
	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	
  </tbody>
</table>
<div>
		<?php echo e($students->links()); ?>

	</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OneDrive\OneDrive - Дніпровський державний медичний університет\Робочий стіл\Шаг\OSPanel\domains\Exam\exam_09\site-app\resources\views/student/index.blade.php ENDPATH**/ ?>