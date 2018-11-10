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
	<link rel="stylesheet" href="css/main.css?v=<?= rand() ?>">
	<?php //wp_head(); ?>
</head>
<body>
	<div class="wrapper push">
		<div class="page">
			<header class="header <?= $header_class ?>">
				<div class="container">
					<div class="header-inner">
						<div class="header-left">
							<a href="#" class="logo-block">
								<img src="img/logo.png" alt="ESM Service">
							</a>
						</div>
						<div class="header-right">
							<div class="header-row">
								<div class="header-block">
									<p class="slogan">Аренда оборудования для мероприятий, <br>конференций и презентаций</p>
								</div>
								<div class="header-block">
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
								<div class="header-block">
									<div class="header-phone-block">
										<a href="tel:84952353071" class="tel-link">
											<i class="icon-phone"></i>
											<span>8 (495) <strong>235-30-71</strong></span>
										</a>
										<button class="btn btn-rounded btn-small" data-toggle="modal" data-targer="#modal-call-order">Заказать звонок!</button>
									</div>
								</div>
							</div>
							<div class="header-row">
								<ul class="top-nav">
									<li><a href="about-company.php">О компании</a></li>
									<li class="current-menu-item"><a href="equipment-rent.php">Аренда оборудования</a></li>
									<li><a href="rent-terms.php">Условия аренды</a></li>
									<li><a href="prices.php">Цены</a></li>
									<li><a href="reviews.php">Отзывы</a></li>
									<li><a href="projects.php">Наши проекты</a></li>
									<li><a href="contacts.php">Контакты</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</header>
			<div class="sticky-header">
				<div class="container">
					<div class="sticky-header-inner">
						<div class="sticky-header-block left">
							<a href="index.php" class="logo-block">
								<img src="img/logo-small.png" alt="ESM Service">
							</a>
						</div>
						<div class="sticky-header-block right">
							<ul class="top-nav">
								<li><a href="about-company.php">О компании</a></li>
								<li class="current-menu-item"><a href="equipment-rent.php">Аренда оборудования</a></li>
								<li><a href="rent-terms.php">Условия аренды</a></li>
								<li><a href="prices.php">Цены</a></li>
								<li><a href="reviews.php">Отзывы</a></li>
								<li><a href="projects.php">Наши проекты</a></li>
								<li><a href="contacts.php">Контакты</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>