<?php
	if (!isset($page_title)) {
		$page_title = 'Заголовок страницы';
	}
?>

<!DOCTYPE html>
<html lang="ru"><!-- bloginfo('language') -->
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title><?= $page_title ?> - Radiator Expert</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css">
	<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
	<link rel="stylesheet" href="css/main.css">
	<?php //wp_head(); ?>
</head>
<body>
	<div class="wrapper push">
		<div class="page">
			<header class="header">
				<div class="header-top">
					<div class="container">
						<div class="header-top-inner">
							<div class="header-block flex-none d-flex align-items-center">
								<div class="menu-opener d-md-none">
									<div class="bar"></div>
									<div class="bar"></div>
									<div class="bar"></div>
								</div>
								<a href="index.php" class="logo-block"><span>Radiator</span> <br class="d-none d-md-inline d-lg-none">Expert</a>
							</div>
							<div class="header-block">
								<ul class="top-nav">
									<li><a href="#">Блог</a></li>
									<li><a href="#">Новости</a></li>
									<li><a href="exhibitions.php">Выставки</a></li>
									<li><a href="about.php">О проекте</a></li>
									<li><a href="feedback.php">Обратная связь</a></li>
								</ul>
							</div>
							<div class="header-block d-none d-xl-block">
								<ul class="socials-list">
									<li>
										<a href="#" target="_blank">
											<i class="icon-facebook"></i>
										</a>
									</li>
									<li>
										<a href="#" target="_blank">
											<i class="icon-vk"></i>
										</a>
									</li>
									<li>
										<a href="#" target="_blank">
											<i class="icon-twitter"></i>
										</a>
									</li>
									<li>
										<a href="#" target="_blank">
											<i class="icon-telegram"></i>
										</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<div class="header-bottom">
					<div class="container">
						<div class="header-bottom-inner">
							<div class="header-bottom-scrollable">
								<ul class="subheader-nav">
									<li><a href="#">Новинки</a></li>
									<li><a href="#">Обзоры</a></li>
									<li><a href="#">Как выбрать</a></li>
									<li><a href="#">Ремонт и обслуживание</a></li>
									<li><a href="#">Название рубрики</a></li>
									<li><a href="#">Интересно</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</header>