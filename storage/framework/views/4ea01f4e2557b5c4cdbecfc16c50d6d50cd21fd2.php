<?php $__env->startSection('title'); ?> 
	<?php echo e($service->title); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('description', 'Страница с услугами в Нижнем Новгороде'); ?>
<?php $__env->startSection('content'); ?>
<!-- Просмотр услуги-->
<section id="my">
	<header class="main">
		<span class="image main"><img src="<?php echo e(asset('/images/upload/')); ?>/<?php echo e($service->image); ?>" alt="" /></span>
	</header>

	<hr class="major" />

	<h1><?php echo e($service->title); ?></h1>
	<p><?php echo $service->description; ?></p>

	<a href="<?php echo e(url('/service')); ?>" class="button">Вернуться к списку</a>
	<a href="<?php echo e(url('application/create')); ?>?id=<?php echo e($service->title); ?>" class="button">Записаться</a>
</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>