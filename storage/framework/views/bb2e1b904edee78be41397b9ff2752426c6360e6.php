

<?php $__env->startSection('content'); ?>
<div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Show Menu</h2>
            </div>
            <div class="float-start">
                <a class="btn btn-primary" href="<?php echo e(route('menus.index')); ?>"> Back</a>
            </div>
        </div>
    </div>
   
    <div class="float-start mt-3">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name:</strong>
                <?php echo e($menu->name); ?>

            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Action:</strong>
                <?php echo e($menu->action); ?>

            </div>
        </div>

		<div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Content:</strong>
                <?php echo e($menu->content); ?>

            </div>
        </div>
		<div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Keywords:</strong>
                <?php echo e($menu->keywords); ?>

            </div>
        </div>
		<div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Descriptions:</strong>
                <?php echo e($menu->descriptions); ?>

            </div>
        </div>
    
    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OneDrive\OneDrive - Дніпровський державний медичний університет\Робочий стіл\Шаг\OSPanel\domains\Exam\exam_09\site-app\resources\views/menu/show.blade.php ENDPATH**/ ?>