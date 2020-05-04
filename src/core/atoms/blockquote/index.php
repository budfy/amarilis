<?php
	$title = 'Цитаты';
	$meta__title = "Guidelines | " . $title;
	require($_SERVER['DOCUMENT_ROOT'].'/.cfg.php');
	require($cfg__path.'/header.php');
	require($cfg__path.'/core/header.php');
?> 

<div class="lui-header">
	<h1 class="lui-header__title"><?=$title?></h1>
	<?php code('<link rel="stylesheet" href="/template/core/atoms/blockquote/__blockquote.css">', 'markup'); ?>
</div>

<div class="lui-section">
	<div class="lui-section__info">
		<div class="lui-section__title h4"><b>Анотация</b></div>
		<div class="lui-section__desc --p"><b>Необходим родитель с классом "type-editor"</b></div>
		<div class="lui-section__desc --p">Используются при необходимости сноски / выделения абазца</div>
	</div>
	<div class="lui-section__tabs border-tabs tabs">
		<div class="border-tabs__btns tabs__btns flex">
			<div class="border-tabs__btn tabs__btn --js is-active" data-tab="markup">HTML</div>
			<div class="border-tabs__btn tabs__btn --js" data-tab="css">CSS</div>
		</div>
		<div class="border-tabs__blocks tabs__blocks">
			<div class="tabs__block --js --markup is-show">
				<div class="lui-list type-editor">
					<?php include($_SERVER['DOCUMENT_ROOT'].$__PATH.'/atoms/blockquote/__blockquote--1.html') ?>
				</div>
				<?php code(file_get_contents($_SERVER['DOCUMENT_ROOT'].$__PATH.'/atoms/blockquote/__blockquote--1.html'), 'markup'); ?>
			</div>
			<div class="tabs__block --js --css">
				<?php code(file_get_contents($_SERVER['DOCUMENT_ROOT'].$__PATH.'/atoms/blockquote/__blockquote.css'), 'css'); ?> 
			</div>
		</div>
	</div>
</div>
<div class="lui-section">
	<div class="lui-section__info">
		<div class="lui-section__title h4"><b>Цитата</b></div>
		<div class="lui-section__desc --p"><b>Необходим родитель с классом "type-editor"</b></div>
		<div class="lui-section__desc --p">Использовать при необходимости процитировать</div>
	</div>
	<div class="lui-section__tabs border-tabs tabs">
		<div class="border-tabs__btns tabs__btns flex">
			<div class="border-tabs__btn tabs__btn --js is-active" data-tab="markup">HTML</div>
			<div class="border-tabs__btn tabs__btn --js" data-tab="css">CSS</div>
		</div>
		<div class="border-tabs__blocks tabs__blocks">
			<div class="tabs__block --js --markup is-show">
				<div class="lui-list type-editor">
					<?php include($_SERVER['DOCUMENT_ROOT'].$__PATH.'/atoms/blockquote/__blockquote--2.html') ?>
				</div>
				<?php code(file_get_contents($_SERVER['DOCUMENT_ROOT'].$__PATH.'/atoms/blockquote/__blockquote--2.html'), 'markup'); ?>
			</div>
			<div class="tabs__block --js --css">
				<?php code(file_get_contents($_SERVER['DOCUMENT_ROOT'].$__PATH.'/atoms/blockquote/__blockquote.css'), 'css'); ?> 
			</div>
		</div>
	</div>
</div>

<?php require($cfg__path.'/core/footer.php'); ?>
<?php require($cfg__path.'/footer.php'); ?>