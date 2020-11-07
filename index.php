<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="stylesheet" href="addition/font-awesome-4.7.0/css/font-awesome.min.css" />
	<link rel="stylesheet" href="css/fonts.css" />
	<link rel="stylesheet" href="css/style.css" />
	<link rel="stylesheet" href="css/media.css" />
	<link rel="stylesheet" href="addition/slick/slick.css"/>
	<link rel="stylesheet" href="addition/slick/slick-theme.css"/>
	<title>Главная</title>
</head>
<body>

	<?php require_once "blocks/header.php" ?>
	<?php require_once "blocks/social-block.php" ?>
		<div id="dignity">
			<div id="wrap-links">
				<div id="links">
					<ul>
						<li>
							<a href="#">
								Защита бизнеса
							</a>
						</li>
						<li>
							<a href="#">
								Защита дома и семья
							</a>
						</li>
						<li>
							<a href="#">
								Системы безопаасности
							</a>
						</li>
						<li>
							<a href="#">
								Защита от пожара
							</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<div id="wrap-about-company">
			<div class="headline"><p>О КОМПАНИИ</p></div>
			<div id="about-company">
				<div id="div-wrap">
					<div class="div-1">
						<img src="img/shield-1.png">
						<h3>Наша цель</h3>
						<p>
							Наша цель-понять проблему
							и предоставить оптимальное  
							решение каждому клиенту, 
							обезпечив ему максимальную 
							уверенность и спококоствие.
							<a href="#" class="more">Подробнее... <i class="fa fa-arrow-right"></i></a>
						</p>
					</div>
					<div>
						<img src="img/shield-2.png">
						<h3 class="h3">Наша миссия</h3>
						<p>Миссия нашей группы компаний 
							безопасности ежедневно делать
							жизнь и бизнес наших клиентов 
							более безопасным.
							<a href="#" class="more">Подробнее... <i class="fa fa-arrow-right"></i></a>
						</p>
					</div>
				</div>
				<br>
				<a href="#map" class="button">Оставить заявку</a>
			</div>
			<div class="headline"><p>НАШИ УСЛУГИ</p></div>
		</div>

		<div id="оur-services">
			<div>
				<img class="fon-оur-services-2" src="img/teaser.png">
				<ul>
					<li>Деятельность <br> с 1996 года;<img src="img/pros/icon-1.png"></li>
					<li>Экспертный подход <br> к безопасности;<img src="img/pros/icon-2.png"></li>
					<li>Профессиональная <br> команда<img src="img/pros/icon-3.png"></li>
					<li>доверие <br> ведущих компаний <img src="img/pros/icon-4.png"></li>
					<li>Полная материальная <br> ответственность.<img src="img/pros/icon-5.png"></li>
					<li>Техническая <br>поддержка 24/7; <img src="img/pros/icon-6.png"></li>
					<li>Широкая зона <br>присутствия;<img src="img/pros/icon-7.png"></li>
					<li>Страхование <br> ответственности;<img src="img/pros/icon-8.png"></li>
				</ul>
			</div>
		</div>
		<a href="#map" class="button">Оставить заявку</a>
		<div id="wrap-our-mission">
			<div class="headline-2"><p>НАША МИССИЯ</p></div>
			<div id="our-mission">
				<img class="tiger" src="img/tiger.png" >
				<section>
					<img src="img/our-mission/icon-our-mission-1.png">
					<h4>Гарантии</h4>
					<p>безопасности</p>
				</section>
				<section>
					<img src="img/our-mission/icon-our-mission-2.png">
					<h4>Профессиональный </h4>
					<p>подход</p>
				</section>
				<section>
					<img src="img/our-mission/icon-our-mission-3.png">
					<h4>Оперативность</h4>
					<p>реагирования</p>
				</section>
				<section>
					<img src="img/our-mission/icon-our-mission-4.png">
					<h4>Обоснованные</h4>
					<p>цены</p>
				</section>
				<img class="tiger-right" src="img/tiger.png">
			</div>
		</div>
		<a href="#map" class="button">Оставить заявку</a>
		<div class="headline-2"><p>НАШИ КЛИЕНТЫ</p></div>
		<div id="our-clients">
			<div id="slider">
				<div><img src="img/slider/slider-1.png"></div>
				<div><img src="img/slider/slider-2.png"></div>
				<div><img src="img/slider/slider-3.png"></div>
				<div><img src="img/slider/slider-4.png"></div>
				<div><img src="img/slider/slider-5.png"></div>
			</div>
		</div>
		<a href="#map" class="button">Оставить заявку</a>
		<?php require_once "blocks/footer.php" ?>

			<script src="js/jquery-3.1.1.min.js" type="text/javascript"></script>
			<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
			<script type="text/javascript" src="addition/slick/slick.min.js"></script>
			<script type="text/javascript">
				$('.your-class').slick({
					slidesToShow: 3.93,
					slidesToScroll: 1,
					autoplay: true,
					autoplaySpeed: 2000,
				});
			</script>
		</body>



		<script>document.write('<script src="http://' + (location.host || 'localhost').split(':')[0] + ':35729/livereload.js?snipver=1"></' + 'script>')</script>
		</html>