<?php $page_title = 'Попапы'; ?>
<?php include('header.php'); ?>
	<div class="page-content">
		<section class="breadcrumbs-section">
			<div class="container">
				<ul class="breadcrumbs">
					<li><a href="index.php">Главная</a></li>
					<li><?= $page_title ?></li>
				</ul>
			</div>
		</section>
		<div class="inner-page-wrapper">
			<div class="container">
				<div class="section-caption">
					<h1 class="esm-h2 caption-title"><span>Попапы</span></h1>
				</div>
				<button class="btn" data-toggle="modal" data-target="#modal-call-order">Заказать звонок</button>
				<button class="btn" data-toggle="modal" data-target="#modal-rent-order">Заявка на аренду</button>
				<button class="btn" data-toggle="modal" data-target="#modal-success">Заявка отправлена</button>
				<br>
				<br>
				<br>
			</div>
		</div>
	</div>
<?php include('footer.php'); ?>