

<?php $__env->startSection('content'); ?>
<div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Show Student</h2>
            </div>
            <div class="float-start">
                <a class="btn btn-primary" href="<?php echo e(route('students.index')); ?>"> Back</a>
            </div>
        </div>
    </div>
   
    <div class="float-start mt-3">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>First Name:</strong>
                <?php echo e($student->fname); ?>

            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Last Name:</strong>
                <?php echo e($student->lname); ?>

            </div>
        </div>

		<div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Age:</strong>
                <?php echo e($student->age); ?>

            </div>
        </div>
		<div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Email:</strong>
                <?php echo e($student->email); ?>

            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Group:</strong>
                <?php echo e($groups[$student->group_id - 1]->name); ?>

            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OneDrive\OneDrive - Дніпровський державний медичний університет\Робочий стіл\Шаг\OSPanel\domains\Exam\exam_09\site-app\resources\views/student/show.blade.php ENDPATH**/ ?>