<?php $__env->startSection('title', 'Цены'); ?>
<?php $__env->startSection('description', 'Страница с ценами на услуги Кератинового выпрямления, ботокса для волос, флисинга прикорневого объема, и полировки в Нижнем Новгороде'); ?>
<?php $__env->startSection('content'); ?>
		<!--Цены-->

		<section id="banner">
			<div class="content">
				<header class="main">
					<h1>Цены</h1>
					<h2 class="align-center">Сколько стоят улуги?</h2>
				</header>
				<div class="posts">
					<article>
						<h4>Кератиновое выпрямление</h4>
						<ul><b>Стоимость процедуры:</b>
							<ol>челка - 500 руб</ol>
							<ol>длина выше плеч - 1700 руб. + полировка в подарок</ol>
							<ol>длина до лопаток - 2500 руб. + полировка в подарок</ol>
							<ol>длина до поясницы - 3000 руб. + полировка в подарок</ol>
						</ul>
					</article>
					<article>
						<h4>Ботокс волос</h4>
						<ul><b>Стоимость процедуры:</b>
							<ol>длина выше плеч - 1600 руб. + полировка в подарок</ol>
							<ol>длина до лопаток - 2400 руб. + полировка в подарок</ol>
							<ol>длина до поясницы - 2900 руб. + полировка в подарок</ol>
						</ul>
					</article>
					<article>
						<h4>Флисинг</h4>
						<ul><b>Стоимость процедуры:</b>
							<ol>любая длина 1200 руб. + полировка в подарок</ol>
						</ul>
					</article>
					<article>
						<h4>Полировка волос</h4>
						<ul><b>Стоимость процедуры:</b>
							<ol>любая длина 400 рублей</ol>
						</ul>
					</article>

				</div>
			<a href="<?php echo e(url('/service')); ?>" class="button center">Подробнее о услугах</a>
			</div>
		</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>