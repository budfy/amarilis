<?php
	$title = 'Инпуты';
	$meta__title = "Guidelines | " . $title;
	require($_SERVER['DOCUMENT_ROOT'].'/.cfg.php');
	require($cfg__path.'/header.php');
	require($cfg__path.'/core/header.php');
?> 

<div class="lui-header">
	<h1 class="lui-header__title"><?=$title?></h1>
	<?php code('<link rel="stylesheet" href="/template/core/atoms/inputs/__inputs.css">', 'markup'); ?>
	<?php code('<link rel="stylesheet" href="/template/core/atoms/inputs/__inputs.js">', 'markup'); ?>
</div>

<div class="lui-section">
	<div class="lui-section__info">
		<div class="lui-section__title h4"><b>Инпуты обычного вида</b></div>
	</div>
	<div class="lui-section__tabs border-tabs tabs">
		<div class="border-tabs__btns tabs__btns flex">
			<div class="border-tabs__btn tabs__btn --js is-active" data-tab="markup">HTML</div>
			<div class="border-tabs__btn tabs__btn --js" data-tab="css">CSS</div>
		</div>
		<div class="border-tabs__blocks tabs__blocks">
			<div class="tabs__block --js --markup is-show">
				<div class="--lui-inside-step">
					<?php include($_SERVER['DOCUMENT_ROOT'].$__PATH.'/atoms/inputs/__inputs--1.html') ?>
				</div>
				<br><br>
				<?php code(file_get_contents($_SERVER['DOCUMENT_ROOT'].$__PATH.'/atoms/inputs/__inputs--1.html'), 'markup'); ?>
			</div>
			<div class="tabs__block --js --css">
				<?php code(file_get_contents($_SERVER['DOCUMENT_ROOT'].$__PATH.'/atoms/inputs/__inputs.css'), 'css'); ?> 
			</div>
		</div>
	</div>
</div>


<div class="lui-section">
	<div class="lui-section__info">
		<div class="lui-section__title h4"><b>Большие инпуты</b></div>
	</div>
	<div class="lui-section__tabs border-tabs tabs">
		<div class="border-tabs__btns tabs__btns flex">
			<div class="border-tabs__btn tabs__btn --js is-active" data-tab="markup">HTML</div>
			<div class="border-tabs__btn tabs__btn --js" data-tab="css">CSS</div>
		</div>
		<div class="border-tabs__blocks tabs__blocks">
			<div class="tabs__block --js --markup is-show">
				<div class="col --6">
					<?php include($_SERVER['DOCUMENT_ROOT'].$__PATH.'/atoms/inputs/__inputs--4.html') ?>
				</div>
				<br>
				<?php code(file_get_contents($_SERVER['DOCUMENT_ROOT'].$__PATH.'/atoms/inputs/__inputs--4.html'), 'markup'); ?>
				<br><br>

				<div class="col --6">
					<?php include($_SERVER['DOCUMENT_ROOT'].$__PATH.'/atoms/inputs/__inputs--5.html') ?>
				</div>
				<br>
				<?php code(file_get_contents($_SERVER['DOCUMENT_ROOT'].$__PATH.'/atoms/inputs/__inputs--5.html'), 'markup'); ?>
			</div>
			<div class="tabs__block --js --css">
				<?php code(file_get_contents($_SERVER['DOCUMENT_ROOT'].$__PATH.'/atoms/inputs/__inputs.css'), 'css'); ?> 
			</div>
		</div>
	</div>
</div>





<div class="lui-section">
	<div class="lui-section__info">
		<div class="lui-section__title h4"><b>Инпуты с заголовком</b></div>
	</div>
	<div class="lui-section__tabs border-tabs tabs">
		<div class="border-tabs__btns tabs__btns flex">
			<div class="border-tabs__btn tabs__btn --js is-active" data-tab="markup">HTML</div>
			<div class="border-tabs__btn tabs__btn --js" data-tab="css">CSS</div>
		</div>
		<div class="border-tabs__blocks tabs__blocks">
			<div class="tabs__block --js --markup is-show">
				<div class="col --6">
					<?php include($_SERVER['DOCUMENT_ROOT'].$__PATH.'/atoms/inputs/__inputs--2.html') ?>
				</div>
				<br><br>
				<?php code(file_get_contents($_SERVER['DOCUMENT_ROOT'].$__PATH.'/atoms/inputs/__inputs--2.html'), 'markup'); ?>
			</div>
			<div class="tabs__block --js --css">
				<?php code(file_get_contents($_SERVER['DOCUMENT_ROOT'].$__PATH.'/atoms/inputs/__inputs.css'), 'css'); ?> 
			</div>
		</div>
	</div>
</div>

<div class="lui-section">
	<div class="lui-section__info">
		<div class="lui-section__title h4"><b>Инпуты с ошибкой ввода</b></div>
	</div>
	<div class="lui-section__tabs border-tabs tabs">
		<div class="border-tabs__btns tabs__btns flex">
			<div class="border-tabs__btn tabs__btn --js is-active" data-tab="markup">HTML</div>
			<div class="border-tabs__btn tabs__btn --js" data-tab="css">CSS</div>
		</div>
		<div class="border-tabs__blocks tabs__blocks">
			<div class="tabs__block --js --markup is-show">
				<div class="col --6">
					<?php include($_SERVER['DOCUMENT_ROOT'].$__PATH.'/atoms/inputs/__inputs--3.html') ?>
				</div>
				<br><br>
				<?php code(file_get_contents($_SERVER['DOCUMENT_ROOT'].$__PATH.'/atoms/inputs/__inputs--3.html'), 'markup'); ?>
			</div>
			<div class="tabs__block --js --css">
				<?php code(file_get_contents($_SERVER['DOCUMENT_ROOT'].$__PATH.'/atoms/inputs/__inputs.css'), 'css'); ?> 
			</div>
		</div>
	</div>
</div>


<?php require($cfg__path.'/core/footer.php'); ?>
<?php require($cfg__path.'/footer.php'); ?>