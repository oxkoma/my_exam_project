<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>
   <!------header------->
   <header>
      <?php echo $__env->make('navbar.topbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
   </header>
	 <div class="container-fluid text-center">
    <div class="row">
    <!------menu sidebar left------->

      <!------main area------->
      
        <?php echo $__env->yieldContent('content'); ?>

    </div>
   </div>
 <!------footer------->
   <footer class="fixed-bottom bd-footer py-4 py-md-5 bg-primary text-white bg-gradient">
    <div class="container-fluid text-center">
      <p>by Oksana Kravchenko&copy;<br/>
      <?php echo e(date('Y')); ?> year</p>
    </div>
   </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>
<?php /**PATH C:\OneDrive\OneDrive - Дніпровський державний медичний університет\Робочий стіл\Шаг\OSPanel\domains\Exam\exam_09\site-app\resources\views/layouts/master-front.blade.php ENDPATH**/ ?>