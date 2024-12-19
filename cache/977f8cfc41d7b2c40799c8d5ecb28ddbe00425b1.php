<?php $__env->startSection('title', $title); ?>

<?php $__env->startSection('content'); ?>
  <?php if($user): ?>
  <h2>Un usuario <?php echo e($user['id']); ?></h2>
  <p><?php echo e($user['id']); ?></p>
  <p><?php echo e($user['name']); ?></p>
  <?php else: ?>
  <h2>Usuario no encontrado</h2>
  <?php endif; ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>