<?php
	session_start();
	include_once ("includes/connect.php");
?>
<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/style.css">
	<title>Главная страница</title>
</head>
<body>
	<header class="header" id="home">
		<div class="back_bird"></div>
		<nav class="nav bd_container">
		
			<div class="nav_menu" id="nav-menu"> <!-- Меню -->

				<a href="#" class="nav_logo"><img class="nav_img" src="img/location-on-map.png" width="48" height="48" alt="Изображение логотипа"></a>
				<ul class="nav_list">
					<?php if(isset($_SESSION["status"])){ ?>
					
					    <li class="nav_item"><a href="includes/logout.php" class="nav_link">Выйти</a></li>
					   <li class="nav_item"><a href="map.php" class="nav_link">Создать карту</a></li>
					
					    <?php } else {?>
					
					   <li class="nav_item"><a href="signUp.php
					   	" class="nav_link">Регистрация</a></li> 
					
					    <?php  } ?>

					<li class="nav_item"><a href="#home" class="nav_link">Главная</a></li>
					<li class="nav_item"><a href="#about" class="nav_link">О сервисе</a></li>
					
				</ul>
			</div>
		</nav>
		<h1 class="main_title" >
			Графическая схема локальной сети с онлайн сервисом Link
		</h1>
		<h2 class="main_suptitle">
			Онлайн-сервис «Link» – это визуальное рабочее пространство, сочетающее в себе создание графических карт, визуализацию сетевых настроек устройств, возможность экспортирования готовых карт в любом формате. 
		</h2>
		<div class="fore_bird"></div>
	</header>

	<section class="table" id="about">
				<div class="table-header">
					<h2>O сервисе Link</h2>
					<p>Ниже описаны функции сервиса, а также возможности использования данной программы.</p>
			</div>
	</section>
	<!--Верстка первого описания-->
	<section class="about_section" >
		<div class="about_item">
			<h1 class="about_title">Визуализация виртуальных компьютерных сред</h1>
			<p class="about_subtitle">Получите наглядную картину соединений между виртуальными машинами и их хостами, что позволит четко понять зависимости между физическими и виртуальными системами.</p>			
		</div>
		<img class="about_img right" src="img/database-storage.png" alt="">
	</section>
	<!--Верстка второго описания-->
	<section class="about_section">
		<img class="about_img left" src="img/computer.png" alt="">
			<div class="about_item">
			<h1 class="about_title">Настройка карты сети под себя</h1>
			<p class="about_subtitle">После того, как карта сети построена, вы можете добавить поясняющие надписи, скрыть ненужные узлы, или дополнить карту логическими соединениями между компонентами. </p>			
		</div>
	</section>
	<!--Верстка третьего описания-->
	<section class="about_section">
		<div class="about_item">
			<h1 class="about_title">Взгляд на вашу сеть с высоты</h1>
			<p class="about_subtitle">Программа построения схемы топологии сети сети сканирует каждый «уголок» сети и создает ее интерактивную карту, дающую представление обо всех компьютерах, маршрутизаторах, коммутаторах и других подключенных устройствах.</p>
		</div>
		<img class="about_img right" src="img/lan.png" alt="">
	</section>
	<!--Верстка четвертого описания-->
	<section class="about_section">
		<img class="about_img left" src="img/network.png" alt="">
		<div class="about_item">
			<h1 class="about_title">Идеальный выбор для бизнеса</h1>
			<p class="about_subtitle">Умные схемы пригодятся любому коллективу, а система Link предлагает надежную масштабируемую платформу для их создания.</p>			
		</div>
	</section>
		<!--Верстка подвала-->
	<footer class="footer_section">
		<div class="footer_content">
			<h3 class="footer_title">Прочее</h3>
			<ul class="footer_list">
				<li>
					<a href="#">Новости</a>
				</li>
				<li>
					<a href="#">Обновления</a>
				</li>
			</ul>
		</div>
		<div class="footer_content">
			<h3 class="footer_title">Компания</h3>
			<ul class="footer_list">
				<li>
					<a href="#about">О сервисе</a>
				</li>
				<li>
					<a href="#home">Главная страница</a>
				</li>
			</ul>
		</div>
	</footer>
	<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
	<script>
		let logo = document.querySelector('.logo_header');
		blurredBird = document.querySelector('.back_bird');
		foreBird = document.querySelector('.fore_bird');
		window.addEventListener('scroll', function(){
			let scrolled = window.scrollY;
			logo.style.transform = "translate(0px, "+ scrolled/2 + "%)";
			foreBird.style.transform = "translate(0px, -"+ scrolled/80 + "%)";
		});
	</script>
</body>
</html>
