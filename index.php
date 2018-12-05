<?php $page_title = 'Главная'; ?>
<?php include('header.php'); ?>
	<div class="page-content">
		<section class="news-section">
			<div class="container">
				<div class="news-list">
					<!-- Для корректной работы скрипта (masonry) необходимо указывать высоту для .block-image (уже есть в css), а также не забыть добавить .grid-sizer -->
					<!-- Документация: https://masonry.desandro.com/layout.html -->
					<div class="grid-sizer"></div>
					<!-- data-wow-delay - задержка анимации. Может быть от 0 до 0.5 секунд -->
					<!-- Стандартная запись - data-wow-delay="0.3s" -->
					<div class="item wow fadeInUp" data-wow-delay="<?= rand(0, 5) / 10 ?>s">
						<a href="single-article.php" class="news-block">
							<div class="block-image">
								<img src="//placeimg.com/270/180/any?v=<?= rand() ?>" alt="">
							</div>
							<div class="block-content">
								<h3 class="re-h3 block-caption">Заголовок статьи в несколько строк</h3>
								<time datetime="2018-01-20 19:00" class="re-note">20 января 2018</time>
								<p class="re-body-1">Однако при анализе сингулярности Коротаев не учитывал этот факт...</p>
							</div>
						</a>
					</div>
					<div class="item wow fadeInUp" data-wow-delay="<?= rand(0, 5) / 10 ?>s">
						<a href="single-article.php" class="news-block">
							<div class="block-image big">
								<img src="//placeimg.com/270/390/any?v=<?= rand() ?>" alt="">
							</div>
							<div class="block-content">
								<h3 class="re-h3 block-caption">Заголовок статьи в несколько строк</h3>
								<time datetime="2018-01-20 19:00" class="re-note">20 января 2018</time>
								<p class="re-body-1">Однако при анализе сингулярности Коротаев не учитывал этот факт...</p>
							</div>
						</a>
					</div>
					<div class="item wow fadeInUp" data-wow-delay="<?= rand(0, 5) / 10 ?>s">
						<a href="single-article.php" class="news-block">
							<div class="block-content">
								<h3 class="re-h3 block-caption">Заголовок статьи в несколько строк</h3>
								<time datetime="2018-01-20 19:00" class="re-note">20 января 2018</time>
								<p class="re-body-1">Однако при анализе сингулярности Коротаев не учитывал этот факт...</p>
							</div>
						</a>
					</div>
					<div class="item wow fadeInUp" data-wow-delay="<?= rand(0, 5) / 10 ?>s">
						<a href="single-article.php" class="news-block">
							<div class="block-image">
								<img src="//placeimg.com/270/180/any?v=<?= rand() ?>" alt="">
							</div>
							<div class="block-content">
								<h3 class="re-h3 block-caption">Заголовок статьи в несколько строк</h3>
								<time datetime="2018-01-20 19:00" class="re-note">20 января 2018</time>
								<p class="re-body-1">Однако при анализе сингулярности Коротаев не учитывал этот факт...</p>
							</div>
						</a>
					</div>
					<div class="item wow fadeInUp" data-wow-delay="<?= rand(0, 5) / 10 ?>s">
						<a href="single-article.php" class="news-block">
							<div class="block-content">
								<h3 class="re-h3 block-caption">Заголовок статьи</h3>
								<time datetime="2018-01-20 19:00" class="re-note">20 января 2018</time>
								<p class="re-body-1">Идею об ускоряющемся росте научного знания впервые можно встретить в работах Фридриха Энгельса, который, в свою очередь, основывался на работах Эрнста Геккеля опубликованных в 1874—1875 годах, в которых автор указывал на ускорение темпов эволюции организмов...</p>
							</div>
						</a>
					</div>
					<div class="item wow fadeInUp" data-wow-delay="<?= rand(0, 5) / 10 ?>s">
						<a href="single-article.php" class="news-block">
							<div class="block-content">
								<h3 class="re-h3 block-caption">Заголовок статьи в несколько строк</h3>
								<time datetime="2018-01-20 19:00" class="re-note">20 января 2018</time>
								<p class="re-body-1">Однако при анализе сингулярности Коротаев не учитывал этот факт...</p>
							</div>
						</a>
					</div>
					<div class="item wow fadeInUp" data-wow-delay="<?= rand(0, 5) / 10 ?>s">
						<a href="single-article.php" class="news-block">
							<div class="block-image big">
								<img src="//placeimg.com/270/390/any?v=<?= rand() ?>" alt="">
							</div>
							<div class="block-content">
								<h3 class="re-h3 block-caption">Заголовок статьи в несколько строк</h3>
								<time datetime="2018-01-20 19:00" class="re-note">20 января 2018</time>
								<p class="re-body-1">Идею об ускоряющемся росте научного знания впервые можно встретить в работах Фридриха Энгельса...</p>
							</div>
						</a>
					</div>
					<div class="item wow fadeInUp" data-wow-delay="<?= rand(0, 5) / 10 ?>s">
						<a href="single-article.php" class="news-block">
							<div class="block-image">
								<img src="//placeimg.com/270/180/any?v=<?= rand() ?>" alt="">
							</div>
							<div class="block-content">
								<h3 class="re-h3 block-caption">Заголовок статьи в несколько строк</h3>
								<time datetime="2018-01-20 19:00" class="re-note">20 января 2018</time>
								<p class="re-body-1">Однако при анализе сингулярности Коротаев не учитывал этот факт...</p>
							</div>
						</a>
					</div>
					<div class="item wow fadeInUp" data-wow-delay="<?= rand(0, 5) / 10 ?>s">
						<a href="single-article.php" class="news-block">
							<div class="block-image">
								<img src="//placeimg.com/270/180/any?v=<?= rand() ?>" alt="">
							</div>
							<div class="block-content">
								<h3 class="re-h3 block-caption">Заголовок статьи в несколько строк</h3>
								<time datetime="2018-01-20 19:00" class="re-note">20 января 2018</time>
								<p class="re-body-1">Однако при анализе сингулярности Коротаев не учитывал этот факт...</p>
							</div>
						</a>
					</div>
					<div class="item wow fadeInUp" data-wow-delay="<?= rand(0, 5) / 10 ?>s">
						<a href="single-article.php" class="news-block">
							<div class="block-image">
								<img src="//placeimg.com/270/180/any?v=<?= rand() ?>" alt="">
							</div>
							<div class="block-content">
								<h3 class="re-h3 block-caption">Заголовок статьи в несколько строк</h3>
								<time datetime="2018-01-20 19:00" class="re-note">20 января 2018</time>
								<p class="re-body-1">Однако при анализе сингулярности Коротаев не учитывал этот факт...</p>
							</div>
						</a>
					</div>
					<div class="item wow fadeInUp" data-wow-delay="<?= rand(0, 5) / 10 ?>s">
						<a href="single-article.php" class="news-block">
							<div class="block-image">
								<img src="//placeimg.com/270/180/any?v=<?= rand() ?>" alt="">
							</div>
							<div class="block-content">
								<h3 class="re-h3 block-caption">Заголовок статьи в несколько строк</h3>
								<time datetime="2018-01-20 19:00" class="re-note">20 января 2018</time>
								<p class="re-body-1">Однако при анализе сингулярности Коротаев не учитывал этот факт...</p>
							</div>
						</a>
					</div>
					<div class="item wow fadeInUp" data-wow-delay="<?= rand(0, 5) / 10 ?>s">
						<a href="single-article.php" class="news-block">
							<div class="block-content">
								<h3 class="re-h3 block-caption">Запуск нового завода радиаторов в Москве впечатлил всех</h3>
								<time datetime="2018-01-20 19:00" class="re-note">20 января 2018</time>
								<p class="re-body-1">Идею об ускоряющемся росте научного знания впервые можно встретить в работах Фридриха Энгельса, который, в свою очередь, основывался на работах Эрнста Геккеля указывал на ускорение темпов эволюции организмов...</p>
							</div>
						</a>
					</div>
				</div>
				<div class="flex-center">
					<button class="btn xs-fullwidth">Показать больше</button>
				</div>
			</div>
		</section>
	</div>
<?php include('footer.php'); ?>