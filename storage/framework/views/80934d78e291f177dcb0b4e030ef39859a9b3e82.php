

<?php $__env->startSection('content'); ?>
<h2>List Groups</h2>
<div class="container">
<a class="float-end btn btn-primary" href="<?php echo e(route('menus.create')); ?>"><img src="..\..\assets\add.png" class="pe-2">Add record</a>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
	  <th scope="col">Modify</th>
    </tr>
  </thead>
  <tbody>
	<?php $__currentLoopData = $groups; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $group): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
      <th scope="row"><?php echo e($group->id); ?></th>
      <td><?php echo e($group->name); ?></td>
	  <td>
		<form action="<?php echo e(route('groups.destroy', $group->id)); ?>" method="POST">
			<a class="btn btn-info" href="<?php echo e(route('groups.show', $group->id)); ?>"><img src="..\..\assets\view.png" class="pe-2">Show</a>
			<a class="btn btn-light" href="<?php echo e(route('groups.edit', $group->id)); ?>"><img src="..\..\assets\edit.png" class="pe-2">Edit</a>

			<?php echo csrf_field(); ?>
            <?php echo method_field('DELETE'); ?>
			<button type="submit" class="btn btn-danger"><img src="..\..\assets\bin.png" class="pe-2">Del</button>
		</form>  
	  </td>
	</tr>
	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	
  </tbody>
</table>

</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OneDrive\OneDrive - Дніпровський державний медичний університет\Робочий стіл\Шаг\OSPanel\domains\Exam\exam_09\site-app\resources\views/group/index.blade.php ENDPATH**/ ?>