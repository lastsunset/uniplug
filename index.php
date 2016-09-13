<?require_once($_SERVER['DOCUMENT_ROOT']."/database.php")?>

<?
$getData = "SELECT username, comment, date FROM comment";
$getItemFromDatabase = $databaseHandle->query($getData);

?>
<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100italic,900italic,900,500italic,700,700italic,500,400italic,300italic,300,100|Roboto+Condensed:400,700italic,700,400italic,300italic,300&amp;subset=latin,cyrillic,cyrillic-ext">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/4.2.0/normalize.min.css">
	<link rel="stylesheet" href="style.css">

	<title>Тестовое задание</title>
</head>
<body>

<header class="header">
	<div class="container clearfix">
		<a href="#" class="logo logo--header">
			<span>ЮниПлаг</span>
		</a>
		<div class="header__contacts">
			<a href="tel:+74959887998" class="header__phone"><i class="fa fa-phone"></i> +7 (495) 988-79-98</a>
			<a href="mailto:contact@uniplug.ru" class="header__email"><i class="fa fa-envelope"></i> contact@uniplug.ru</a>
			<a href="skype:uniplug?chat" class="header__skype"><i class="fa fa-skype"></i> uniplug</a>
		</div>
	</div>
</header>

<main class="main">
	<div class="container">
		<h1 class="main__title">Комментарии</h1>
		<section class="comments-block">
				<?while($getItem = $getItemFromDatabase->fetch()):?>
					<div class="comment">
						<div class="comment__header">
							<h2 class="comment__title"><?=$getItem['username']?></h2>
							<time class="comment__date" datetime="2014.02.07T16:10"><?=$getItem['date']?></time>
						</div>
						<div class="comment__body"><?=$getItem['comment']?></div>
					</div>
				<?endwhile;?>
		</section>
		<section class="comments-bottom">
			<h3 class="comments-bottom__title">Оставить комментарий</h3>
			<form action="process.php" class="comment-form clearfix" method="post">
				<label for="name" class="comment-form__label">Ваше имя</label>
				<input type="text" class="comment-form__input" name="name" id="name" placeholder="Введите Ваше имя">
				<label for="message" class="comment-form__label">Ваш комментарий</label>
				<textarea class="comment-form__input comment-form__input--textarea" name="message" id="message" placeholder="Введите Ваш комментарий"></textarea>
				<input type="submit" class="btn" value="Отправить">
			</form>
		</section>
	</div>
</main>

<footer class="footer">
	<div class="container clearfix">
		<a href="#" class="logo logo--footer">
			<span>ЮниПлаг</span>
		</a>
		<div class="footer__right">
			<div class="footer__contacts">
				<a href="tel:+74959887998" class="footer__phone-square"><i class="fa fa-fw fa-phone"></i> +7 (495) 988-79-98</a>
				<br>
				<a href="mailto:contact@uniplug.ru" class="footer__email"><i class="fa fa-fw fa-envelope"></i> contact@uniplug.ru</a>
				<br>
				<span class="footer__address"><i class="fa fa-fw fa-map-marker"></i> г. Москва, ул. Промышленная, дом 11, 6 этаж, офис 664</span>
			</div>
		</div>
	</div>
	<div class="footer__copyright">
		<div class="container">Компания ООО «ЮниПлаг» / UniPlug Ltd. &copy; 2009-2016</div>
	</div>
</footer>

</body>
</html>