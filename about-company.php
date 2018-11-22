<?php $page_title = 'О компании'; ?>
<?php include('header.php'); ?>
	<div class="page-content">
		<div class="breadcrumbs-section">
			<div class="container">
				<ul class="breadcrumbs">
					<li><a href="index.php">Главная</a></li>
					<li><?= $page_title ?></li>
				</ul>
			</div>
		</div>
		<div class="inner-page-wrapper">
			<section class="section">
				<div class="container">
					<div class="post-content esm-typography">
						<!-- ↓↓↓ Page text goes here ↓↓↓ -->
						<div class="row">
							<div class="col-lg-5 d-none d-lg-block">
								<div class="bordered-image">
									<img src="img/common/about.jpg" alt="">
								</div>
							</div>
							<div class="col-lg-7">
								<div class="section-caption left-aligned">
									<h1 class="esm-h2 caption-title"><span>О компании</span></h1>
								</div>
								<div class="bordered-image d-md-inline-block d-lg-none alignleft sm-fullwidth">
									<img src="img/common/about.jpg" alt="" style="max-width: 330px;">
								</div>
								<p>Компания Esmedia предлагает Вам воспользоваться услугами аренды видеооборудования, звукового оборудования и светового оборудования. У нас Вы также можете найти конференц-системы, системы синхроперевода, телемост, интернет-трансляции и другое. </p>
								<p>Мы предлагаем только качественное оборудование, которое поможет Вам сделать любое выступление более наглядным, а мероприятие — ярким, громким и насыщенным. <br>Широкий ассортимент проекторов в аренду, плазменных панелей, видеостен, видеопультов и видеокамер, самое разнообразное звуковое и световое оборудование — все это наша компания ESM сервис!</p>
							</div>
						</div>
						<div class="row clear margin-top-normal">
							<div class="col-lg-8">
								<p>У нас Вы можете не только взять в аренду все необходимое для мероприятия, конференции или презентации оборудование, но нанять наших высококвалифицированных специалистов, которые всегда помогут Вам с настройкой аппаратуры и, в случае необходимости, избавят Вас от обязанности управлять этой аппаратурой во время мероприятия. </p>
								<p>Благодаря нашей компании Вы сможете почувствовать себя гостем на своем собственном мероприятии и также, как и все остальные наслаждаться отличным качеством картинки, звука или света нашего оборудования, а обо всем другом позаботимся мы.</p>
								<div class="links-row xs-column">
									<!-- ↓↓↓ Если класс .btn добавляется к <button>, то по неведомой магии нужно увеличить z-index именно родительского элемента. Это можно сделать добавив к нему класс .lift-up ↓↓↓ -->
									<div class="item lift-up">
										<button class="btn" data-toggle="modal" data-targer="#modal-call-order">Получить консультацию</button>
									</div>
									<div class="item">
										<div class="contacts-links">
											<a href="http://www.esmedia.ru/price.xlsx" target="_blank" class="item">
												<i class="icon-coins"></i>
												<span>Скачать прайс-лист</span>
											</a>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-4 margin-top-giant lg-margin-no">
								<div class="bordered-box">
									<div class="box-caption">
										<h4 class="esm-h4">Реквизиты</h4>
									</div>
									<p class="esm-note">ООО «ЕСМ СЕРВИС» <br>127055, г. Москва, ул. Лесная, д. 63, стр 1. <br>Тел. (495) 226-77-85 <br>ОГРН: 1157746139440 <br>ИНН: 7707334096 <br>КПП: 770701001 <br>Банк: АО «АЛЬФА-БАНК» <br>БИК: 044525593 <br>Корр/счет: 30101810200000000593 <br>Р/С: 40702810802620001226</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<section class="projects-section padding-top-no">
				<div class="container">
					<div class="section-caption">
						<h2 class="esm-h2 caption-title"><span>Наши</span> проекты</h2>
					</div>
					<div class="projects-slider default-slide-paddings">
						<?php for ($i=0; $i < 4; $i++): ?>
							<div class="slide">
								<a href="#" class="white-card">
									<div class="card-image">
										<img src="http://placeimg.com/680/440/any?v=<?= $i ?>" alt="">
										<div class="images-count">17</div>
									</div>
									<div class="card-name">
										<h4 class="esm-h4">Название мероприятия</h4>
									</div>
								</a>
							</div>
						<?php endfor; ?>
					</div>
					<div class="button-with-dashes">
						<a href="projects.php" class="btn btn-light">Портфолио</a>
					</div>
				</div>
			</section>
		</div>
	</div>
<?php include('footer.php'); ?>