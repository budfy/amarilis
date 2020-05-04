<?php
	$title = 'Отступы';
	$meta__title = "Guidelines | " . $title;
	require($_SERVER['DOCUMENT_ROOT'].'/.cfg.php');
	require($cfg__path.'/header.php');
	require($cfg__path.'/core/header.php');
?> 

<div class="lui-header">
	<h1 class="lui-header__title"><?=$title?></h1>
	<?php code('<link rel="stylesheet" href="/template/core/atoms/indentation/__indentation.css">', 'markup'); ?>
</div>



<div class="lui-section">
	<div class="lui-section__info">
		<div class="lui-section__title h4"><b>Базовые отсутпы</b></div>
		<div class="lui-section__desc --p">Для регулировки отступов в блоках вы можете использовать следующие классы:</div>
	</div>
	<div class="lui-section__tabs border-tabs tabs">
		<div class="border-tabs__btns tabs__btns flex">
			<div class="border-tabs__btn tabs__btn --js is-active" data-tab="mr">Таблица</div>
			<div class="border-tabs__btn tabs__btn --js" data-tab="html">HTML</div>
			<div class="border-tabs__btn tabs__btn --js" data-tab="css">CSS</div>
		</div>
		<div class="border-tabs__blocks tabs__blocks">
			<div class="tabs__block --js --mr is-show">
				<?php include($_SERVER['DOCUMENT_ROOT'].$__PATH.'/atoms/indentation/__indentation--3.html') ?>
			</div>
			<div class="tabs__block --js --html">
				<?php code('<div class="mrg --top --min"></div>', 'markup'); ?>
			</div>
			<div class="tabs__block --js --css">
				<?php code(file_get_contents($_SERVER['DOCUMENT_ROOT'].$__PATH.'/atoms/indentation/__indentation.css'), 'css'); ?> 
			</div>
		</div>
	</div>
</div>

<div class="lui-section">
	<div class="lui-section__info">
		<div class="lui-section__title h4"><b>Внешние отсупы</b></div>
		<div class="lui-section__desc --p">Для регулировки отступов в блоках вы можете использовать следующие классы:</div>
	</div>
	<div class="lui-section__tabs border-tabs tabs">
		<div class="border-tabs__btns tabs__btns flex">
			<div class="border-tabs__btn tabs__btn --js is-active" data-tab="mr">Таблица</div>
			<div class="border-tabs__btn tabs__btn --js" data-tab="html">HTML</div>
			<div class="border-tabs__btn tabs__btn --js" data-tab="css">CSS</div>
		</div>
		<div class="border-tabs__blocks tabs__blocks">
			<div class="tabs__block --js --mr is-show">
				<?php include($_SERVER['DOCUMENT_ROOT'].$__PATH.'/atoms/indentation/__indentation--1.html') ?>
			</div>
			<div class="tabs__block --js --html">
				<?php code('<p class="px-24 py-48">Текст</p>', 'markup'); ?>
			</div>
			<div class="tabs__block --js --css">
				<?php code(file_get_contents($_SERVER['DOCUMENT_ROOT'].$__PATH.'/atoms/indentation/__indentation.css'), 'css'); ?> 
			</div>
		</div>
	</div>
</div>

<div class="lui-section">
	<div class="lui-section__info">
		<div class="lui-section__title h4"><b>Внутренние отсупы</b></div>
		<div class="lui-section__desc --p">Для регулировки отступов в блоках вы можете использовать следующие классы:</div>
	</div>
	<div class="lui-section__tabs border-tabs tabs">
		<div class="border-tabs__btns tabs__btns flex">
			<div class="border-tabs__btn tabs__btn --js is-active" data-tab="mr">Таблица</div>
			<div class="border-tabs__btn tabs__btn --js" data-tab="html">HTML</div>
			<div class="border-tabs__btn tabs__btn --js" data-tab="css">CSS</div>
		</div>
		<div class="border-tabs__blocks tabs__blocks">
			<div class="tabs__block --js --mr is-show">
				<?php include($_SERVER['DOCUMENT_ROOT'].$__PATH.'/atoms/indentation/__indentation--2.html') ?>
			</div>
			<div class="tabs__block --js --html">
				<?php code('<p class="px-24 py-48">Текст</p>', 'markup'); ?>
			</div>
			<div class="tabs__block --js --css">
				<?php code(file_get_contents($_SERVER['DOCUMENT_ROOT'].$__PATH.'/atoms/indentation/__indentation.css'), 'css'); ?> 
			</div>
		</div>
	</div>
</div>


<?php require($cfg__path.'/core/footer.php'); ?>
<?php require($cfg__path.'/footer.php'); ?>