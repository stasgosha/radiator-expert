<?php $page_title = 'Каталог статей'; ?>
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
			<section class="reviews-section">
				<div class="container">
					<div class="section-caption">
						<h1 class="esm-h2 caption-title"><span>Статьи</span></h1>
					</div>
					<div class="articles-list">
						<!-- ↓↓↓ WP loop goes here ↓↓↓ -->
						<?php for ($i=0; $i < 4; $i++): ?>
							<div class="item">
								<article class="article-block">
									<a href="single-article.php" class="article-image">
										<img src="http://placeimg.com/375/235/any?v=<?= $i ?>" alt="">
									</a>
									<div class="article-content">
										<header class="article-header">
											<h3 class="esm-h3 margin-bottom-tiny">
												<a href="single-article.php">Как правильно подобрать оборудование?</a>
											</h3>
											<time datetime="2018-01-20 19:00" class="esm-note">20 января 2018</time>
										</header>
										<div class="article-excerpt esm-typography">
											<p>В рамках классической общей теории относительности сингулярности обязательно возникают при формировании чёрных дыр под горизонтом событий, в таком случае они ненаблюдаемы извне. В некоторых случаях сингулярности могут быть видны внешнему наблюдателю — так называемые голые сингулярности.</p>
										</div>
										<footer class="article-footer">
											<a href="single-article.php" class="btn btn-no-accent">Читать далее</a>
										</footer>
									</div>
								</article>
							</div>
						<?php endfor; ?>
					</div>
					<div class="pagination-wrap">
						<!-- ↓↓↓ Default Pagination Layout ↓↓↓ -->
						<ul class="pagination">
							<li><a href="#">1</a></li>
							<li class="current"><a href="#">2</a></li>
							<li><a href="#">3</a></li>
							<li><a href="#">4</a></li>
							<li><a href="#">5</a></li>
						</ul>
						<!-- ↓↓↓ WP PageNavi Plagin Layout ↓↓↓ -->
						<!-- <div class="wp-pagenavi">
							<a class="first" href="http://blog.aparat.ua/">« Первая</a>
							<a class="previouspostslink" rel="prev" href="http://blog.aparat.ua/page/9/">«</a>
							<span class="extend">...</span>
							<span class="current">1</span>
							<a class="page larger" title="Page 2" href="http://blog.aparat.ua/page/2/">2</a>
							<a class="page larger" title="Page 3" href="http://blog.aparat.ua/page/3/">3</a>
							<a class="page larger" title="Page 4" href="http://blog.aparat.ua/page/4/">4</a>
							<a class="page larger" title="Page 5" href="http://blog.aparat.ua/page/5/">5</a>
							<span class="extend">...</span>
							<a class="larger page" title="Page 10" href="http://blog.aparat.ua/page/10/">10</a>
							<span class="extend">...</span>
							<a class="nextpostslink" rel="next" href="http://blog.aparat.ua/page/2/">»</a>
							<a class="last" href="http://blog.aparat.ua/page/10/">Последняя »</a>
						</div> -->
					</div>
				</div>
			</section>
		</div>
	</div>
<?php include('footer.php'); ?>