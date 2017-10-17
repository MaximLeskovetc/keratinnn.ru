<?php $__env->startSection('title'); ?> 
	<?php echo e($portfolio->title); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('description', 'Страница с моей работой'); ?>
<?php $__env->startSection('content'); ?>
<?php $__env->startSection('canonical'); ?>
<link rel="canonical" href="http://keratinnn.ru/portfolio"/>
<?php $__env->stopSection(); ?>
<!-- Просмотр фото-->
<section>

	<header class="main">
		<h1>Портфолио</h1>
		<p style="text-align:center;"><?php echo e($portfolio->title); ?></p>
		<span class="image main" style="margin: 0 auto;"><img src="<?php echo e(asset('/images/upload/')); ?>/<?php echo e($portfolio->image); ?>" alt="<?php echo e($portfolio->title); ?>" /></span>
	</header>

	<hr class="major" />
	<a href="<?php echo e(url('/')); ?>" class="button">Вернуться к списку</a>
	
</section>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>