<?php $page_title = 'Обратная связь'; ?>
<?php include('header.php'); ?>
	<div class="page-content">
		<section class="breadcrumbs-section">
			<ul class="breadcrumbs">
				<li><a href="index.php">Главная</a></li>
				<li><?= $page_title ?></li>
			</ul>
		</section>
		<div class="inner-page-wrapper">
			<section class="post-content">
				<h1 class="re-h1">Обратная связь</h1>
				<div class="post-text re-typography">
					<p>Космологи́ческая сингуля́рность — состояние Вселенной в определённый момент времени в прошлом, когда плотность энергии (материи) и кривизна пространства-времени были очень велики — порядка планковских значений. Это состояние, вместе с последующим этапом эволюции Вселенной, пока плотность энергии (материи) оставалась высокой.</p>
				</div>
				<form action="#" class="feedback-form form">
					<div class="row">
						<div class="col-md-4">
							<div class="form-row">
								<div class="form-field">
									<input type="text" required class="input-field" id="userName" name="userName">
									<label for="userName">Ваше имя <span class="required">*</span></label>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-row">
								<div class="form-field">
									<input type="tel" class="input-field" id="userPhone" name="userPhone">
									<label for="userPhone">Телефон</label>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-row">
								<div class="form-field">
									<input type="email" required class="input-field" id="userEmail" name="userEmail">
									<label for="userEmail">E-mail <span class="required">*</span></label>
								</div>
							</div>
						</div>
					</div>
					<div class="form-row">
						<div class="form-field">
							<textarea required class="textarea" id="userMessage" name="userMessage"></textarea>
							<label for="userMessage">Текст сообщения <span class="required">*</span></label>
						</div>
					</div>
					<div class="form-row flex-center margin-bottom-no">
						<button class="btn xs-fullwidth" style="min-width: 180px" type="submit">Отправить</button>
					</div>
				</form>
			</section>
		</div>
	</div>
<?php include('footer.php'); ?>