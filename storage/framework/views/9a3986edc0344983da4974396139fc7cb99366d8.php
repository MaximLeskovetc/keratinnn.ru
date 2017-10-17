<?php $__env->startSection('title', 'Статьи'); ?>
<?php $__env->startSection('description', 'Страница со списком публикаций'); ?>
<?php $__env->startSection('content'); ?>
<!-- Статьи-->

	<section>
		<header class="major">
			<h1>Статьи</h1>
		</header>
	</section>
	<?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
	<section id="banner">
		<div class="content">
			<header>
				<a href="<?php echo e(url('/post/')); ?>/<?php echo e($post->alias); ?>">
					<h2><?php echo e($post->title); ?></h2>
					<p><?php echo $post->description; ?></p>
				</a>
			</header>
		</div>
		<a href="<?php echo e(url('/post/')); ?>/<?php echo e($post->alias); ?>" class="image">
			<img src="<?php echo e(asset('/images/upload/')); ?>/<?php echo e($post->image); ?>" alt="<?php echo e($post->title); ?>">
		</a>
	</section>
	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	<hr/>
	<a href="<?php echo e(url('/')); ?>" class="button">На главную</a>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>