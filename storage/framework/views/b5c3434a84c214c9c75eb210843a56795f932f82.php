
<?php $__env->startSection('title', 'Портфолио'); ?>
<?php $__env->startSection('description', 'Страница со списком моих работ'); ?>
<?php $__env->startSection('content'); ?>
<!-- Просмотр фото-->
<section>

	<header class="main">
			<h1>Портфолио</h1>
	</header>
		<div class="posts">

			<?php $__currentLoopData = $portfolios; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $portfolio): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			<article>
    			<a href="#" class="image">
    				<img src="<?php echo e(asset('/images/upload/')); ?>/<?php echo e($portfolio->image); ?>" alt="<?php echo e($portfolio->title); ?>">
    			</a>
    			<p><?php echo e($portfolio->title); ?></p>
			</article>
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		</div>
					<a href="<?php echo e(url('/')); ?>" class="button center">На главную</a>
					<hr/>
		</section>
		
</section>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layout.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>