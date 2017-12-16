<?php $__env->startSection('title', 'Создание статьи'); ?> 
<?php $__env->startSection('content'); ?>
	<!-- Создание статьи -->
	<section>
		<header class="main">
			<h1>Создание статьи</h1>
		</header>

		<hr class="major" />

		<form method="POST" enctype="multipart/form-data" action="<?php echo e(action('PostController@store')); ?>"/>
		<input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>"/>
		<p><label>Название статьи</label></p>
		<p><input type="text" name="title" value="" placeholder="Название статьи"></p>
		<p>Титульная картинка</p>
		<p><input type="file" name="image" accept="image/*,image/jpeg"></p>
		<p><label>Статья</label></p>
		<p><textarea rows="8" cols="45" name="description" placeholder="Сама статья"></textarea></p>
		<?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			<li><?php echo e($error); ?></li>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		<p><input type="submit" value="Написать статью"></p>
		</form>
	</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>