<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="./css/style.css">
	<link rel="shortcut icon" href="./img/01.ico" type="image/x-icon">
	<title>ОДЧД | Материалы</title>
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
						  <a href="./other.php" class="menu__item menu__item--selected">Материалы</a>
						  <a href="./event.php" class="menu__item">События</a>
						  <a href="./formtoo.php" class="menu__item">Стать участником</a>
						  
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
				<section class='main__doc'>
					<div class="container">
						<div class="row__card">
							<section class="row__card-secbig">
								<arcticle class="card">
									<div class="card__body">
										<h4 class="card__title">Arcticle title</h4>
										<p class="card__text">Lorem ipsum dolor sit amet consectetur adipisicing.</p>
										<time class="card__data" pubdate>8.11.2022</time>
									</div>
									<a href="" class="btn btn__ptimary"></a>
								</arcticle>
							</section>

							<section class="row__card-sec">
								<arcticle class="card">
									<img src="./img/01.png" class="card__img-top" alt='#'>
									<div class="card__body">
										<h4 class="card__title">Arcticle title</h4>
										<p class="card__text">Lorem ipsum dolor sit amet consectetur adipisicing.</p>
										<time class="card__data" pubdate>8.11.2022</time>
									</div>
									<a href="" class="btn btn__ptimary"></a>
								</arcticle>

								<arcticle class="card">
									<img src="./img/01.png" class="card__img-top" alt='#'>
									<div class="card__body">
										<h4 class="card__title">Arcticle title</h4>
										<p class="card__text">Lorem ipsum dolor sit amet consectetur adipisicing.</p>
										<p class="card__data"><span>8.11.2022</span></p>
									</div>
									<a href="" class="btn btn__ptimary"></a>
								</arcticle>

								<arcticle class="card">
									<img src="./img/01.png" class="card__img-top" alt='#'>
									<div class="card__body">
										<h4 class="card__title">Arcticle title</h4>
										<p class="card__text">Lorem ipsum dolor sit amet consectetur adipisicing.</p>
										<time class="card__data" pubdate>8.11.2022</time>
									</div>
									<a href="" class="btn btn__ptimary"></a>
								</arcticle>
							</section>

							<section class="row__card-secbig">
								<arcticle class="card">
									<div class="card__body">
										<h4 class="card__title">Arcticle title</h4>
										<p class="card__text">Lorem ipsum dolor sit amet consectetur adipisicing.</p>
										<time class="card__data" pubdate>8.11.2022</time>
									</div>
									<a href="" class="btn btn__ptimary"></a>
								</arcticle>
							</section>

							<section class="row__card-sec">
								<arcticle class="card">
									<img src="https://telegra.ph/file/64180521407a0f8a77a13.png" class="card__img-top" alt='#'>
									<div class="card__body">
										<h4 class="card__title">Arcticle title</h4>
										<p class="card__text">Lorem ipsum dolor sit amet consectetur adipisicing.</p>
										<time class="card__data" pubdate>8.11.2022</time>
									</div>
									<a href="" class="btn btn__ptimary"></a>
								</arcticle>

								<arcticle class="card">
									<img src="https://telegra.ph/file/1fe08773632b4c2e5e1d9.png" class="card__img-top" alt='#'>
									<div class="card__body">
										<h4 class="card__title">Arcticle title</h4>
										<p class="card__text">Lorem ipsum dolor sit amet consectetur adipisicing.</p>
										<time class="card__data" pubdate>8.11.2022</time>
									</div>
									<a href="" class="btn btn__ptimary"></a>
								</arcticle>
							</section>
						</div>
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