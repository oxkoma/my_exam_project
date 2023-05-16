


<?php $__env->startSection('content'); ?>
<div class="col-2">
        <?php echo app('widget')->show('group'); ?>
</div>
<div class="col-10 pt-2 ">
<div class="container my-5 ">
<h2>Список студентов</h2>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First Name</th>
      <th scope="col">Last Name</th>
	  <th scope="col">Age</th>
	  <th scope="col">Email</th>
      <th scope="col">Group</th>
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
	 
	</tr>
	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	
  </tbody>
</table>
<div>
		<?php echo e($students->links()); ?>

	</div>
  </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master-front', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OneDrive\OneDrive - Дніпровський державний медичний університет\Робочий стіл\Шаг\OSPanel\domains\Exam\exam_09\site-app\resources\views/student/view.blade.php ENDPATH**/ ?>