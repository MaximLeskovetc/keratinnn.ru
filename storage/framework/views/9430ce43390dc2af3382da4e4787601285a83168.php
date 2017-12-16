<!-- Wrapper -->
		<!-- Main -->
			<div id="main">
				<div class="inner">
				<!-- Шапка сайта -->
					<header id="header">
						<span class="icon fa-home">Нижний Новгород</span>
						<a href="<?php echo e(url('/')); ?>" class="logo align-center"><strong>Keratin</strong>NN</a>
						<ul class="icons">
							<li class="icon fa-phone"><a href="tel:8(908)157-49-97"  class="icon">  8(908)157-49-97</a></li>
							<li><a href="https://vk.com/lina_leskovets"  class="icon fa-vk" ><span class="label">Вконтакте</span></a></li>
							<li><a href="https://www.instagram.com/lina_hair52/" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
						</ul>
					</header>
					<header id="header">

							<ul class="align-center">
								<noindex>
								<div class="pull-right" style="margin-top:-60px; margin-bottom: -50px; margin-right: 90px;">
								<?php if(auth()->guard()->guest()): ?>
								    <li><a href="<?php echo e(route('login')); ?>" class="logo">Войти</a></li>
								    <li><a href="<?php echo e(route('register')); ?>" class="logo">Регистрация</a></li>
								<?php else: ?>
								    <li class="dropdown">
								        <a href="#" class="dropdown-toggle logo" data-toggle="dropdown" role="button" aria-expanded="false">
								            <?php echo e(Auth::user()->name); ?> <span class="caret"></span>
								        </a>

								        <ul class="dropdown-menu" role="menu">
								        	<li>
								        		<a href="<?php echo e(url('/profile')); ?>" class="logo"> Профиль</a>
								        	</li>
								            <li>
								                <a href="<?php echo e(route('logout')); ?>" class="logo"
								                    onclick="event.preventDefault();
								                             document.getElementById('logout-form').submit();">
								                    Выйти
								                </a>

								                <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
								                    <?php echo e(csrf_field()); ?>

								                </form>
								            </li>
								        </ul>
								    </li>
								<?php endif; ?>
							</noindex>
							</div>
							<hr>
							<li><a href="<?php echo e(url('/about')); ?>" class="logo list">О нас</a></li>
							<li><a href="<?php echo e(url('/contact')); ?>" class="logo list">Контакты</a></li>
							<li><a href="<?php echo e(url('/price')); ?>" class="logo list">Цены</a></li>
							<hr/>
							<li><a href="<?php echo e(url('/service/keratinovoe_vipryamlenie')); ?>" class="logo list">Кератиновое выпрямление и восстановление</a></li>
							<li><a href="<?php echo e(url('/service/polirovka_volos')); ?>" class="logo list">Полировка волос</a></li>
							<li><a href="<?php echo e(url('/service/botoks_volos')); ?>" class="logo list">Ботокс волос</a></li>
							<li><a href="<?php echo e(url('/service/flising')); ?>" class="logo list">Флисинг</a></li>
						</ul>
					</header>