<?php
	if (!isset($page_title)) {
		$page_title = 'Заголовок страницы';
	}

	if (!isset($header_class)) {
		$header_class = '';
	}
?>

<!DOCTYPE html>
<html lang="ru"><!-- bloginfo('language') -->
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title><?= $page_title ?> - ESM Service</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css">
	<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css">
	<link rel="stylesheet" href="css/main.css">
	<?php //wp_head(); ?>
</head>
<body>
	<div class="wrapper push">
		<div class="page">
			<header class="header <?= $header_class ?>">
				<div class="container">
					<div class="header-inner">
						<div class="header-left">
							<a href="index.php" class="logo-block">
								<img src="img/logo.png" alt="ESM Service">
							</a>
						</div>
						<div class="header-right">
							<div class="header-row">
								<div class="header-block d-none d-lg-block">
									<p class="slogan">Аренда оборудования для мероприятий, <br>конференций и презентаций</p>
								</div>
								<div class="header-block d-none d-lg-block">
									<div class="contacts-links light">
										<a href="http://www.esmedia.ru/price.xlsx" target="_blank" class="item">
											<i class="icon-coins"></i>
											<span>Скачать прайс-лист</span>
										</a>
										<a href="mailto:info@esmedia.ru" target="_blank" class="item">
											<i class="icon-envelope"></i>
											<span>info@esmedia.ru</span>
										</a>
									</div>
								</div>
								<div class="header-block flex-pull-right">
									<div class="header-phone-block">
										<a href="tel:84952353071" class="tel-link">
											<i class="icon-phone"></i>
											<span>8 (495) <strong>235-30-71</strong></span>
										</a>
										<button class="btn btn-rounded btn-small" data-toggle="modal" data-target="#modal-call-order">Заказать звонок!</button>
									</div>
								</div>
								<div class="header-block d-lg-none">
									<div class="menu-opener">
										<span>Меню</span>
										<div class="opener">
											<div class="bar"></div>
											<div class="bar"></div>
											<div class="bar"></div>
										</div>
									</div>
								</div>
							</div>
							<div class="header-row d-none d-lg-flex">
								<ul class="top-nav">
									<!-- ↓↓↓ В первом пункте есть неразрывный пробел (Alt+255) ↓↓↓ -->
									<li><a href="about-company.php">О компании</a></li>
									<li>
										<a href="equipment-rent.php">Аренда оборудования</a>
										<ul class="sub-menu">
											<li><a href="#">Плазменные панели</a></li>
											<li><a href="rent-category.php">Проекторы</a></li>
											<li><a href="#">Проекционные экраны</a></li>
											<li><a href="#">Видеостены Orion</a></li>
											<li>
												<a href="#">Видеостены OmniShapes</a>
												<ul class="sub-menu">
													<li><a href="#">Плазменные панели</a></li>
													<li><a href="#">Проекторы</a></li>
													<li><a href="#">Проекционные экраны</a></li>
												</ul>
											</li>
											<li><a href="#">Светодиодные экраны</a></li>
											<li><a href="#">Звуковое оборудование</a></li>
											<li><a href="#">Световое оборудование</a></li>
											<li><a href="#">Сенсорные панели</a></li>
											<li><a href="#">Видеооборудование</a></li>
											<li><a href="#">Конференц-системы</a></li>
											<li><a href="#">Синхронный перевод</a></li>
										</ul>
									</li>
									<li><a href="#">Условия аренды</a></li>
									<li><a href="prices.php">Цены</a></li>
									<li><a href="reviews.php">Отзывы</a></li>
									<li><a href="projects.php">Наши проекты</a></li>
									<li><a href="contacts.php">Контакты</a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="header-catalog-btn d-lg-none">
						<a href="equipment-rent.php" class="btn fullwidth">Каталог оборудования</a>
					</div>
				</div>
			</header>
			<div class="sticky-header push">
				<div class="container">
					<div class="sticky-header-inner">
						<div class="sticky-header-block left">
							<a href="index.php" class="logo-block">
								<img src="img/logo-small.png" alt="ESM Service">
							</a>
						</div>
						<div class="sticky-header-block right">
							<div class="menu-opener d-lg-none">
								<span>Меню</span>
								<div class="opener">
									<div class="bar"></div>
									<div class="bar"></div>
									<div class="bar"></div>
								</div>
							</div>
							<ul class="top-nav d-none d-lg-flex">
								<li><a href="about-company.php">О компании</a></li>
								<li>
									<a href="equipment-rent.php">Аренда оборудования</a>
									<ul class="sub-menu">
										<li><a href="#">Плазменные панели</a></li>
										<li><a href="rent-category.php">Проекторы</a></li>
										<li><a href="#">Проекционные экраны</a></li>
										<li><a href="#">Видеостены Orion</a></li>
										<li>
											<a href="#">Видеостены OmniShapes</a>
											<ul class="sub-menu">
												<li><a href="#">Плазменные панели</a></li>
												<li><a href="#">Проекторы</a></li>
												<li><a href="#">Проекционные экраны</a></li>
											</ul>
										</li>
										<li><a href="#">Светодиодные экраны</a></li>
										<li><a href="#">Звуковое оборудование</a></li>
										<li><a href="#">Световое оборудование</a></li>
										<li><a href="#">Сенсорные панели</a></li>
										<li><a href="#">Видеооборудование</a></li>
										<li><a href="#">Конференц-системы</a></li>
										<li><a href="#">Синхронный перевод</a></li>
									</ul>
								</li>
								<li><a href="#">Условия аренды</a></li>
								<li><a href="prices.php">Цены</a></li>
								<li><a href="reviews.php">Отзывы</a></li>
								<li><a href="projects.php">Наши проекты</a></li>
								<li><a href="contacts.php">Контакты</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>