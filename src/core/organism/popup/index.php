<?php
	$title = 'Попапы';
	$meta__title = "Guidelines | " . $title;
	require($_SERVER['DOCUMENT_ROOT'].'/.cfg.php');
	require($cfg__path.'/header.php');
	require($cfg__path.'/core/header.php');
?> 
 



<div class="lui-header">
	<h1 class="lui-header__title"><?=$title?></h1>
	<?php code('<link rel="stylesheet" href="/template/core/organism/popup/__popup.css">', 'markup'); ?>
	<?php code('<link rel="stylesheet" href="/template/core/organism/popup/__popup.js">', 'markup'); ?>
</div>

<div class="lui-section">
	<div class="lui-section__info">
		<div class="lui-section__title h4"><b>Обычный попап</b></div>
		<div class="lui-section__desc --p">Базовый компонент popup'а.</div>
	</div>
	<div class="lui-section__tabs border-tabs tabs">
		<div class="border-tabs__btns tabs__btns flex">
			<div class="border-tabs__btn tabs__btn --js is-active" data-tab="markup">Демо</div>
			<div class="border-tabs__btn tabs__btn --js" data-tab="html">HTML</div>
			<div class="border-tabs__btn tabs__btn --js" data-tab="desc">Параметры</div>
			<div class="border-tabs__btn tabs__btn --js" data-tab="css">CSS</div>
			<div class="border-tabs__btn tabs__btn --js" data-tab="java">JS</div>
		</div>
		<div class="border-tabs__blocks tabs__blocks">
			<div class="tabs__block --js --markup is-show">
				<?php include($_SERVER['DOCUMENT_ROOT'].$__PATH.'/organism/popup/__popup--1.html') ?>
			</div>
			<div class="tabs__block --js --desc">
				<p>Параметры прописываются ссылке / кнопке</p>
				<div class="lui-colors">
					<div class="lui-colors__head flex --align-center">
						<div class="lui-colors__col col --5 p --m">Параметр</div>
						<div class="lui-colors__col col --5 p --m">Описание</div>
					</div>
					<div class="lui-colors__row flex --align-center">
						<div class="lui-colors__col col --5 flex --align-center --p">data-popup="#__АЙДИ-ПОПАПА"</div>
						<div class="lui-colors__col col --5 flex --align-center --p">Открывает попап с заданным айди</div>
					</div>
				</div>
			</div>
			<div class="tabs__block --js --html">
				<?php code(file_get_contents($_SERVER['DOCUMENT_ROOT'].$__PATH.'/organism/popup/__popup--1.html'), 'markup'); ?> 
			</div>
			<div class="tabs__block --js --css">
				<?php code(file_get_contents($_SERVER['DOCUMENT_ROOT'].$__PATH.'/organism/popup/__popup.css'), 'css'); ?> 
			</div>
			<div class="tabs__block --js --java">
				<?php code(file_get_contents($_SERVER['DOCUMENT_ROOT'].$__PATH.'/organism/popup/__popup.js'), 'js'); ?> 
			</div>
		</div>
	</div>
</div>
 
<div class="lui-section">
	<div class="lui-section__info">
		<div class="lui-section__title h4"><b>Попап с подменой параметров</b></div>
		<div class="lui-section__desc --p">Подменяет заголовок и значение</div>
	</div>
	<div class="lui-section__tabs border-tabs tabs">
		<div class="border-tabs__btns tabs__btns flex">
			<div class="border-tabs__btn tabs__btn --js is-active" data-tab="markup">Демо</div>
			<div class="border-tabs__btn tabs__btn --js" data-tab="html">HTML</div>
			<div class="border-tabs__btn tabs__btn --js" data-tab="desc">Параметры</div>
			<div class="border-tabs__btn tabs__btn --js" data-tab="css">CSS</div>
			<div class="border-tabs__btn tabs__btn --js" data-tab="java">JS</div>
		</div>
		<div class="border-tabs__blocks tabs__blocks">
			<div class="tabs__block --js --markup is-show">
				<?php include($_SERVER['DOCUMENT_ROOT'].$__PATH.'/organism/popup/__popup--2.html') ?>
			</div>
			<div class="tabs__block --js --desc">
				<p>Параметры прописываются ссылке / кнопке</p>
				<div class="lui-colors">
					<div class="lui-colors__head flex --align-center">
						<div class="lui-colors__col col --5 p --m">Параметр</div>
						<div class="lui-colors__col col --5 p --m">Описание</div>
					</div>
					<div class="lui-colors__row flex --align-center">
						<div class="lui-colors__col col --5 flex --align-center --p">data-popup-title=""</div>
						<div class="lui-colors__col col --5 flex --align-center --p">Задает заголовок попапу</div>
					</div>
					<div class="lui-colors__row flex --align-center">
						<div class="lui-colors__col col --5 flex --align-center --p">data-popup-value=""</div>
						<div class="lui-colors__col col --5 flex --align-center --p">Задает значение попапу</div>
					</div>
				</div>
			</div>
			<div class="tabs__block --js --html">
				<?php code(file_get_contents($_SERVER['DOCUMENT_ROOT'].$__PATH.'/organism/popup/__popup--2.html'), 'markup'); ?> 
			</div>
			<div class="tabs__block --js --css">
				<?php code(file_get_contents($_SERVER['DOCUMENT_ROOT'].$__PATH.'/organism/popup/__popup.css'), 'css'); ?> 
			</div>
			<div class="tabs__block --js --java">
				<?php code(file_get_contents($_SERVER['DOCUMENT_ROOT'].$__PATH.'/organism/popup/__popup.js'), 'js'); ?> 
			</div>
		</div>
	</div>
</div>


<?php require($cfg__path.'/core/footer.php'); ?>
<?php require($cfg__path.'/footer.php'); ?>