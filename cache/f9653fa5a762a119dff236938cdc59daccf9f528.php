<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>App</title>
</head>
<body>
  <nav>
    <ul>
      <?php echo $__env->make('layouts.menu', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    </ul>
  </nav>
  <h1><?php echo $__env->yieldContent('title'); ?></h1>
  <main>
    <?php $__env->startSection('content'); ?>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis ipsum, deserunt reiciendis rem temporibus assumenda nostrum aperiam praesentium voluptates quos ab aliquid natus placeat magnam earum soluta laboriosam aut amet.</p>
    <?php echo $__env->yieldSection(); ?>
  </main>
</body>
</html>