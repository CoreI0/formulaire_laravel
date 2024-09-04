<?php $__currentLoopData = array_keys($senderInfo); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
	<?php $__currentLoopData = array_keys($senderInfo[$key]); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key2): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		<?php if($key2!="id"): ?>
			<?php echo e($key2); ?> : <?php echo e($senderInfo[$key][$key2]); ?>

			<br/>
		<?php endif; ?>
	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php /**PATH C:\Users\alist\proj_test\test\resources\views/render-email.blade.php ENDPATH**/ ?>