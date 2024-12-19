<?php $__env->startSection('title', $title); ?>

<?php $__env->startSection('content'); ?>
  <h2>Un usuario <?php echo e($client['id']); ?></h2>
  <p><?php echo e($client['id']); ?></p>
  <p><?php echo e($client['name']); ?></p>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>