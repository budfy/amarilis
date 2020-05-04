<?php
	$title = 'Count calc';
	$meta__title = "Guidelines | " . $title;
	require($_SERVER['DOCUMENT_ROOT'].'/.cfg.php');
	require($cfg__path.'/header.php');
	require($cfg__path.'/core/header.php');
?> 

<div class="lui-header">
	<h1 class="lui-header__title"><?=$title?></h1>
	<?php code('<link rel="stylesheet" href="/template/core/molecules/counter-calc/__counter-calc.css">', 'markup'); ?>
</div>

<div class="lui-section">
	<div class="lui-section__info">
		<div class="lui-section__title h4"><b>Счетчик количества</b></div>
		<div class="lui-section__desc --p">Используется по необходимости</div>
	</div>
	<div class="lui-section__tabs border-tabs tabs">
		<div class="border-tabs__btns tabs__btns flex">
			<div class="border-tabs__btn tabs__btn --js is-active" data-tab="markup">Демо</div>
			<div class="border-tabs__btn tabs__btn --js" data-tab="html">HTML</div>
			<div class="border-tabs__btn tabs__btn --js" data-tab="css">CSS</div>
			<div class="border-tabs__btn tabs__btn --js" data-tab="scr">JS</div>
		</div>
		<div class="border-tabs__blocks tabs__blocks">
			<div class="tabs__block --js --markup is-show">
				<div class="flex">
					<?php include($_SERVER['DOCUMENT_ROOT'].$__PATH.'/molecules/counter-calc/__counter-calc--1.html') ?>
				</div>
			</div>
			<div class="tabs__block --js --html">
				<?php code(file_get_contents($_SERVER['DOCUMENT_ROOT'].$__PATH.'/molecules/counter-calc/__counter-calc--1.html'), 'markup'); ?> 
			</div>
			<div class="tabs__block --js --css">
				<?php code(file_get_contents($_SERVER['DOCUMENT_ROOT'].$__PATH.'/molecules/counter-calc/__counter-calc.css'), 'css'); ?> 
			</div>
			<div class="tabs__block --js --scr">
				<?php code(file_get_contents($_SERVER['DOCUMENT_ROOT'].$__PATH.'/molecules/counter-calc/__counter-calc.js'), 'js'); ?> 
			</div>
		</div>
	</div>
</div>


<?php require($cfg__path.'/core/footer.php'); ?>
<?php require($cfg__path.'/footer.php'); ?>