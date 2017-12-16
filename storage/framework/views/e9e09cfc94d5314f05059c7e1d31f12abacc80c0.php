<?php $__env->startSection('title', 'Главная'); ?>
<?php $__env->startSection('description', 'Главная страница сайта с услугами по Кератиновому выпрямлению и восстановлению волос, Полировке волос, Ботоксу волос, Флисингу в Нижнем Новгороде.'); ?>
<?php $__env->startSection('content'); ?>

	<!--Шапка-->
		<section id="banner">
			<div class="content">
				<header>
					<h1><a href="<?php echo e(url('/about')); ?>">Мастер по восстановлению волос</a></h1>
					<p>Записаться на любую процедуру можно уже сейчас</p>
					<a href="<?php echo e(url('application/create')); ?>?id" class="button big">Записаться сейчас</a>
				</header>
			</div>
			<a href="<?php echo e(url('/about')); ?>" class="image">
				<img src="<?php echo e(url('/images/avatar/avatar.jpg')); ?>" alt="Фото мастера" />
			</a>
		</section>
		
	<!-- Услуги -->
		<section>
			<header class="major">
				<a href="<?php echo e(url('/service')); ?>"><h1>Услуги</h1></a>
			</header>
		<div class="posts">
			<?php $__currentLoopData = $service; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $services): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			<article>
				<a href="<?php echo e(url('service')); ?>/<?php echo e($services->alias); ?>" class="image">
					<img src="<?php echo e(asset('/images/upload/')); ?>/<?php echo e($services->image); ?>" alt="<?php echo e($services->title); ?>" />
				</a>
				<h2><?php echo e($services->title); ?></h2>
				<p><?php echo $services->description; ?></p>
				<ul class="actions">
					<li><a href="<?php echo e(url('service')); ?>/<?php echo e($services->alias); ?>" class="button red">Подробнее о услуге</a></li>
					<li><a href="<?php echo e(url('application/create')); ?>?id=<?php echo e($services->title); ?>" class="button">Записаться</a></li>	
				</ul>
			</article>
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		</div>
		</section>
		<!-- Статьи-->
		<section>
			<header class="major">
				<a href="<?php echo e(url('/post')); ?>"><h1>Статьи</h1></a>
			</header>
		<div class="posts">
			<?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			<article>
				<a href="<?php echo e(url('/post/')); ?>/<?php echo e($post->alias); ?>" class="image">
					<img src="<?php echo e(asset('/images/upload/')); ?>/<?php echo e($post->image); ?>" alt="<?php echo e($post->title); ?>" />
				</a>
				<h2><?php echo e($post->title); ?></h2>
				<p><?php echo $post->description; ?></p>
				<ul class="actions">
					<li><a href="<?php echo e(url('/post/')); ?>/<?php echo e($post->alias); ?>" class="button">Читать статью</a></li>
				</ul>
			</article>
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		</div>
		</section>

		<!-- Примеры работ -->
		<section>
			<header class="main">
				<a href="<?php echo e(url('/portfolio')); ?>"><h1>Примеры работ</h1></a>
			</header>
				<div class="posts">
					<?php $__currentLoopData = $portfolios; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $portfolio): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<article>					
							<a href="<?php echo e(url('/portfolio')); ?>/<?php echo e($portfolio->id); ?>"class="image">
								<img src="<?php echo e(asset('images/upload/')); ?>/<?php echo e($portfolio->image); ?>" alt="<?php echo e($portfolio->title); ?>" />
							</a>
							<p><?php echo e($portfolio->title); ?></p>
						</article>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		   		</div>
		</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>