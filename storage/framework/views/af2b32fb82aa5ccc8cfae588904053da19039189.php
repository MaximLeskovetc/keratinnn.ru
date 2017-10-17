<?php $__env->startSection('title', 'Услуги'); ?>
<?php $__env->startSection('description', 'Страница с моими услугами'); ?>
<?php $__env->startSection('content'); ?>
<!-- Просмотр фото-->
<section>

	<header class="main">
			<h1>Мои услуги</h1>
	</header>
		<div class="posts">

			<?php $__currentLoopData = $services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			<article>
    			<a href="/service/<?php echo e($service->alias); ?>" class="image">
    				<img src="<?php echo e(asset('/images/upload/')); ?>/<?php echo e($service->image); ?>" alt="" />
    			</a>
    			<p><?php echo e($service->title); ?></p>
    			<a href="/service/<?php echo e($service->alias); ?>" class="button red">Подробнее</a>
    			<a href="<?php echo e(url('application/create')); ?>?id=<?php echo e($service->title); ?>" class="button">Записаться</a>
			</article>
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		</div>
			<a href="<?php echo e(url('/')); ?>" class="button center">На главную</a>
			<hr/>
		</section>
		
</section>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layout.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>