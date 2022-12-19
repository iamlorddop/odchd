<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="./css/style.css">
	<link rel="shortcut icon" href="./img/01.ico" type="image/x-icon">
	<title>ОДЧД | Стать участником</title>
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
					<a href='./index.php' class="header__logo">
						<img src="./img/header/01.svg" alt="">
					</a>

					<div class="row">
						<div class="menu">
						  <a href="./index.php" class="menu__item">Главная</a>
						  <a href="./news.php" class="menu__item">Новости</a>
						  <a href="./other.php" class="menu__item">Материалы</a>
						  <a href="./event.php" class="menu__item">События</a>
						  <a href="./formtoo.php" class="menu__item menu__item--selected">Стать участником</a>
						  
						  <div class="menu__hover"></div>
						</div>
					</div>
					<form class="search">
						<input type="search" placeholder="Поиск" id='search__input' class="search__input header__search">
						<button type='submit' class='search__button'><img src="./img/header/02.svg" alt=""></button>
					</form>
				</div>
			</header>

			<main class="main">
			<section class="main__doc">
					<div class="container">
						<h1 class="title">Стань волонтером ОДЧД</h1>
						<br>
						<p class="text">ОДЧД — это общественное движение «Чистое дело», деятельность которого направлена на то, чтобы сделать улицы России чистыми и выступает за защиту окружающей среды.</p>
						<p class="text">Мы ищем людей с различными навыками, желающим помочь нашей команде.</p>
						<p class="text">В нашу команду необходимы:</p>
						<br>
						<ul class="list">
							<li class="list__item">волонтеры по уборке;</li>
							<li class="list__item">помощники в организации;</li>
							<li class="list__item">SMM-специалисты;</li>
							<li class="list__item">редакторы соцсетей;</li>
							<li class="list__item">авторы и редакторы;</li>
							<li class="list__item">графические-/ арт-/ и моушн-дизайнеры;</li>
							<li class="list__item">режиссеры монтажа;</li>
							<li class="list__item">эксперты по экологии;</li>
						</ul>
						<br>
						<p class="text">Заполняйте анкету и приходите к нам!</p>
						<br>
						<form action="#" id="form-doc" class="form">
							<div class="form-input">
								<label for="#firstname">Ваше имя*: </label>
								<input type="text" class="form__input --req" name='firstname' placeholder="Имя">
							</div>
							<div class="form-input">
								<label for="#surname">Ваша фамилия*: </label>
								<input type="text" class="form__input --req" name='surname' placeholder="Фамилия">
							</div>
							<div class="form-input">
								<label for="#age">Ваш возраст*: </label>
								<input type="text" class="form__input --req" name='age' placeholder="Возраст">
							</div>
							<div class="form-input">
								<label for="#town">Ваш регион: </label>
								<input type="text" class="form__input --req" name='town' placeholder="Регион">
							</div>
							<div class="form-input">
								<label for="#hours">Сколько часов в день вы готовы уделять вашей работе*: </label>
								<input type="text" class="form__input --req" name='hours'>
							</div>
							<div class="form-input">
								<label for="#email">Ваш E-mail*: </label>
								<input type="email" class="form__input --email --req" name='email' placeholder="E-mail">
							</div>
							<br>
							<p class="text">Проверяйте указанную вами почту. В течении некоторого времени команда ОДЧД свяжется с вами.</p>
							<input type="submit" class="footer__form-btn" value="Отправить">
						</form>
					</div>
				</section>

				<section class="main__doc">
					<div class="container">
						<div class="main__contact">
							<h2 class="title">Читайте нас в телеграме</h2>
							<a class='main__contact-linkimg' href="https://t.me/odchd"><img src="./img/01.svg" alt="telegram"></a>
						</div>
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