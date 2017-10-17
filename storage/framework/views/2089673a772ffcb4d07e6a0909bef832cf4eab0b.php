<?php $__env->startSection('title', 'О нас'); ?>
<?php $__env->startSection('description', 'Страница информации о нас'); ?>
<?php $__env->startSection('content'); ?>
	<!-- Банер -->
		<section id="banner">
			<div class="content">
				<header>
					<h1>О нас</h1>
					<span>Меня зовут Лина. Я являюсь сертифицированным мастером по процедурам восстановления волос и с радостью отвечу на все ваши вопросы,а так же помогу подобрать процедуру именно под ваш тип волос.</span>
				</header>
			</div>
			<a href="<?php echo e(url('/about')); ?>" class="image">
				<img src="<?php echo e(url('/images/avatar/avatar.jpg')); ?>" alt="Фото" />
			</a>
		</section>

		<!--Информация обо мне-->
		<section id="banner">
			<div class="content">
				<header class="main">
						<a href="<?php echo e(url('/portfolio')); ?>"><h1>Примеры работ</h1></a>
				</header>
		</section>
		<section id="banner">
			<div class="content">
				<header class="main">
					<h4>Мои сертификаты</h4>
				</header>
				<div class="posts">
					<article>
						<img src="<?php echo e(url('/images/upload/sertificate-1.jpg')); ?>" alt="" class="image"/>
					</article>
					<article>
						<img src="<?php echo e(url('/images/upload/sertificate-2.jpg')); ?>" alt="" class="image"/>
					</article>
					<article>
						<img src="<?php echo e(url('/images/upload/sertificate-3.jpg')); ?>" alt="" class="image"/>
					</article>
					<article>
						<img src="<?php echo e(url('/images/upload/sertificate-4.jpg')); ?>" alt="" class="image"/>
					</article>
				</div>
				<hr />
		</section>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>