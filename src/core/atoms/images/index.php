<?php
	$title = 'Изображения';
	$meta__title = "Guidelines | " . $title;
	require($_SERVER['DOCUMENT_ROOT'].'/.cfg.php');
	require($cfg__path.'/header.php');
	require($cfg__path.'/core/header.php');
?> 

<div class="lui-header">
	<h1 class="lui-header__title"><?=$title?></h1>
	<?php code('<link rel="stylesheet" href="/template/core/atoms/images/__images.css">', 'markup'); ?>
	<div class="lui-list type-editor">
		<blockquote class="--max-width --warning --min mt-24">
			<div class="--p">Изображения должны располагаться в директориях <b>../img/ и ..dist/img/ </b></div>
			<div class="--p">Подключаться изображения должны через папку <b>..dist/img/ </b></div>
		</blockquote>
	</div>
</div>

<div class="lui-section">
	<div class="lui-section__info">
		<div class="lui-section__title h4"><b>Растровые изображения</b></div>
		<div class="lui-section__desc --p">
			Изображения с форматом: <b>.jpg</b> / <b>.png</b> / <b>.gif</b> подключаются только с отложенной загрузкой <b>class="lazy"</b>. <br>
			Тег <b>img</b> должен содержать атрибут <b>alt=""</b>
		</div>
	</div>
	<div class="lui-section__tabs border-tabs tabs">
		<div class="border-tabs__btns tabs__btns flex">
			<div class="border-tabs__btn tabs__btn --js is-active" data-tab="markup">HTML</div>
			<div class="border-tabs__btn tabs__btn --js" data-tab="mods">Модификаторы</div>
			<div class="border-tabs__btn tabs__btn --js" data-tab="css">CSS</div>
		</div>
		<div class="border-tabs__blocks tabs__blocks">
			<div class="tabs__block --js --markup is-show">
				<div class="mb-48">
					<img data-src="pic.jpg" alt="Альтр" class="lazy mb-16" style="width:4rem;">
					<?php code('<img data-src="pic.jpg" alt="Альтр" class="lazy">', 'markup'); ?>
				</div>
				<div class="mx-48">
					<p>Использование отложенной закрутки через атрибут «<b>background-image</b>»</p>
					<div style="width: 4rem; height: 4rem; background-size: 100%;" data-src="pic.jpg" class="lazy mb-16"></div>
					<?php code('<div data-src="pic.jpg" class="lazy"></div>', 'markup'); ?>
				</div>
				<div class="mx-48">
					<style>
						.demo-img__img {
							width: 4rem;
						}
					</style>
					<p>Для лучшей адаптивности рекомендуется добавлять изображению класс <br>и указывать ширину / высоту в <b>rem</b> а не <b><s>px</s></b>.</p>
					<img data-src="pic.jpg" alt="Альтр" class="demo-img__img lazy">
					<?php code('<img data-src="pic.jpg" alt="Альтр" class="demo-img__img lazy">', 'markup'); ?>
					<?php code('
						.demo-img__img {
							width: 4rem;
						}', 'css'); ?>
				</div>
				<div class="mx-48">
					<style>
						.demo-img__tumb-pic {
							max-width: 4rem;
							max-height: 4rem;
						}
						.demo-img__img.--2 {
							width: 100%;
						}
					</style>
					<p>Во избежании дергания вертки при загрузке страницы рекомендуется создавать <br>«<b>обертку</b>» изображению и задавать минимальный размер. </p>
					<div class="demo-img__tumb-pic">
						<img data-src="pic.jpg" alt="Альтр" class="demo-img__img --2 lazy">
					</div>
					<?php code('
						<div class="demo-img__tumb-pic">
							<img data-src="pic.jpg" alt="Альтр" class="demo-img__img --2 lazy">
						</div>', 'markup'); ?>
					<?php code('
						.demo-img__tumb-pic {
							max-width: 4rem;
							max-height: 4rem;
						}
						.demo-img__img.--2 {
							width: 100%;
						}', 'css'); ?>
				</div>
			</div>
			<div class="tabs__block --js --mods">
				<div class="lui-colors">
					<div class="lui-colors__head flex --align-center">
						<div class="lui-colors__col col --4 p --m">Модификатор</div>
						<div class="lui-colors__col col --6 p --m">Описание</div>
					</div>
					<div class="lui-colors__row flex --align-center">
						<div class="lui-colors__col col --4 flex --align-center --p"><b>.img.--full-width</b></div>
						<div class="lui-colors__col col --6 flex --align-center --p">Ширина изображения равана 100%</div>
					</div>
					<div class="lui-colors__row flex --align-center">
						<div class="lui-colors__col col --4 flex --align-center --p"><b>.img.--round</b></div>
						<div class="lui-colors__col col --6 flex --align-center --p">Скругление углов</div>
					</div>
					<div class="lui-colors__row flex --align-center">
						<div class="lui-colors__col col --4 flex --align-center --p"><b>.img.--round.--min</b></div>
						<div class="lui-colors__col col --6 flex --align-center --p">Скругление углов 0.5rem</div>
					</div>
				</div>
			</div>
			<div class="tabs__block --js --css">
				<?php code('', 'markup'); ?>
			</div>
		</div>
	</div>
</div>



<div class="lui-section">
	<div class="lui-section__info">
		<div class="lui-section__title h4"><b>Векторные изображения</b></div>
		<div class="lui-section__desc --p">Изображения с форматом: <b>.svg</b></div>
		<div class="lui-section__desc --p">Для оптимизации страницы векторные  изображения  рекомендовано подключить через тег svg или внутри css. </div>
	</div>
	<div class="lui-section__tabs border-tabs tabs">
		<div class="border-tabs__btns tabs__btns flex">
			<div class="border-tabs__btn tabs__btn --js is-active" data-tab="markup">HTML</div>
			<div class="border-tabs__btn tabs__btn --js" data-tab="mods">Модификаторы</div>
		</div>
		<div class="border-tabs__blocks tabs__blocks">
			<div class="tabs__block --js --markup is-show">
				<div class="mb-48">
					<p>Изображение подключаемое через тег <b>svg</b></p>
					<svg viewBox="0 0 148 148" fill="none" xmlns="http://www.w3.org/2000/svg" class="demo-img__svg">
						<circle cx="74" cy="74" r="38" fill="#333333"/>
						<circle cx="74" cy="74" r="68" stroke="#E9E9E9" stroke-width="12"/>
						<circle cx="126" cy="32" r="18" fill="#333333"/>
					</svg>
					<style>
						svg.demo-img__svg {
							width: 100%;
							max-width: 4rem;
						}
					</style>
					<?php code('
						<svg viewBox="0 0 148 148" fill="none" xmlns="http://www.w3.org/2000/svg" class="demo-img__svg">
							<circle cx="74" cy="74" r="38" fill="#333333"/>
							<circle cx="74" cy="74" r="68" stroke="#E9E9E9" stroke-width="12"/>
							<circle cx="126" cy="32" r="18" fill="#333333"/>
						</svg>
						', 'html'); ?>
					<?php code('
						.demo-img__svg {
							width: 100%;
							max-width: 4rem;
						}', 'css'); ?>
				</div>
				<div class="mx-48">
					<p>Изображение подключаемое через <b>css</b> класс</p>
					<p><a href="https://websemantics.uk/tools/svg-to-background-image-conversion/" target="_blank" rel="nofollow" class="link --color-1"><b>Конверстация SVG в CSS</b></a></p>
					<div class="demo-img__css-svg"></div>
					<style>
						.demo-img__css-svg {
							width: 4rem;
							height: 4rem;
							background-size: 100% auto;
							background-position: center;
							background-image: url("data:image/svg+xml;charset=utf8,%3Csvg width='148' height='148' viewBox='0 0 148 148' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Ccircle cx='74' cy='74' r='38' fill='%23333333'/%3E%3Ccircle cx='74' cy='74' r='68' stroke='%23E9E9E9' stroke-width='12'/%3E%3Ccircle cx='126' cy='32' r='18' fill='%23333333'/%3E%3C/svg%3E");
						}
					</style>
					<?php code('<div class="demo-img__css-svg"></div>', 'html'); ?>
					<?php code('
						.demo-img__css-svg {
							width: 4rem;
							height: 4rem;
							background-size: 100% auto;
							background-position: center;
							background-image: url("data:image/svg+xml;charset=utf8,%3Csvg ...");
						}', 'css'); ?>
				</div>


			</div>
			<div class="tabs__block --js --mods">
				<div class="lui-colors">
					<div class="lui-colors__head flex --align-center">
						<div class="lui-colors__col col --4 p --m">Модификатор</div>
						<div class="lui-colors__col col --6 p --m">Описание</div>
					</div>
					<div class="lui-colors__row flex --align-center">
						<div class="lui-colors__col col --4 flex --align-center --p"><b>.img.--full-width</b></div>
						<div class="lui-colors__col col --6 flex --align-center --p">Ширина изображения равана 100%</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<?php require($cfg__path.'/core/footer.php'); ?>
<?php require($cfg__path.'/footer.php'); ?>