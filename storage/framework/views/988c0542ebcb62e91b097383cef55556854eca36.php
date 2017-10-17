<?php $__env->startSection('title', 'Редактирование услуги'); ?>
<?php $__env->startSection('content'); ?>
	<!-- Редактирование услуги-->
	<section>
		<header class="main">
			<h1>Редактирование услуги</h1>
		</header>

		<hr class="major" />

		<form method="POST" enctype="multipart/form-data" action="<?php echo e(action('ServiceController@update', $service->id)); ?>"/>
    	<input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>"/>
    	<?php echo e(method_field('PUT')); ?>

		<p><label>Название услуги</label></p>
		<p><input type="text" name="title" value="<?php echo e($service->title); ?>"></p>
		<p>Титульная картинка</p>
		<img src="<?php echo e(asset('/images/upload/')); ?>/<?php echo e($service->image); ?>" alt="" style=" height: 256px; width: 340px;" />
   		<p><input type="file" name="photo" accept="image/*,image/jpeg"></p>
		<p><label>Описание услуги</label></p>
		<p><textarea rows="8" cols="45" name="description"><?php echo e($service->description); ?></textarea></p>
		<?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			<li><?php echo e($error); ?></li>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
   		<p><input type="submit" value="Сохранить"></p>
		<input type="hidden" name="_method" value="put"/>
		</form>
	</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>