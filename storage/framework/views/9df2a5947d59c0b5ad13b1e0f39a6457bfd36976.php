<?php $__env->startSection('title'); ?>
	<?php echo e($post->title); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('description'); ?>
	Обзор статьи <?php echo e($post->title); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<!-- Просмотр статьи-->
	<section id="banner">
		<div class="content">
			<header>
				<h1><?php echo e($post->title); ?></h1>

			</header>
		</div>
		<a href="<?php echo e(url('/post')); ?>/<?php echo e($post->alias); ?>" class="image">
			<img src="<?php echo e(asset('/images/upload/')); ?>/<?php echo e($post->image); ?>" alt="<?php echo e($post->title); ?>">
		</a>
	</section>
	<div class="main">							
		<p><?php echo $post->description; ?></p>
	</div>
	<h3>Комментарии</h3>
	<div class="box">
		<?php $__currentLoopData = $comments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $comment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			<p>
				<b><?php echo e($comment->created_at); ?></b><br/>
				<b><?php echo e($comment->name); ?></b>
			</p>
			<p><?php echo e($comment->conntent); ?></p>
					<hr/>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	</div>
		<noindex>
			<?php if(auth()->guard()->guest()): ?>
				<div class="box">
					Только <a href="<?php echo e(route('login')); ?>" class="logo">авторизованные</a> пользователи могут добавлять комментарии.
				</div>
			<?php else: ?>
			<div class="box">
				<form method="POST" enctype="multipart/form-data" action="<?php echo e(action('CommentsController@store')); ?>"/>
					<input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>"/>
					<input type="hidden" name="id" value="<?php echo e($post->id); ?>">

					<p><label>Добавить свой комментарий</label></p>
					<p><textarea rows="4" cols="30" name="content" placeholder="Комментарий"></textarea></p>
					<?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<li><?php echo e($error); ?></li>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					<p><input type="submit" value="Написать комментарий" class="pull-right" ></p>
				</form>
			</div>
			<?php endif; ?>

		</noindex>
	<a href="<?php echo e(url('/post/')); ?>" class="button">Другие статьи</a>
	<hr/>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>