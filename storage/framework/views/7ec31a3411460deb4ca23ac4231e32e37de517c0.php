<?php $__env->startSection('title', 'Контакты'); ?>
<?php $__env->startSection('description', 'Страница с контактной информацией'); ?>
<?php $__env->startSection('content'); ?>

		<!--Контакты-->

		<section id="banner">
			<div class="content align-center">

				<header id="header">
				<div class="post">
					<h1>Контакты</h1>

					<h5>Телефон</h5>
					<p><span class="icon fa-phone"><a href="tel:8(908)157-49-97" class="logo"> 8(908)157-49-97</a></span></p><hr/>
					
					<h5>Вконтакте</h5>
					<p><span class="icon fa-vk"><a href="https://vk.com/lina_leskovets" class="logo"> vk.com/lina_leskovets</a></span></p><hr/>
					
					<h5>Instagram</h5>
					<p><span class="icon fa-instagram"><a href="https://www.instagram.com/lina_hair52/" class="logo"> lina_hair52</a></span></p><hr/>
					
					<h5><span class="icon fa-home">Адрес:</span></h5>
					<p>По городу выезд на дом бесплатно.</p>
				</div>
				</header>
		</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>