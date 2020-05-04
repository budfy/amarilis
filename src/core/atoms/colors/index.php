<?php
	$title = 'Цвета';
	$meta__title = "Guidelines | " . $title;
	require($_SERVER['DOCUMENT_ROOT'].'/.cfg.php');
	require($cfg__path.'/header.php');
	require($cfg__path.'/core/header.php');
?> 

<div class="lui-header">
	<h1 class="lui-header__title"><?=$title?></h1>
	<?php code('<link rel="stylesheet" href="/template/core/atoms/colors/__colors.css">', 'markup'); ?>
</div>



<div class="lui-section">
	<div class="lui-section__info">
		<div class="lui-section__title h4"><b>Монохромные цвета</b></div>
	</div>
	<div class="lui-section__tabs">
		
		<div class="lui-colors">
			<div class="lui-colors__head flex --align-center">
				<div class="lui-colors__col col --2 p --m">Цвет</div>
				<div class="lui-colors__col col --2 p --m">HEX</div>
				<div class="lui-colors__col col --2 p --m">Переменная CSS</div>
			</div>
			<div class="lui-colors__row flex --align-center">
				<div class="lui-colors__col col --2 flex --align-center p --l"><div style="width: 5rem; height:5rem; background-color: var(--color__dark)"></div></div>
				<div class="lui-colors__col col --2 flex --align-center p --l">#000000</div>
				<div class="lui-colors__col col --2 flex --align-center p --l">--color__dark</div>
			</div>
			<div class="lui-colors__row flex --align-center">
				<div class="lui-colors__col col --2 flex --align-center p --l"><div style="width: 5rem; height:5rem; background-color: var(--color__gray-1)"></div></div>
				<div class="lui-colors__col col --2 flex --align-center p --l">#F5F5F9</div>
				<div class="lui-colors__col col --2 flex --align-center p --l">--color__gray-1</div>
			</div>
			<div class="lui-colors__row flex --align-center">
				<div class="lui-colors__col col --2 flex --align-center p --l"><div style="width: 5rem; height:5rem; background-color: var(--color__gray-2)"></div></div>
				<div class="lui-colors__col col --2 flex --align-center p --l">#FAFAFC</div>
				<div class="lui-colors__col col --2 flex --align-center p --l">--color__gray-2</div>
			</div>
			<div class="lui-colors__row flex --align-center">
				<div class="lui-colors__col col --2 flex --align-center p --l"><div style="width: 5rem; height:5rem; background-color: var(--color__border)"></div></div>
				<div class="lui-colors__col col --2 flex --align-center p --l">#E9E9E9</div>
				<div class="lui-colors__col col --2 flex --align-center p --l">--color__border</div>
			</div>
		</div>
	</div>
</div>

<div class="lui-section">
	<div class="lui-section__info">
		<div class="lui-section__title h4"><b>Основные цвета в интерфейсе</b></div>
	</div>
	<div class="lui-section__tabs">
		
		<div class="lui-colors">
			<div class="lui-colors__head flex --align-center">
				<div class="lui-colors__col col --2 p --m">Цвет</div>
				<div class="lui-colors__col col --2 p --m">HEX</div>
				<div class="lui-colors__col col --2 p --m">Переменная CSS</div>
			</div>
			<div class="lui-colors__row flex --align-center">
				<div class="lui-colors__col col --2 flex --align-center p --l"><div style="width: 5rem; height:5rem; background-color: var(--color__fill-1)"></div></div>
				<div class="lui-colors__col col --2 flex --align-center p --l">#7B00FF</div>
				<div class="lui-colors__col col --2 flex --align-center p --l">--color__fill-1</div>
			</div>
			<div class="lui-colors__row flex --align-center">
				<div class="lui-colors__col col --2 flex --align-center p --l"><div style="width: 5rem; height:5rem; background-color: var(--color__fill-2)"></div></div>
				<div class="lui-colors__col col --2 flex --align-center p --l">#F52536</div>
				<div class="lui-colors__col col --2 flex --align-center p --l">--color__fill-2</div>
			</div>
			<div class="lui-colors__row flex --align-center">
				<div class="lui-colors__col col --2 flex --align-center p --l"><div style="width: 5rem; height:5rem; background-color: var(--color__fill-3)"></div></div>
				<div class="lui-colors__col col --2 flex --align-center p --l">#53EAE0</div>
				<div class="lui-colors__col col --2 flex --align-center p --l">--color__fill-3</div>
			</div>
			<div class="lui-colors__row flex --align-center">
				<div class="lui-colors__col col --2 flex --align-center p --l"><div style="width: 5rem; height:5rem; background-color: var(--color__fill-4)"></div></div>
				<div class="lui-colors__col col --2 flex --align-center p --l">#F5F5F9</div>
				<div class="lui-colors__col col --2 flex --align-center p --l">--color__fill-4</div>
			</div>
		</div>
	</div>
</div>

<div class="lui-section">
	<div class="lui-section__info">
		<div class="lui-section__title h4"><b>Hover цвета</b></div>
	</div>
	<div class="lui-section__tabs">
		
		<div class="lui-colors">
			<div class="lui-colors__head flex --align-center">
				<div class="lui-colors__col col --2 p --m">Цвет</div>
				<div class="lui-colors__col col --2 p --m">HEX</div>
				<div class="lui-colors__col col --2 p --m">Переменная CSS</div>
			</div>
			<div class="lui-colors__row flex --align-center">
				<div class="lui-colors__col col --2 flex --align-center p --l"><div style="width: 5rem; height:5rem; background-color: var(--color__fill-1-h)"></div></div>
				<div class="lui-colors__col col --2 flex --align-center p --l">#6F00E5</div>
				<div class="lui-colors__col col --2 flex --align-center p --l">--color__fill-1-h</div>
			</div>
			<div class="lui-colors__row flex --align-center">
				<div class="lui-colors__col col --2 flex --align-center p --l"><div style="width: 5rem; height:5rem; background-color: var(--color__fill-2-h)"></div></div>
				<div class="lui-colors__col col --2 flex --align-center p --l">#DB2130</div>
				<div class="lui-colors__col col --2 flex --align-center p --l">--color__fill-2-h</div>
			</div>
			<div class="lui-colors__row flex --align-center">
				<div class="lui-colors__col col --2 flex --align-center p --l"><div style="width: 5rem; height:5rem; background-color: var(--color__fill-3-h)"></div></div>
				<div class="lui-colors__col col --2 flex --align-center p --l">#4AD1C8</div>
				<div class="lui-colors__col col --2 flex --align-center p --l">--color__fill-3-h</div>
			</div>
			<div class="lui-colors__row flex --align-center">
				<div class="lui-colors__col col --2 flex --align-center p --l"><div style="width: 5rem; height:5rem; background-color: var(--color__fill-4-h)"></div></div>
				<div class="lui-colors__col col --2 flex --align-center p --l">#DDDDE0</div>
				<div class="lui-colors__col col --2 flex --align-center p --l">--color__fill-4-h</div>
			</div>
		</div>
	</div>
</div>

<div class="lui-section">
	<div class="lui-section__info">
		<div class="lui-section__title h4"><b>Active цвета</b></div>
	</div>
	<div class="lui-section__tabs">
		
		<div class="lui-colors">
			<div class="lui-colors__head flex --align-center">
				<div class="lui-colors__col col --2 p --m">Цвет</div>
				<div class="lui-colors__col col --2 p --m">HEX</div>
				<div class="lui-colors__col col --2 p --m">Переменная CSS</div>
			</div>
			<div class="lui-colors__row flex --align-center">
				<div class="lui-colors__col col --2 flex --align-center p --l"><div style="width: 5rem; height:5rem; background-color: var(--color__fill-1-a)"></div></div>
				<div class="lui-colors__col col --2 flex --align-center p --l">#5700B2</div>
				<div class="lui-colors__col col --2 flex --align-center p --l">--color__fill-1-a</div>
			</div>
			<div class="lui-colors__row flex --align-center">
				<div class="lui-colors__col col --2 flex --align-center p --l"><div style="width: 5rem; height:5rem; background-color: var(--color__fill-2-a)"></div></div>
				<div class="lui-colors__col col --2 flex --align-center p --l">#A81925</div>
				<div class="lui-colors__col col --2 flex --align-center p --l">--color__fill-2-a</div>
			</div>
			<div class="lui-colors__row flex --align-center">
				<div class="lui-colors__col col --2 flex --align-center p --l"><div style="width: 5rem; height:5rem; background-color: var(--color__fill-3-a)"></div></div>
				<div class="lui-colors__col col --2 flex --align-center p --l">#389E97</div>
				<div class="lui-colors__col col --2 flex --align-center p --l">--color__fill-3-a</div>
			</div>
			<div class="lui-colors__row flex --align-center">
				<div class="lui-colors__col col --2 flex --align-center p --l"><div style="width: 5rem; height:5rem; background-color: var(--color__fill-4-a)"></div></div>
				<div class="lui-colors__col col --2 flex --align-center p --l">#ABABAD</div>
				<div class="lui-colors__col col --2 flex --align-center p --l">--color__fill-4-a</div>
			</div>
		</div>
	</div>
</div>



<?php require($cfg__path.'/core/footer.php'); ?>
<?php require($cfg__path.'/footer.php'); ?>