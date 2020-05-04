<?php
	$title = 'Заголовки';
	$meta__title = "Guidelines | " . $title;
	require($_SERVER['DOCUMENT_ROOT'].'/.cfg.php');
	require($cfg__path.'/header.php');
	require($cfg__path.'/core/header.php');
?> 

<div class="lui-header">
	<h1 class="lui-header__title"><?=$title?></h1>
	<?php code('<link rel="stylesheet" href="/template/core/atoms/heading/__heading.css">', 'markup'); ?>
</div>

<div class="lui-section">
	<div class="lui-section__info">
		<div class="lui-section__title h4"><b>Основные заголовки</b></div>
		<div class="lui-section__desc --p">Базовые отступы и максимальная ширина будет работать только в если родитель имеет класс "<b>type-editor</b>".</div>
	</div>
	<div class="lui-section__tabs border-tabs tabs">
		<div class="border-tabs__btns tabs__btns flex">
			<div class="border-tabs__btn tabs__btn --js is-active" data-tab="markup">HTML</div>
			<div class="border-tabs__btn tabs__btn --js" data-tab="css">CSS</div>
		</div>
		<div class="border-tabs__blocks tabs__blocks">
			<div class="tabs__block --js --markup is-show">
				<div class="lui-heading">
					<?php include($_SERVER['DOCUMENT_ROOT'].$__PATH.'/atoms/heading/__heading--1.html') ?>
				</div>
				<?php code(file_get_contents($_SERVER['DOCUMENT_ROOT'].$__PATH.'/atoms/heading/__heading--1.html'), 'markup'); ?>
			</div>
			<div class="tabs__block --js --css">
				<?php code(file_get_contents($_SERVER['DOCUMENT_ROOT'].$__PATH.'/atoms/heading/__heading.css'), 'css'); ?> 
			</div>
		</div>
	</div>
</div>
<div class="lui-section">
	<div class="lui-section__info">
		<div class="lui-section__title h4"><b>Псевдо заголовки</b></div>
		<div class="lui-section__desc --p">Используются там где теги заголовков недопустимы</div>
	</div>
	<div class="lui-section__tabs border-tabs tabs">
		<div class="border-tabs__btns tabs__btns flex">
			<div class="border-tabs__btn tabs__btn --js is-active" data-tab="markup">HTML</div>
			<div class="border-tabs__btn tabs__btn --js" data-tab="css">CSS</div>
		</div>
		<div class="border-tabs__blocks tabs__blocks">
			<div class="tabs__block --js --markup is-show">
				<div class="lui-heading">
					<?php include($_SERVER['DOCUMENT_ROOT'].$__PATH.'/atoms/heading/__heading--2.html') ?>
				</div>
				<?php code(file_get_contents($_SERVER['DOCUMENT_ROOT'].$__PATH.'/atoms/heading/__heading--2.html'), 'markup'); ?>
			</div>
			<div class="tabs__block --js --css">
				<?php code(file_get_contents($_SERVER['DOCUMENT_ROOT'].$__PATH.'/atoms/heading/__heading.css'), 'css'); ?> 
			</div>
		</div>
	</div>
</div>

<div class="lui-section">
	<div class="lui-section__info">
		<div class="lui-section__title h4"><b>Линии у заголовков</b></div>
		<div class="lui-section__desc --p">Используются по необходимости</div>
	</div>
	<div class="lui-section__tabs border-tabs tabs">
		<div class="border-tabs__btns tabs__btns flex">
			<div class="border-tabs__btn tabs__btn --js is-active" data-tab="markup">HTML</div>
			<div class="border-tabs__btn tabs__btn --js" data-tab="css">CSS</div>
		</div>
		<div class="border-tabs__blocks tabs__blocks">
			<div class="tabs__block --js --markup is-show">
				<div class="mt-80 col --8">
					<div class="lui-heading">
						<?php include($_SERVER['DOCUMENT_ROOT'].$__PATH.'/atoms/heading/__heading--4.html') ?>
					</div>
					<?php code(file_get_contents($_SERVER['DOCUMENT_ROOT'].$__PATH.'/atoms/heading/__heading--4.html'), 'markup'); ?>
				</div>
				<div class="mt-80 col --8">
					<div class="lui-heading">
						<?php include($_SERVER['DOCUMENT_ROOT'].$__PATH.'/atoms/heading/__heading--5.html') ?>
					</div>
					<?php code(file_get_contents($_SERVER['DOCUMENT_ROOT'].$__PATH.'/atoms/heading/__heading--5.html'), 'markup'); ?>
				</div>
			</div>
			<div class="tabs__block --js --css">
				<?php code(file_get_contents($_SERVER['DOCUMENT_ROOT'].$__PATH.'/atoms/heading/__heading.css'), 'css'); ?> 
			</div>
		</div>
	</div>
</div>
 
<?php require($cfg__path.'/core/footer.php'); ?>
<?php require($cfg__path.'/footer.php'); ?>