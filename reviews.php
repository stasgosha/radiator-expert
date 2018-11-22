<?php $page_title = 'Отзывы клиентов'; ?>
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
						<h1 class="esm-h2 caption-title"><span>Отзывы</span> клиентов</h1>
					</div>
					<div class="row">
						<!-- ↓↓↓ WP loop goes here ↓↓↓ -->
						<?php for ($i=0; $i < 4; $i++): ?>
							<div class="col-md-6 margin-bottom-large">
								<div class="review-card">
									<div class="card-header">
										<div class="review-logo">
											<img src="img/reviews/star-icon.png" alt="">
										</div>
										<div class="review-author">
											<p class="esm-body-1 margin-no"><strong>Компания ООО «Москва экспо»</strong></p>
											<p class="esm-note">1 января 2018</p>
										</div>
									</div>
									<div class="card-content esm-typography">
										<p>В рамках классической общей теории относительности сингулярности обязательно возникают при формировании чёрных дыр под горизонтом событий, в таком случае они ненаблюдаемы извне. В некоторых случаях сингулярности могут быть видны внешнему наблюдателю — так называемые голые сингулярности, например космологическая сингулярность.</p>
									</div>
									<div class="card-footer">
										<div class="d-flex justify-content-start justify-content-sm-end">
											<a href="#" target="_blank" class="view-more">
												<i class="icon icon-document"></i>
												<span>Оригинал отзыва</span>
											</a>
										</div>
									</div>
								</div>
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