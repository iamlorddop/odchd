<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="./css/style.css">
	<link rel="shortcut icon" href="./img/01.ico" type="image/x-icon">
	<title>ОДЧД | Обработка персональных данных</title>
</head>

<body>
	<div class="wrapper">
		<div class="content">
			<div class="cookie">
				<div class="container">
					<div class="cookie-flex">
						<p class="cookie-text">Наш сайт использует <a href="./cookie.php" class="cookie__link">cookie-файлы</a>, чтобы согласиться с использованием:</p>
						<div class="cookie-btns">
							<button class="sub">Принимаю</button>
							<button class="res">Не принимаю</button>
						</div>
					</div>
				</div>
			</div>
			<header class="header">
				<div class="header__flex">
					<div class="header__logo">
						<img src="./img/header/01.svg" alt="">
					</div>

					<div class="row">
						<div class="menu">
							<a href="./index.php" class="menu__item menu--notin">Главная</a>
							<a href="./other.php" class="menu__item menu--notin">Материалы</a>
							<a href="./event.php" class="menu__item menu--notin">События</a>
							<a href="./formtoo.php" class="menu__item menu--notin">Стать участником</a>
						</div>
					</div>
					<input type="search" placeholder="Поиск" class="search header__search">
				</div>
			</header>

			<main class="main">
				<section class="main__doc">
					<div class="container">
						<h1 class="title">
							Обработка персональных данных
						</h1>
						<br>
						<h2 class="subtitle">Основные принципы</h2>
						<p class="text">Мы обеспечиваем конфиденциальность персональных данных и применяем все необходимые организационные и технические меры по их защите.</p>
						<br>
						<h2 class="subtitle">Категории персональных данных, которые мы обрабатываем</h2>
						<p class="text">Мы можем хранить три типа персональных данных:</p>
						<ul class="list">
							<li class="list__item">Идентификация — это имя, фамилия, любой другой используемый идентификатор, IP-адрес.</li>
							<li class="list__item">Контактные данные — E-mail пользователя или учетная запись, используемая для входа в профиль.</li>
							<li class="list__item">Платежная информация — дата и время осуществления платежа, сумма, последние четыре цифры карты.</li>
						</ul>
						<br>
						<h2 class="subtitle">Зачем и почему мы это делаем</h2>
						<p class="text">Мы обрабатываем персональные данные по нескольким причинам:</p>
						<ul class="list">
							<li class="list__item">Чтобы обеспечить работу сервисов.</li>
							<li class="list__item">Чтобы мы могли собирать статистику. Нам это нужно для двух вещей: чтобы следить, доступны ли наши сервисы читателям, и чтобы понимать, как читатели пользуются нашими сервисами, — и на основе наблюдений делать сервисы более удобными.</li>
						</ul>
						<p class="text">Данные, которые мы получаем от вас, мы используем только в соответствии с принципами обработки данных, указанными в этом документе.</p>
					</div>
				</section>
			</main>

		</div>

		<footer class="footer">
			<div class="container">
				<div class="footer__flex">
					<div class="footer__flex-item">
						<h2 class="footer__title">
							ОДЧД
						</h2>
						<a href="./abouto.php" class="footer__text">О движении</a>
						<a href="./achivments.php" class="footer__text">Наши достижения</a>
						<a href="./personal-data.php" class="footer__text">Обработка данных</a>
						<a href="./cookie.php" class="footer__text">Использование куки</a>
					</div>

					<div class="footer__flex-item">
						<h2 class="footer__title">
							Платформы
						</h2>
						<a href="https://t.me/odchd" class="footer__text">Телеграм</a>
						<a href="https://twitter.com/odchd" class="footer__text">Твиттер</a>
						<a href="https://instagram.com/odchd" class="footer__text">Инстаграм</a>
						<a href="https://vk.com/odchd" class="footer__text">Вконтакте</a>
					</div>

					<div class="footer__flex-item footer-form__block">
						<h2 class="footer__title">
							Связаться с нами
						</h2>
						<form action="./sendemail.php" id="form" class="footer__form">
							<div class="footer__form-input">
								<input type="email" class="form__input --email --req" name='email' placeholder="E-mail">
							</div>
							<div class="footer__form-input">
								<input type="text" class="form__input --req" name='firstname' placeholder="Имя">
							</div>
							<div class="footer__form-input">
								<input type="text" class="form__input --req" name='surname' placeholder="Фамилия">
							</div>
							<input type="submit" class="footer__form-btn" value="Отправить">
						</form>
					</div>
				</div>
			</div>
		</footer>
	</div>

	<script src="./js/script.js"></script>
</body>

</html>