<?php $page_title = 'Контакты'; ?>
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
					<h1 class="esm-h2 caption-title"><span>Контакты</span></h1>
				</div>
			</div>
			<section class="contacts-map-section">
				<div class="map">
					<script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3Aa1785cba48028332e4051b9fcb597a785093b472f8e4f310aec28599d15c00e1&amp;width=100%25&amp;height=450&amp;lang=ru_RU&amp;scroll=false"></script>
				</div>
				<div class="map-contacts">
					<div class="container">
						<div class="row">
							<div class="col-lg-5 col-xl-4">
								<div class="map-contacts-block">
									<ul class="contacts-list">
										<li>
											<div class="item-icon">
												<i class="icon-phone"></i>
											</div>
											<div class="item-content">
												<a href="tel:84952353071" class="tel-link">8 (495) <span>235-30-71</span></a>
												<br>
												<button class="btn btn-rounded btn-small" data-toggle="modal" data-targer="#modal-call-order">Заказать звонок!</button>
											</div>
										</li>
										<li>
											<div class="item-icon">
												<i class="icon-location"></i>
											</div>
											<div class="item-content">
												<p>г. Москва, ул. Ермакова Роща, <br>д. 16А стр. 1</p>
											</div>
										</li>
										<li>
											<div class="item-icon">
												<i class="icon-envelope"></i>
											</div>
											<div class="item-content">
												<a href="mailto:info@esmedia.ru" target="_blank">info@esmedia.ru</a>
											</div>
										</li>
										<li>
											<div class="item-icon">
												<i class="icon-clock"></i>
											</div>
											<div class="item-content">
												<p>Круглосуточно</p>
											</div>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<section class="contacts-footer-section section-default-paddings">
				<div class="container">
					<div class="row">
						<div class="col-lg-4">
							<div class="bordered-box">
								<div class="box-caption">
									<h4 class="esm-h4">Реквизиты</h4>
								</div>
								<p class="esm-note">ООО «ЕСМ СЕРВИС» <br>127055, г. Москва, ул. Лесная, д. 63, стр 1. <br>Тел. (495) 226-77-85 <br>ОГРН: 1157746139440 <br>ИНН: 7707334096 <br>КПП: 770701001 <br>Банк: АО «АЛЬФА-БАНК» <br>БИК: 044525593 <br>Корр/счет: 30101810200000000593 <br>Р/С: 40702810802620001226</p>
							</div>
						</div>
						<div class="col-lg-8 margin-top-giant lg-margin-no">
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
					</div>
				</div>
			</section>
		</div>
	</div>
<?php include('footer.php'); ?>