<?php $__env->startSection('title', 'Профиль'); ?>
<?php $__env->startSection('description', 'Страница профиля'); ?>
<?php $__env->startSection('content'); ?>
<section id="banner">
	<div class="content">
		<header class="main">
			<h1>Профиль</h1>
		</header>
		<div class="post">
			<article>
				Добрый день, <?php echo e($name); ?>.
			</article>
			<hr/>
			<article>
				<h3>Мои заказы</h3>
				<p>Пока нет заказов</p>
			</article>
			<hr/>
			<a href="<?php echo e(url('/logout')); ?>" class="pull-right button">Выйти</a>
		</div>
	</div>
</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>