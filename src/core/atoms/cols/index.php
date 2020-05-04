<?php
	$title = 'Сетка';
	$meta__title = "Guidelines | " . $title;
	require($_SERVER['DOCUMENT_ROOT'].'/.cfg.php');
	require($cfg__path.'/header.php');
	require($cfg__path.'/core/header.php');
?> 

<div class="lui-header">
	<h1 class="lui-header__title"><?=$title?></h1>
	<?php code('<link rel="stylesheet" href="/template/core/atoms/cols/__cols.css">', 'markup'); ?>
</div>

<div class="lui-section">
	<div class="lui-section__info">
		<div class="lui-section__title h4"><b>Сетка: 64 / 32</b></div>
		<div class="lui-section__desc --p">Присваивается к любому html тегу. Пример <b>class="col --2"</b></div>
	</div>
	<div class="lui-section__tabs border-tabs tabs">
		<div class="border-tabs__btns tabs__btns flex">
			<div class="border-tabs__btn tabs__btn --js is-active" data-tab="markup">Сетка</div>
			<div class="border-tabs__btn tabs__btn --js" data-tab="table">Таблица классов</div>
			<div class="border-tabs__btn tabs__btn --js" data-tab="html">HTML</div>
			<div class="border-tabs__btn tabs__btn --js" data-tab="css">CSS</div>
		</div>
		<div class="border-tabs__blocks tabs__blocks">
			<div class="tabs__block --js --markup is-show">
				<style>
				.demo-colls .col .full {
				    display: flex;
				    align-items: center;
				    justify-content: center;
				    pointer-events: none;
				}
				.demo-colls .col {
				    background-color: white !important;
				    min-height: 3rem;
				    display: flex;
				    align-items: center;
				    justify-content: center;
				}
				</style>
				<section class=" demo-colls" style="background-color: #f3f3f3">	
					<div class="center-wrap">
						<br><br>				
				 		<?php include($_SERVER['DOCUMENT_ROOT'].$__PATH.'/atoms/cols/__cols--1.html') ?>
						<br><br>
					</div>
				</section>
			</div>
			<div class="tabs__block --js --table">
				 <?php include($_SERVER['DOCUMENT_ROOT'].$__PATH.'/atoms/cols/__cols--2.html') ?>
			</div>
			<div class="tabs__block --js --html">
				<?php code(file_get_contents($_SERVER['DOCUMENT_ROOT'].$__PATH.'/atoms/cols/__cols--1.html'), 'markup'); ?>
			</div>
			<div class="tabs__block --js --css">
				<?php code(file_get_contents($_SERVER['DOCUMENT_ROOT'].$__PATH.'/atoms/cols/__cols.css'), 'css'); ?> 
			</div>
		</div>
	</div>
</div>
 

<?php require($cfg__path.'/core/footer.php'); ?>
<?php require($cfg__path.'/footer.php'); ?>