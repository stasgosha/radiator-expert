<?php $page_title = 'Аренда проектора'; ?>
<?php include('header.php'); ?>
	<div class="page-content">
		<section class="breadcrumbs-section">
			<div class="container">
				<ul class="breadcrumbs">
					<li><a href="index.php">Главная</a></li>
					<li><a href="equipment-rent.php">Аренда оборудования</a></li>
					<li><?= $page_title ?></li>
				</ul>
			</div>
		</section>
		<div class="inner-page-wrapper">
			<div class="container">
				<div class="section-caption">
					<h1 class="esm-h2 caption-title"><span>Аренда</span> проектора</h1>
				</div>
			</div>
			<section class="products-section">
				<div class="container">
					<div class="row">
						<?php for ($i=0; $i < 4; $i++): ?>
							<div class="col-sm-6 col-lg-4 col-xl-3">
								<div class="product-card">
									<a href="product-card.php" class="product-image">
										<img src="img/equipment/projector.png" alt="">
									</a>
									<div class="product-description">
										<p class="product-name esm-body-2"><a href="product-card.php">Проектор VIEW-SONIC PJD5132 (2600 ANSI Lm)</a></p>
										<p class="product-params esm-note">1024x768 px, 2600 лм, VGA (DSub), RGB (BNC), DVI, HDMI</p>
										<div class="product-price">
											<span>от</span>
											<span class="price-value">1 500</span>
											<span>руб.<br>сутки</span>
										</div>
									</div>
									<div class="card-hidden-content">
										<dutton class="btn fullwidth" data-toggle="modal" data-target="#modal-rent-order">Взять в аренду</button>
									</div>
								</div>
							</div>
							<div class="col-sm-6 col-lg-4 col-xl-3">
								<div class="product-card">
									<a href="product-card.php" class="product-image">
										<img src="img/equipment/projector.png" alt="">
									</a>
									<div class="product-description">
										<p class="product-name esm-body-2"><a href="product-card.php">Проектор VIEW-SONIC</a></p>
										<p class="product-params esm-note">1024x768 px</p>
										<div class="product-price">
											<span>от</span>
											<span class="price-value">1 500</span>
											<span>руб. <br>сутки</span>
										</div>
									</div>
									<div class="card-hidden-content">
										<dutton class="btn fullwidth" data-toggle="modal" data-target="#modal-rent-order">Взять в аренду</button>
									</div>
								</div>
							</div>
						<?php endfor; ?>
					</div>
				</div>
			</section>
			<section class="advantages-section">
				<div class="container">
					<div class="advantages-slider default-slide-paddings">
						<div class="slide">
							<div class="advantages-block">
								<div class="block-caption">
									<i class="caption-icon icon-hours-24"></i>
									<h4 class="caption-text esm-h4">Работаем круглосуточно</h4>
								</div>
								<div class="block-content">
									<p>Выполняем монтаж\демонтаж оборудования в любое время суток по желанию заказчика.</p>
								</div>
							</div>
						</div>
						<div class="slide">
							<div class="advantages-block">
								<div class="block-caption">
									<i class="caption-icon icon-percent"></i>
									<h4 class="caption-text esm-h4">Партнерские отношения</h4>
								</div>
								<div class="block-content">
									<p>Выполняем монтаж\демонтаж оборудования в любое время суток по желанию заказчика.</p>
								</div>
							</div>
						</div>
						<div class="slide">
							<div class="advantages-block">
								<div class="block-caption">
									<i class="caption-icon icon-bulb"></i>
									<h4 class="caption-text esm-h4">Качественное оборудование</h4>
								</div>
								<div class="block-content">
									<p>Выполняем монтаж\демонтаж оборудования в любое время суток по желанию заказчика.</p>
								</div>
							</div>
						</div>
						<div class="slide">
							<div class="advantages-block">
								<div class="block-caption">
									<i class="caption-icon icon-wallet"></i>
									<h4 class="caption-text esm-h4">Гибкая форма оплаты</h4>
								</div>
								<div class="block-content">
									<p>Выполняем монтаж\демонтаж оборудования в любое время суток по желанию заказчика.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<section class="order-call-section">
				<div class="container">
					<div class="order-call-block">
						<div class="block-content">
							<a href="tel:84952353071" class="big-phone-link d-none d-lg-flex">
								<i class="icon-phone-24"></i>
								<span>8 (495) 235-30-71</span>
							</a>
							<div class="block-text esm-typography">
								<p>Вместе с арендой оборудования Вы можете нанять наших высококвалифицированных специалистов, которые помогут Вам с настройкой и управлением аппаратуры во время мероприятия.</p>
							</div>
							<div class="block-buttons">
								<div class="links-row">
									<div class="item d-lg-none">
										<a href="tel:84952353071" class="big-phone-link no-margin">
											<i class="icon-phone-24"></i>
											<span>8 (495) 235-30-71</span>
										</a>
									</div>
									<!-- ↓↓↓ Если класс .btn добавляется к <button>, то по неведомой магии нужно увеличить z-index именно родительского элемента. Это можно сделать добавив к нему класс .lift-up ↓↓↓ -->
									<div class="item lift-up">
										<button class="btn" data-toggle="modal" data-targer="#modal-call-order">Заказать звонок</button>
									</div>
									<div class="item d-none d-lg-block">
										<div class="contacts-links">
											<a href="http://www.esmedia.ru/price.xlsx" target="_blank" class="item">
												<i class="icon-coins"></i>
												<span>Скачать прайс-лист</span>
											</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<section class="rent-conditions-section section-default-top-padding">
				<div class="container">
					<div class="row">
						<div class="col-md-6 col-lg-8">
							<div class="section-caption left-aligned">
								<h3 class="esm-h2 caption-title"><span>Условия</span> аренды</h3>
							</div>
							<p class="esm-body-1">Компания Esmedia предлагает Вам воспользоваться услугами аренды видеооборудования, звукового оборудования и светового оборудования. У нас Вы также можете найти конференц-системы, системы синхроперевода, телемост, интернет-трансляции и другое. Мы предлагаем только качественное оборудование, которое поможет Вам сделать любое выступление более наглядным, а мероприятие — ярким, громким и насыщенным.</p>
							<div class="conditions-list margin-top-huge">
								<div class="item">
									<i class="icon-coin-big"></i>
									<span class="esm-h4">Аренда по предоплате</span>
								</div>
								<div class="item">
									<i class="icon-wallet"></i>
									<span class="esm-h4">Гибкая форма оплаты</span>
								</div>
								<div class="item">
									<i class="icon-contract"></i>
									<span class="esm-h4">Работаем по договору</span>
								</div>
							</div>
						</div>
						<div class="col-md-6 col-lg-4">
							<div class="download-contract">
								<img src="img/common/contract.png" alt="">
								<div class="contacts-links">
									<a href="#" target="_blank" class="item">
										<i class="icon-coins"></i>
										<span>Скачать договор</span>
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<section class="text-section section-default-top-padding">
				<div class="container">
					<div class="row">
						<div class="col-lg-5 d-none d-lg-block">
							<div class="bordered-image">
								<img src="img/common/projector-2.jpg" alt="">
							</div>
						</div>
						<div class="col-lg-7">
							<div class="section-caption left-aligned">
								<h3 class="caption-title esm-h2"><span>Текстовый блок</span></h3>
							</div>
							<div class="bordered-image d-lg-none margin-bottom-big lg-margin-no">
								<img src="img/common/projector-2.jpg" alt="">
							</div>
							<div class="esm-typography">
								<p>Компания Esmedia предлагает Вам воспользоваться услугами аренды видеооборудования, звукового оборудования и светового оборудования. У нас Вы также можете найти конференц-системы, системы синхроперевода, телемост, интернет-трансляции и другое. </p>
								<p>Мы предлагаем только качественное оборудование, которое поможет Вам сделать любое выступление более наглядным, а мероприятие — ярким, громким и насыщенным. <br>Широкий ассортимент проекторов в аренду, плазменных панелей, видеостен, видеопультов и видеокамер, самое разнообразное звуковое и световое оборудование — все это наша компания ESM сервис! </p>
							</div>
						</div>
					</div>
				</div>
			</section>
			<section class="see-more-section section-default-top-padding">
				<div class="container">
					<div class="section-caption left-aligned">
						<h3 class="caption-title esm-h2"><span>Смотрите</span> также</h3>
					</div>
					<div class="equipment-rent-slider default-slide-paddings">
						<div class="slide">
							<a href="equipment-rent.php" class="white-card">
								<div class="card-image">
									<img src="img/equipment/plasma-panel.png" alt="Плазменные панели">
								</div>
								<div class="card-name">
									<p class="esm-h4">Плазменные панели</p>
								</div>
							</a>
						</div>
						<div class="slide">
							<a href="equipment-rent.php" class="white-card">
								<div class="card-image">
									<img src="img/equipment/sound.png" alt="Звуковое оборудование">
								</div>
								<div class="card-name">
									<p class="esm-h4">Звуковое оборудование</p>
								</div>
							</a>
						</div>
						<div class="slide">
							<a href="equipment-rent.php" class="white-card">
								<div class="card-image">
									<img src="img/equipment/projector-screen.png" alt="Проекционные экраны">
								</div>
								<div class="card-name">
									<p class="esm-h4">Проекционные экраны</p>
								</div>
							</a>
						</div>
						<div class="slide">
							<a href="equipment-rent.php" class="white-card">
								<div class="card-image">
									<img src="img/equipment/video-wall-orion.png" alt="Видеостены Orion">
								</div>
								<div class="card-name">
									<p class="esm-h4">Видеостены Orion</p>
								</div>
							</a>
						</div>
					</div>
					<div class="button-with-dashes">
						<a href="equipment-rent.php" class="btn btn-light">Больше</a>
					</div>
				</div>
			</section>
			<section class="brands-section section-default-top-padding padding-bottom-no lg-padding-bottom-giant">
				<div class="container">
					<div class="section-caption">
						<h2 class="caption-title esm-h2"><span>Бренды</span> оборудования</h2>
					</div>
					<div class="brands-slider default-slide-paddings with-arrows">
						<div class="slide">
							<div class="brand-logo">
								<img src="img/brands/panasonic.png" alt="Panasonic Logo">
							</div>
						</div>
						<div class="slide">
							<div class="brand-logo">
								<img src="img/brands/samsung.png" alt="Samsung Logo">
							</div>
						</div>
						<div class="slide">
							<div class="brand-logo">
								<img src="img/brands/eiki.png" alt="Eiki Logo">
							</div>
						</div>
						<div class="slide">
							<div class="brand-logo">
								<img src="img/brands/sanyo.png" alt="Sanyo Logo">
							</div>
						</div>
						<div class="slide">
							<div class="brand-logo">
								<img src="img/brands/panasonic.png" alt="Panasonic Logo">
							</div>
						</div>
						<div class="slide">
							<div class="brand-logo">
								<img src="img/brands/samsung.png" alt="Samsung Logo">
							</div>
						</div>
						<div class="slide">
							<div class="brand-logo">
								<img src="img/brands/eiki.png" alt="Eiki Logo">
							</div>
						</div>
						<div class="slide">
							<div class="brand-logo">
								<img src="img/brands/sanyo.png" alt="Sanyo Logo">
							</div>
						</div>
					</div>
				</div>
			</section>
			<section class="request-section">
				<div class="container">
					<div class="request-section-inner">
						<div class="section-content">
							<div class="section-caption left-aligned">
								<h2 class="caption-title esm-h2"><span>Оформить</span> заявку</h2>
							</div>
							<form action="#" class="form request-form">
								<div class="form-fields">
									<div class="item">
										<div class="form-field">
											<input type="text" class="input-field" placeholder="Ваше имя">
											<div class="field-error"></div>
										</div>
									</div>
									<div class="item">
										<div class="form-field">
											<input type="tel" class="input-field" placeholder="Телефон">
											<div class="field-error"></div>
										</div>
									</div>
								</div>
								<div class="form-button lift-up">
									<!-- ↓↓↓ Использовать <input type="submit"> нельзя, так как в оформлении кнопок используются псевдоэлементы  ↓↓↓ -->
									<button type="submit" class="btn">Отправить</button>
								</div>
							</form>
							<p class="esm-note">Нажимая на кнопку «Отправить», вы даете согласие <br class="d-none d-sm-inline">на обработку персональных данных</p>
						</div>
						<div class="section-image" id="parallax-viewport-support-girl" data-friction-x="0.05" data-friction-y="0.05" data-scalar-y="12">
							<img src="img/common/support-girl.png" alt="" data-depth="0.15">
						</div>
					</div>
				</div>
			</section>
		</div>
	</div>
<?php include('footer.php'); ?>