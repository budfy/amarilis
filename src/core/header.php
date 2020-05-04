<?php 
	$__PATH = '/template/core';
	// Функция для вывода кода
	function code($i,$s){
		echo '<pre><code class="language-'.$s.'">';
		echo (htmlspecialchars($i, ENT_COMPAT,'windows-1251'));
		echo '</code></pre>';
	};
 	
	// Меню
 	$file = $_SERVER['SCRIPT_NAME'];

	$menu__base = [
		[ 'link'=>''.$__PATH.'/index.php', 							'name'=>'Метод'],
		[ 'link'=>''.$__PATH.'/atoms/__global/gulp/index.php',		'name'=>'Gulp'],
	];

 	$menu__atoms = [
		[ 'link'=>''.$__PATH.'/atoms/__global/index.php', 			'name'=>'Global'],
		[ 'link'=>''.$__PATH.'/atoms/flex/index.php', 				'name'=>'Flexbox'],
		[ 'link'=>''.$__PATH.'/atoms/cols/index.php', 				'name'=>'Grid'],
		[ 'link'=>''.$__PATH.'/atoms/indentation/index.php', 		'name'=>'Steps'],
		[ 'link'=>''.$__PATH.'/atoms/colors/index.php', 			'name'=>'Colors'],
		[ 'link'=>''.$__PATH.'/atoms/fonts/index.php', 				'name'=>'Fonts'],
		[ 'link'=>''.$__PATH.'/atoms/images/index.php', 			'name'=>'Images'],
		[ 'link'=>''.$__PATH.'/atoms/heading/index.php', 			'name'=>'Heading'],
		[ 'link'=>''.$__PATH.'/atoms/paragraph/index.php', 			'name'=>'Paragraph'],
		[ 'link'=>''.$__PATH.'/atoms/list/index.php', 				'name'=>'List'],
		[ 'link'=>''.$__PATH.'/atoms/table/index.php', 				'name'=>'Table'],
		[ 'link'=>''.$__PATH.'/atoms/blockquote/index.php', 		'name'=>'Blockquote'],
		[ 'link'=>''.$__PATH.'/atoms/link/index.php', 				'name'=>'Links'],
		[ 'link'=>''.$__PATH.'/atoms/buttons/index.php', 			'name'=>'Buttons'],
		[ 'link'=>''.$__PATH.'/atoms/checkbox/index.php', 			'name'=>'Checkbox'],
		[ 'link'=>''.$__PATH.'/atoms/radio/index.php', 				'name'=>'Radio'],
		[ 'link'=>''.$__PATH.'/atoms/tumbler/index.php', 			'name'=>'Tumbler'],
		[ 'link'=>''.$__PATH.'/atoms/inputs/index.php', 			'name'=>'Inputs'],
		[ 'link'=>''.$__PATH.'/atoms/select/index.php', 			'name'=>'Select'],
		
	];	

	$menu__molecules = [
		[ 'link'=>''.$__PATH.'/molecules/steps/index.php', 			'name'=>'Этапы'],
		[ 'link'=>''.$__PATH.'/molecules/one-form/index.php', 		'name'=>'Единая форма'],
		[ 'link'=>''.$__PATH.'/molecules/breadcrumbs/index.php', 	'name'=>'Крошки'],
		[ 'link'=>''.$__PATH.'/molecules/pagination/index.php', 	'name'=>'Пагинация'],
		[ 'link'=>''.$__PATH.'/molecules/counter-calc/index.php', 	'name'=>'Счетчик коло-во'],
		[ 'link'=>''.$__PATH.'/molecules/tabs/index.php', 			'name'=>'Табы'],
		[ 'link'=>''.$__PATH.'/molecules/type-carusel/index.php', 	'name'=>'Типовая карусель'],
		[ 'link'=>''.$__PATH.'/molecules/gridgallery/index.php', 	'name'=>'Grid gall'],
	];

	$menu__organism = [
		[ 'link'=>''.$__PATH.'/organism/popup/index.php', 			'name'=>'Попапы'],
	];

	$menu__other = [
		[ 'link'=>''.$__PATH.'/molecules/simple-code/index.php', 	'name'=>'SimpleCode'],
	];

?>
<link rel="stylesheet" href="<?=$__PATH?>/__lui.css">
<link rel="stylesheet" href="<?=$__PATH?>/prism.css">
<script type="text/javascript" src="<?=$__PATH?>/prism.js"></script>
<div class="lui flex --align-stretch --just-space" style="display: flex;">
	<div class="lui-menu col --3">
		<div class="lui-menu__btn btn --border-white mx-24 my-24"><span>Меню</span></div>
		<div class="lui-menu__logo p --m">lui.core v.1.1</div>
		<div class="lui-menu__wraper">
			<ul class="lui-menu__group">
				<li class="lui-menu__title">Основы</li>
				<ul class="lui-menu__items">
					<?php foreach ($menu__base as $item): ?>
						<li class="lui-menu__item"><a href="<?=$item['link']?>" class="lui-menu__link <? if ($item['link'] == $file) {?>is-active<?php } ?>"><?=$item['name']?></a></li>
					<?php endforeach; ?>
				</ul>
			</ul>
			<ul class="lui-menu__group">
				<li class="lui-menu__title">Атомы</li>
				<ul class="lui-menu__items">
					<?php foreach ($menu__atoms as $item): ?>
						<li class="lui-menu__item"><a href="<?=$item['link']?>" class="lui-menu__link <? if ($item['link'] == $file) {?>is-active<?php } ?>"><?=$item['name']?></a></li>
					<?php endforeach; ?>
				</ul>
			</ul>
			<ul class="lui-menu__group">
				<li class="lui-menu__title">Молекулы</li>
				<ul class="lui-menu__items">
					<?php foreach ($menu__molecules as $item): ?>
						<li class="lui-menu__item"><a href="<?=$item['link']?>" class="lui-menu__link <? if ($item['link'] == $file) {?>is-active<?php } ?>"><?=$item['name']?></a></li>
					<?php endforeach; ?>
				</ul>
			</ul>
			<ul class="lui-menu__group">
				<li class="lui-menu__title">Организмы</li>
				<ul class="lui-menu__items">
					<?php foreach ($menu__organism as $item): ?>
						<li class="lui-menu__item"><a href="<?=$item['link']?>" class="lui-menu__link <? if ($item['link'] == $file) {?>is-active<?php } ?>"><?=$item['name']?></a></li>
					<?php endforeach; ?>
				</ul>
			</ul>
			<ul class="lui-menu__group">
				<li class="lui-menu__title">Другое</li>
				<ul class="lui-menu__items">
					<?php foreach ($menu__other as $item): ?>
						<li class="lui-menu__item"><a href="<?=$item['link']?>" class="lui-menu__link <? if ($item['link'] == $file) {?>is-active<?php } ?>"><?=$item['name']?></a></li>
					<?php endforeach; ?>
				</ul>
			</ul>
		</div>
	</div>
	<div class="lui-demo col --auto" style="flex: 1;">