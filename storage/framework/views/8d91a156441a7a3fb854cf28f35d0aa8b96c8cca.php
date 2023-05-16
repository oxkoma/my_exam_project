

<?php $__env->startSection('content'); ?>
<h2>List Menus</h2>
<div class="container">
<a class="float-end btn btn-primary" href="<?php echo e(route('menus.create')); ?>"><img src="..\..\assets\add.png" class="pe-2">Add record</a>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Action</th>
	  <th scope="col">Content</th>
	  <th scope="col">Keywords</th>
      <th scope="col">Descriptions</th>
	  <th scope="col">Modify</th>
    </tr>
  </thead>
  <tbody>
	<?php $__currentLoopData = $menus; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $menu): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
      <th scope="row"><?php echo e($menu->id); ?></th>
      <td><?php echo e($menu->name); ?></td>
	  <td><?php echo e($menu->action); ?></td>
	  <td><?php echo e($menu->content); ?></td>
	  <td><?php echo e($menu->keywords); ?></td>
	  <td><?php echo e($menu->descriptions); ?></td>
	  <td>
		<form action="<?php echo e(route('menus.destroy', $menu->id)); ?>" method="POST">
			<a class="btn btn-info" href="<?php echo e(route('menus.show', $menu->id)); ?>"><img src="..\..\assets\view.png" class="pe-2">Show</a>
			<a class="btn btn-light" href="<?php echo e(route('menus.edit', $menu->id)); ?>"><img src="..\..\assets\edit.png" class="pe-2">Edit</a>

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
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OneDrive\OneDrive - Дніпровський державний медичний університет\Робочий стіл\Шаг\OSPanel\domains\Exam\exam_09\site-app\resources\views/menu/index.blade.php ENDPATH**/ ?>