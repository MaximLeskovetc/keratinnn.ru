<?php $__env->startSection('title', 'Добавление фото'); ?>
<?php $__env->startSection('content'); ?>
	<!-- Создание  фото-->
	<section>
		<header class="main">
			<h1>Добавить фото</h1>
		</header>

		<hr class="major" />

		<form method="POST" enctype="multipart/form-data" action="<?php echo e(action('PortfolioController@store')); ?>"/>
		<input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>"/>

		<p>Фото</p>
		<p><input type="file" name="photo" accept="image/*,image/jpeg"></p>
		<p><label>Подпись к фото</label></p>
		<p><input type="text" name="title" value="" placeholder="Подпись к фото"></p>
		<?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			<li><?php echo e($error); ?></li>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		<p><input type="submit" value="Добавить фото"></p>
		</form>
	</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>