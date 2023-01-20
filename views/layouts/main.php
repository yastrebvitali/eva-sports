<?php

/** @var yii\web\View $this */
/** @var string $content */

use app\assets\AppAsset;
use app\widgets\Alert;
use yii\bootstrap5\Breadcrumbs;
use yii\bootstrap5\Html;
use yii\helpers\Url;
use yii\bootstrap5\Nav;
use yii\bootstrap5\NavBar;

AppAsset::register($this);

$this->registerCsrfMetaTags();
$this->registerMetaTag(['charset' => Yii::$app->charset], 'charset');
$this->registerMetaTag(['name' => 'viewport', 'content' => 'width=device-width, initial-scale=1, shrink-to-fit=no']);
$this->registerMetaTag(['name' => 'description', 'content' => $this->params['meta_description'] ?? '']);
$this->registerMetaTag(['name' => 'keywords', 'content' => $this->params['meta_keywords'] ?? '']);
$this->registerLinkTag(['rel' => 'icon', 'type' => 'image/x-icon', 'href' => Yii::getAlias('/web/favicon.ico')]);
?>
<?php $this->beginPage() ?>

<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" class="h-100">

<head>
	<title>
		<?= Html::encode($this->title) ?>
	</title>
	<?php $this->head() ?>
</head>

<body class="d-flex flex-column h-100">
	<?php $this->beginBody() ?>

	<header id="header"><!--header-->
		<div class="header-top"> <!--header_top-->
			<div class="container">
				<div class="row">
					<div class="col-sm-6">
						<div class="contact-info">
							<ul class="nav nav-pills">
								<li><a href="#"><i class="fa fa-phone"></i> +2 95 01 88 821</a></li>
								<li><a href="#"><i class="fa fa-envelope"></i> info@domain.com</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="social-icons pull-right">
							<ul class="nav navbar-nav">
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
								<li><a href="#"><i class="fa fa-dribbble"></i></a></li>
								<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header_top-->

		<div class="header-middle"><!--header-middle-->
			<div class="container">
				<div class="row">

					<div class="col-sm-4">
						<div class="logo pull-left">
							<a href="<?=\yii\helpers\Url::to(['/site/index']) ?>"><img style="width: 50%;"
									src="../web/images/logo.svg" alt="" /></a>
						</div>
						<div class="btn-group pull-right">

						</div>
					</div>
					<div class="col-sm-8">
						<div class="shop-menu pull-right">
							<ul class="nav navbar-nav">
								<li><a href="<?=\yii\helpers\Url::to(['/site/login']) ?>"><i class="fa fa-user"></i>
										Учетная запись</a></li>
								<li><a href="<?=\yii\helpers\Url::to(['/site/wishlist']) ?>"><i class="fa fa-star"></i>
										Список желаний</a></li>
								<li><a href="<?=\yii\helpers\Url::to(['/site/checkout']) ?>"><i
											class="fa fa-crosshairs"></i> Оформить покупку</a></li>
								<li><a href="<?=\yii\helpers\Url::to(['/site/cart']) ?>"><i class="fa fa-shopping-cart"></i> Корзина</a></li>
								<li><a href="<?=\yii\helpers\Url::to(['/site/login']) ?>"><i class="fa fa-lock"></i>
										Войти</a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-9">
						<div class="search-box pull-right">
							<input type="text" placeholder="Я ищу" />
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-middle-->

		<div class="header-bottom"><!--header-bottom-->
			<div class="container">
				<div class="row">


					<?php
										
					echo Nav::widget([
						'options' => ['class' => 'navbar-nav success'],
						'items' => [
							['label' => 'Главная', 'url' => ['/site/index']],
							['label' => 'Каталог ', 'url' => ['/site/catalog']],
							['label' => 'Распродажа', 'url' => ['/site/sale']],
							['label' => 'Доставка и оплата', 'url' => ['/site/delivery']],
							['label' => 'Новости', 'url' => ['/site/blog']],
							['label' => 'Контакты', 'url' => ['/site/contact']],

						]
					]);
					
					?>


				</div>
			</div>
		</div><!--/header-bottom-->

	</header><!--/header-->


	<main id="main" class="flex-shrink-0" role="main">
		<div class="container">
			<?php if (!empty($this->params['breadcrumbs'])): ?>
				<?= Breadcrumbs::widget(['links' => $this->params['breadcrumbs']]) ?>
			<?php endif ?>
			<?= Alert::widget() ?>
			<?= $content ?>
		</div>
	</main>

	


	<footer id="footer"><!--Footer-->
		<div class="footer-top">
			<div class="container">
				<div class="row">
					<div class="col-sm-2">
						<div class="companyinfo">
							<h2><span>EVA</span></h2>
							<p>Интернет магазин спортивной одежды</p>
						</div>
					</div>
					
					<div class="col-sm-7"></div>
					<div class="col-sm-3">
						<div class="address">
							<img src="../web/images/home/map.png" alt="" />
							<p>Россия г. Воронеж</p>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="footer-widget">
			<div class="container">
				<div class="row">
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>ОБСЛУЖИВАНИЕ</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="#">Помощь онлайн</a></li>
								<li><a href="#">Связаться с нами</a></li>
								<li><a href="#">Статус заказа</a></li>
								<li><a href="#">Сменить местоположение</a></li>
								<li><a href="#">ЧАСТО ЗАДАВАЕМЫЕ вопросы</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>МАГАЗИН</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="#">Футболки</a></li>
								<li><a href="#">Мурское</a></li>
								<li><a href="#">Женское</a></li>
								<li><a href="#">Подарочные карты</a></li>
								<li><a href="#">Перчатки</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>ПОЛИТИКИ</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="#">Условия использования</a></li>
								<li><a href="#">Политика конфиденциальности</a></li>
								<li><a href="#">Политика возврата</a></li>
								<li><a href="#">Система выставления счетов</a></li>
								<li><a href="#">Бонусная Система</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>Об Магазине</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="#">Информация </a></li>
								<li><a href="#">Курьеры</a></li>
								<li><a href="#">Ваканции</a></li>
								<li><a href="#">Партнерская программа</a></li>
								<li><a href="#">Авторское право</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-3 col-sm-offset-1">
						<div class="single-widget">
							<h2>Подписаться на нас</h2>
							<form action="#" class="searchform">
								<input type="text" placeholder="Введите вашу почту" />
								<button type="submit" class="btn btn-default"><i
										class="fa fa-arrow-circle-o-right"></i></button>
								<p> Получайте самые последние обновления с<br />
									нашего сайта и будьте в курсе событий сами...</p>
							</form>
						</div>
					</div>

				</div>
			</div>
		</div>

		<div class="footer-bottom">
			<div class="container">
				<div class="row">
					<p class="pull-left">&copy; My Company <?= date('Y') ?></p>
					<p class="pull-right"> <span><a target="_blank" href="#">EVA - Спортивный интернет
								магазин</a></span></p>
				</div>
			</div>
		</div>



	</footer><!--/Footer-->






	<?php $this->endBody() ?>
</body>

</html>
<?php $this->endPage() ?>