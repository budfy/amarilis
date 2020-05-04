<?php
	$title = 'Шрифты';
	$meta__title = "Guidelines | " . $title;
	require($_SERVER['DOCUMENT_ROOT'].'/.cfg.php');
	require($cfg__path.'/header.php');
	require($cfg__path.'/core/header.php');
?> 

<div class="lui-header">
	<h1 class="lui-header__title"><?=$title?></h1>
	<?php code('<link rel="stylesheet" href="/template/core/atoms/fonts/__fonts.css">', 'markup'); ?>
</div>

<div class="lui-section">
	<div class="lui-section__info">
		<div class="lui-section__title h4"><b>Основоной шрифт</b></div>
		<div class="lui-section__desc --p">Семейство шрифтов - "<b>Montserrat</b>"</div>
	</div>
	<div class="lui-section__tabs border-tabs tabs">
		<div class="border-tabs__btns tabs__btns flex">
			<div class="border-tabs__btn tabs__btn --js is-active" data-tab="markup">HTML</div>
			<div class="border-tabs__btn tabs__btn --js" data-tab="css">CSS</div>
		</div>
		<div class="border-tabs__blocks tabs__blocks">
			<div class="tabs__block --js --markup is-show">
				<p class="h2" style="font-weight: 500;">Montserrat - 500</p>
				<p class="h2" style="font-weight: 600;">Montserrat - 600</p>
				<p class="h2" style="font-weight: 650;">Montserrat - 650</p>
				<p class="h2" style="font-weight: 700;">Montserrat - 700</p>
				<p class="h2" style="font-weight: 800;">Montserrat - 800</p>
				<p class="h2" style="font-weight: 900;">Montserrat - 900</p>
			</div>
			<div class="tabs__block --js --css">
				<?php code(file_get_contents($_SERVER['DOCUMENT_ROOT'].$__PATH.'/atoms/fonts/__fonts.css'), 'css'); ?> 
			</div>
		</div>
	</div>
</div>

<?php require($cfg__path.'/core/footer.php'); ?>
<?php require($cfg__path.'/footer.php'); ?>