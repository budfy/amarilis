<nav class="mob-nav" style="display: none;">
	<div class="mob-nav__top flex --just-center">
		<div class="mob-nav__menu js-mob-nav__open flex --just-center --align-center">
			<div>
				<i></i>
				<i></i>
				<i></i>
			</div>
		</div>
		<a href="/" class="mob-nav__logo flex --just-center --align-center --svg__logo"></a>
		<a href="tel:" class="mob-nav__slide flex --just-center --align-center --svg__tell"></a>
	</div>
	<div class="mob-nav__full">
		<div class="js-mob-nav__full">
			<div class="tabs">
				<div class="mob-menu__tabs pdr-detail__tabs tabs__btns flex --align-center">
					<div class="pdr-detail__tab tabs__btn --js is-active" data-tab="1">Услуги</div>
					<div class="pdr-detail__tab tabs__btn --js js-trigger-params" data-tab="2">Меню</div>
				</div>
				<div class="tabs__blocks">
					<div class="tabs__block --js --1 is-show">
						<ul class="mob-menu mb-0">
							<?php for ($i = 0; $i < 4; $i++){ ?>
							<li class="mob-menu__item">
								<a href="#" class="mob-menu__link">Раздел</a>
								<span class="mob-menu__toogle-btn --svg__toogle-btn"></span>
								<ul class="mob-menu__sub-menu">
									<li class="mob-menu__sub-item"><a href="#" class="mob-menu__sub-link">Подпункт меню</a></li>
									<li class="mob-menu__sub-item"><a href="#" class="mob-menu__sub-link">Подпункт меню</a></li>
									<li class="mob-menu__sub-item"><a href="#" class="mob-menu__sub-link">Подпункт меню</a></li>
									<li class="mob-menu__sub-item"><a href="#" class="mob-menu__sub-link">Подпункт меню</a></li>
								</ul>
							</li>
							<?php } ?>
						</ul>		

					</div>
					<div class="tabs__block --js --2">
						<ul class="mob-menu mb-0">
							<li class="mob-menu__itemm"><a href="#" class="mob-menu__link">Пункт меню</a></li>
							<li class="mob-menu__itemm"><a href="#" class="mob-menu__link">Пункт меню</a></li>
							<li class="mob-menu__itemm"><a href="#" class="mob-menu__link">Пункт меню</a></li>
							<li class="mob-menu__itemm"><a href="#" class="mob-menu__link">Пункт меню</a></li>
	 					</ul>	
					</div>
				</div>
			</div>
		</div>
	</div>	
</nav>
