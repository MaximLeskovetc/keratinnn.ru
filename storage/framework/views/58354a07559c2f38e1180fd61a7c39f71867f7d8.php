<?php $__env->startSection('title', 'Оставить заявку на процедуру'); ?>
<?php $__env->startSection('description', 'Оставить заявку на процедуры кератиновое выпрямление в Нинжем Новгороде, ботокс в нижнем новгороде, флисинг в Нижнем, полировка волос.'); ?>
<?php $__env->startSection('content'); ?>

	<!-- Создание -->
	<section>
		<header class="main">
			<center><h1>Оставить заявку<?php echo e($name); ?></h1></center>
		</header>

		<hr class="major" />
		<form method="POST" enctype="multipart/form-data" action="<?php echo e(action('ApplicationController@store')); ?>"/>
		<input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>"/>
		<input type="hidden" name="work" value="<?php echo e($work); ?>"/>
		<label>Ваше имя</label>
		<p><input type="text" name="name" value="" placeholder="Ваше имя"></p>
		<label>Ваш номер телефона</label>
		<p><input type="text" name="phone" id="phone" value="" placeholder="Ваш номер"></p>
		<?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			<li><?php echo e($error); ?></li>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		<center><input type="submit" value="Оставить заявку"></center>
		</form>
	</section>

	<script>

	$(function(){
	  $("#phone").mask('8(999)999-9999');
	});
	</script>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>