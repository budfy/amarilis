<?php
	$title = 'Gulp';
	$meta__title = "Guidelines | " . $title;
	require($_SERVER['DOCUMENT_ROOT'].'/.cfg.php');
	require($cfg__path.'/header.php');
	require($cfg__path.'/core/header.php');
?> 

<div class="lui-header">
	<h1 class="lui-header__title"><?=$title?></h1>
</div>

<div class="lui-section">
	<div class="lui-section__info">
		<div class="lui-section__title h4"><b>Gulpfile.js</b></div>
		<div class="lui-section__desc --p"><b>Версия 4+</b></div>
	</div>
	<div class="lui-section__tabs border-tabs tabs">
		<div class="flex mx-24">
			<a href="node_modules.zip" download="node_modules.zip" class="btn --border-2"><span>Скачать node_modules.zip (1 mb)</span></a>
		</div>
		<?php code(file_get_contents($_SERVER['DOCUMENT_ROOT'].$__PATH.'/atoms/__global/gulp/gulpfile.html'), 'js'); ?> 
	</div>
</div>

<?php require($cfg__path.'/core/footer.php'); ?>
<?php require($cfg__path.'/footer.php'); ?>