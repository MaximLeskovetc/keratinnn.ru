<?php $__env->startSection('title', 'Администраторская'); ?>
<?php $__env->startSection('description', 'Администраторская страница сайта'); ?>
<?php $__env->startSection('content'); ?>


<a href="<?php echo e(url('/logout')); ?>" class="icon button" style="float:right; margin-top:10px;">Выйти</a>
	<!-- Создание -->
	<section>
		<header class="main">
			<center><h2>Администраторская</h2></center>
		</header>
			<hr class="major" />
			<h3>Заявки</h3>
			<div class="table-wrapper">
				<table>
					<thead>
						<tr>
							<th>Дата</th>
							<th>Процедура</th>
							<th>Телефон</th>
							<th>Имя</th>
							<th>Статус</th>
							<th>Действие</th>
						</tr>
					</thead>
					<tbody>
						<?php $__currentLoopData = $applications; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $application): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<tr>
							<td><?php echo e($application->created_at); ?></td>
							<td><?php echo e($application->works); ?></td>
							<td><?php echo e($application->phone); ?></td>
							<td><?php echo e($application->name); ?></td>
							<td><?php echo e($application->status); ?></td>
							<td>

								<form method="POST"action="<?php echo e(action('ApplicationController@update', $application->id)); ?>"/>
						    	<input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>"/>
						    	<?php echo e(method_field('PUT')); ?>

								<p><input type="submit" class="fa fa-times" value="Принять"></p>
								</form>
								<form method="POST" action="<?php echo e(action('ApplicationController@destroy', $application->id)); ?>"/>
								<input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>"/>
								<?php echo e(method_field('DELETE')); ?>	
								<p><input type="submit" class="fa fa-times" value="Удалить"></p>
								</form>
							</td>
						</tr>
						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					</tbody>
				</table>
			</div>
			<hr class="major" />
			<h3>Услуги</h3>
			<div class="table-wrapper">
				<table>
					<thead>
						<tr>
							<th>Услуга</th>
							<th>Редактировать</th>
						</tr>
					</thead>
					<tbody>
						<?php $__currentLoopData = $services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<tr>
							<td><a href="/service/<?php echo e($service->alias); ?>"><?php echo e($service->title); ?></a></td>
							<td><a href="/service/<?php echo e($service->id); ?>/edit" class="button">Редактировать</a></td>
						</tr>
						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					</tbody>
				</table>
			</div>
			<a href="<?php echo e(url('service/create')); ?>" class="button">Добавить услугу</a>
			<hr class="major" />
			<hr class="major" />
			<h3>Статьи</h3>
			<div class="table-wrapper">
				<table>
					<thead>
						<tr>
							<th>Название статьи</th>
							<th>Содержание</th>
							<th>Редактировать</th>
							<th>Удалить</th>
						</tr>
					</thead>
					<tbody>
						<?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<tr>
							<td><a href="<?php echo e(url('/post/')); ?>/<?php echo e($post->alias); ?>"><?php echo e($post->title); ?></a></td>
							<td><?php echo e($post->description); ?></td>
							<td><a href="<?php echo e(url('/post/')); ?>/<?php echo e($post->id); ?>/edit" class="button">Редактировать</a></td>
							<form method="POST" action="<?php echo e(action('PostController@destroy', $post->id)); ?>"/>
							<input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>"/>
							<?php echo e(method_field('DELETE')); ?>	
							<td><input type="submit" class="button" value="Удалить"></td>
							</form>
						</tr>
						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					</tbody>
				</table>
			</div>
			<a href="<?php echo e(url('post/create')); ?>" class="button">Добавить статью</a>
			<hr class="major" />			<hr class="major" />
			<h3>Фото</h3>
			<div class="table-wrapper">
				<table>
					<thead>
						<tr>
							<th>Фото</th>
							<th>Описание</th>
							<th>Редактировать</th>
							<th>Удалить</th>
						</tr>
					</thead>
					<tbody>
						<?php $__currentLoopData = $portfolios; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $portfolio): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<tr>
							<td>				
								<a href="/portfolio/<?php echo e($portfolio->id); ?>" class="image">
								<img src="<?php echo e(asset('/images/upload/')); ?>/<?php echo e($portfolio->image); ?>" alt=""  style="width:100px; heigth 100px;"/>
								</a>
							</td>
							<td><?php echo e($portfolio->title); ?></td>
							<td><a href="/portfolio/<?php echo e($portfolio->id); ?>/edit" class="button">Редактировать</a></td>
							<form method="POST" action="<?php echo e(action('PortfolioController@destroy', $portfolio->id)); ?>"/>
							<input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>"/>
							<?php echo e(method_field('DELETE')); ?>	
							<td><input type="submit" class="button" value="Удалить"></td>
							</form>
						</tr>
						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					</tbody>
				</table>
			</div>
			<a href="<?php echo e(url('portfolio/create')); ?>" class="button">Добавить фото</a>
	</section>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>