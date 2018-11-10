<?php $page_title = 'Главная'; ?>
<?php $header_class = 'transparent absolute'; ?>
<?php include('header.php'); ?>
	<div class="page-content">
		<section class="main-slider-section">
			<div class="main-slider white-arrows">
				<?php for ($i=0; $i < 5; $i++): ?>
					<div class="slide">
						<div class="container">
							<div class="slide-inner">
								<div class="slide-text esm-typography">
									<h1 class="color-accent">Бесшовные <br><span>видеостены Orion</span></h1>
									<p>Мы можем предложить аренду бесшовных видеостен, которые используются в основном для рекламы различных товаров и изделий.</p>
									<div class="slide-price-block">
										<div class="price">от <span class="bigger">1 500 <span class="rub">З</span></span></div>
										<div class="price-info">Аренда в сутки</div>
									</div>
									<a href="#" class="btn">Взять в аренду</a>
								</div>
								<!-- ↓↓↓ ID может быть любой, но должен начинаться с parallax-viewport ↓↓↓ -->
								<div class="slide-image" id="parallax-viewport-slide-<?= $i ?>" data-friction-x="0.05" data-friction-y="0.05" data-scalar-y="12">
									<div class="parallax-layer" data-depth="0.15">
										<img src="img/slides/video-wall.png" alt="" style="margin-right: -116px;">
									</div>
								</div>
							</div>
						</div>
					</div>
				<?php endfor; ?>
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
		<section class="equipment-rent-section">
			<div class="container">
				<div class="section-caption">
					<h2 class="esm-h2 caption-title"><span>Аренда</span> оборудования</h2>
				</div>
				<!-- .equipment-rent-slider -->
				<div class="row">
					<div class="col-3">
						<a href="equipment-rent.php" class="white-card">
							<div class="card-image">
								<img src="img/equipment/plasma-panel.png" alt="Плазменные панели">
							</div>
							<div class="card-name">
								<p class="esm-h4">Плазменные панели</p>
							</div>
						</a>
					</div>
					<div class="col-3">
						<a href="equipment-rent.php" class="white-card">
							<div class="card-image">
								<img src="img/equipment/projector.png" alt="Проекторы">
							</div>
							<div class="card-name">
								<p class="esm-h4">Проекторы</p>
							</div>
						</a>
					</div>
					<div class="col-3">
						<a href="equipment-rent.php" class="white-card">
							<div class="card-image">
								<img src="img/equipment/projector-screen.png" alt="Проекционные экраны">
							</div>
							<div class="card-name">
								<p class="esm-h4">Проекционные экраны</p>
							</div>
						</a>
					</div>
					<div class="col-3">
						<a href="equipment-rent.php" class="white-card">
							<div class="card-image">
								<img src="img/equipment/video-wall-orion.png" alt="Видеостены Orion">
							</div>
							<div class="card-name">
								<p class="esm-h4">Видеостены Orion</p>
							</div>
						</a>
					</div>
					<div class="col-3">
						<a href="equipment-rent.php" class="white-card">
							<div class="card-image">
								<img src="img/equipment/video-wall-omnishape.png" alt="Видеостены OmniShapes">
							</div>
							<div class="card-name">
								<p class="esm-h4">Видеостены OmniShapes</p>
							</div>
						</a>
					</div>
					<div class="col-3">
						<a href="equipment-rent.php" class="white-card">
							<div class="card-image">
								<img src="img/equipment/diod-screen.png" alt="Светодиодные экраны">
							</div>
							<div class="card-name">
								<p class="esm-h4">Светодиодные экраны</p>
							</div>
						</a>
					</div>
					<div class="col-3">
						<a href="equipment-rent.php" class="white-card">
							<div class="card-image">
								<img src="img/equipment/sound.png" alt="Звуковое оборудование">
							</div>
							<div class="card-name">
								<p class="esm-h4">Звуковое оборудование</p>
							</div>
						</a>
					</div>
					<div class="col-3">
						<a href="equipment-rent.php" class="white-card">
							<div class="card-image">
								<img src="img/equipment/light.png" alt="Световое оборудование">
							</div>
							<div class="card-name">
								<p class="esm-h4">Световое оборудование</p>
							</div>
						</a>
					</div>
					<div class="col-3">
						<a href="equipment-rent.php" class="white-card">
							<div class="card-image">
								<img src="img/equipment/sensor-panel.png" alt="Сенсорные панели">
							</div>
							<div class="card-name">
								<p class="esm-h4">Сенсорные панели</p>
							</div>
						</a>
					</div>
					<div class="col-3">
						<a href="equipment-rent.php" class="white-card">
							<div class="card-image">
								<img src="img/equipment/camera.png" alt="Видеооборудование">
							</div>
							<div class="card-name">
								<p class="esm-h4">Видеооборудование</p>
							</div>
						</a>
					</div>
					<div class="col-3">
						<a href="equipment-rent.php" class="white-card">
							<div class="card-image">
								<img src="img/equipment/conference-system.png" alt="Конференц-системы">
							</div>
							<div class="card-name">
								<p class="esm-h4">Конференц-системы</p>
							</div>
						</a>
					</div>
					<div class="col-3">
						<a href="equipment-rent.php" class="white-card">
							<div class="card-image align-self-end">
								<img src="img/equipment/sync-translate.png" alt="Синхронный перевод" style="margin-right: -15px;">
							</div>
							<div class="card-name">
								<p class="esm-h4">Синхронный перевод</p>
							</div>
						</a>
					</div>
				</div>
			</div>
		</section>
		<section class="order-call-section">
			<div class="container">
				<div class="order-call-block">
					<div class="block-content">
						<a href="tel:84952353071" class="big-phone-link">
							<i class="icon-phone-24"></i>
							<span>8 (495) 235-30-71</span>
						</a>
						<div class="block-text esm-typography">
							<p>Вместе с арендой оборудования Вы можете нанять наших высококвалифицированных специалистов, которые помогут Вам с настройкой и управлением аппаратуры во время мероприятия.</p>
						</div>
						<div class="block-buttons">
							<div class="links-row">
								<!-- ↓↓↓ Если класс .btn добавляется к <button>, то по неведомой магии нужно увеличить z-index именно родительского элемента. Это можно сделать добавив к нему класс .lift-up ↓↓↓ -->
								<div class="item lift-up">
									<button class="btn" data-toggle="modal" data-targer="#modal-call-order">Заказать звонок</button>
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
					</div>
				</div>
			</div>
		</section>
		<section class="projects-section">
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
		<section class="rent-section">
			<div class="container">
				<div class="big-rent-block">
					<div class="block-image" id="parallax-viewport-rent-section" data-friction-x="0.05" data-friction-y="0.05" data-scalar-y="12">
						<img src="img/common/projector-rent.png" alt="" data-depth="0.3">
					</div>
					<div class="block-content esm-typography">
						<div class="section-caption left-aligned">
							<h2 class="caption-title esm-h2"><span>Аренда</span> <br>оборудования</h2>
						</div>
						<p>Проблема существования космологической сингулярности является одной из наиболее серьёзных проблем физической космологии. Дело в том, что никакие наши сведения о том, что произошло после Большого Взрыва, не могут дать нам никакой информации о том, что происходило до этого.
							<br>Попытки решения проблемы существования этой сингулярности идут в нескольких направлениях: во-первых, считается, что квантовая гравитация даст описание динамики гравитационного поля, свободного от сингулярностей[3], во-вторых, есть мнение, что учёт квантовых эффектов в негравитационных полях может нарушить условие энергодоминантности, на котором базируется доказательство Хокинга.
						</p>
					</div>
				</div>
			</div>
		</section>
		<section class="brands-section">
			<div class="container">
				<div class="section-caption">
					<h2 class="caption-title esm-h2"><span>Бренды</span> оборудования</h2>
				</div>
				<div class="brands-slider default-slide-paddings">
					<div class="slide">
						<a href="#" class="brand-logo">
							<img src="img/brands/panasonic.png" alt="Panasonic Logo">
						</a>
					</div>
					<div class="slide">
						<a href="#" class="brand-logo">
							<img src="img/brands/samsung.png" alt="Samsung Logo">
						</a>
					</div>
					<div class="slide">
						<a href="#" class="brand-logo">
							<img src="img/brands/eiki.png" alt="Eiki Logo">
						</a>
					</div>
					<div class="slide">
						<a href="#" class="brand-logo">
							<img src="img/brands/sanyo.png" alt="Sanyo Logo">
						</a>
					</div>
					<div class="slide">
						<a href="#" class="brand-logo">
							<img src="img/brands/panasonic.png" alt="Panasonic Logo">
						</a>
					</div>
					<div class="slide">
						<a href="#" class="brand-logo">
							<img src="img/brands/samsung.png" alt="Samsung Logo">
						</a>
					</div>
					<div class="slide">
						<a href="#" class="brand-logo">
							<img src="img/brands/eiki.png" alt="Eiki Logo">
						</a>
					</div>
					<div class="slide">
						<a href="#" class="brand-logo">
							<img src="img/brands/sanyo.png" alt="Sanyo Logo">
						</a>
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
						<p class="esm-note">Нажимая на кнопку «Отправить», вы даете согласие <br>на обработку персональных данных</p>
					</div>
					<div class="section-image" id="parallax-viewport-support-girl" data-friction-x="0.05" data-friction-y="0.05" data-scalar-y="12">
						<img src="img/common/support-girl.png" alt="" data-depth="0.15">
					</div>
				</div>
			</div>
		</section>
	</div>
<?php include('footer.php'); ?>