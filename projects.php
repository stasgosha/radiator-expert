<?php $page_title = 'Наши проекты'; ?>
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
			<section class="section">
				<div class="container">
					<div class="section-caption">
						<h1 class="esm-h2 caption-title"><span>Наши</span> проекты</h1>
					</div>
					<div class="row">
						<!-- ↓↓↓ WP loop goes here ↓↓↓ -->
						<?php for ($i=0; $i < 6; $i++): ?>
							<div class="col-sm-6 col-lg-4">
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