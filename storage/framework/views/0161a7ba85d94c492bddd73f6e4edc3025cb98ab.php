<?php if($data): ?>
<div class="container-fluid">
  <div class="row flex-nowrap">
    <div class="bg-primary bg-gradient bg-opacity-75 col-auto min-vh-100">
      <div>
        <a class="d-flex text-decoration-none text-white align-items-center">
          <span class="fs-4 d-none d-sm-inline">Side Menu</span>
        </a>
        <nav class="nav flex-column" >
    <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
        <a class="nav-link  <?php echo e(Request::path()=='{{ route($item->action)); ?>'? 'link-dark' : 'link-light' }}" href="<?php echo e(route($item->action)); ?>"><?php echo e($item->name); ?></class=>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	</nav>
      </div>
    </div>
  </div>
</div>
<?php endif; ?><?php /**PATH C:\OneDrive\OneDrive - Дніпровський державний медичний університет\Робочий стіл\Шаг\OSPanel\domains\Exam\exam_09\site-app\app/Widgets/view/menu.blade.php ENDPATH**/ ?>