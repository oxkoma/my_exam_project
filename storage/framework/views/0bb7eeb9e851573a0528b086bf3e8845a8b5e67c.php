<div class="container-fluid">
  <div class="row flex-nowrap">
    <div class="bg-primary bg-gradient bg-opacity-75 col-auto min-vh-100">
      <div>
        <a class="d-flex text-decoration-none text-white align-items-center">
          <span class="fs-4 d-none d-sm-inline">Side Menu</span>
        </a>
        <nav class="nav flex-column" >
            <a class="nav-link  <?php echo e(Request::path()=='menus'? 'link-dark' : 'link-light'); ?>" href="menus">Menu</a>
            <a class="nav-link link-light <?php echo e(Request::path()=='students'? 'link-dark' : 'link-light'); ?>" href="students">Students</a>
        </nav>
        <hr>
        <?php $__currentLoopData = $menus; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $menu): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <a class="nav-link  <?php echo e(Request::path()=='menus'? 'link-dark' : 'link-light'); ?>" href="menus"><?php echo e($menu->name); ?></a>
      </div>
    </div>
  </div>
</div>

<?php /**PATH C:\OneDrive\OneDrive - Дніпровський державний медичний університет\Робочий стіл\Шаг\OSPanel\domains\Exam\exam_09\site-app\resources\views/navbar/sidebar.blade.php ENDPATH**/ ?>