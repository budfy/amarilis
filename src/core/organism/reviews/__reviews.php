<div class="reviews">
	<div class="reviews-items mt-48">
		<?php for ($i = 0; $i < 8; $i++){ ?>
			<!-- item -->
			<div class="reviews-item --review-pdg">
				<div class="reviews-item__head">
					<div class="reviews-item__title-line flex --align-center --just-space">
						<div class="reviews-item__name h5"><b>Иванов И. И.</b></div>
						<div class="reviews-item__rates flex --align-center">
							<div class="reviews-item__rate --svg__rate-active"></div>
							<div class="reviews-item__rate --svg__rate-active"></div>
							<div class="reviews-item__rate --svg__rate-active"></div>
							<div class="reviews-item__rate --svg__rate-active"></div>
							<div class="reviews-item__rate --svg__rate"></div>
						</div>
					</div>	
					<div class="reviews-item__info flex --just-space">
						<div class="reviews-item__info-wrap">
							<div class="reviews-item__info-line flex --align-center">
								<div class="reviews-item__info-title-wrap flex --align-center">
									<div class="reviews-item__info-icon --svg__review-service mr-16"></div>
									<div class="reviews-item__info-title p --m">Услуга:</div>
								</div>
								<a href="#" class="reviews-item__info-value link p --m"><b>Терапия</b></a>
							</div>
							<div class="reviews-item__info-line flex --align-center">
								<div class="reviews-item__info-title-wrap flex --align-center">
									<div class="reviews-item__info-icon --svg__review-doc mr-16"></div>
									<div class="reviews-item__info-title p --m">Врачь:</div>
								</div>
								<a href="#" class="reviews-item__info-value link p --m"><b>Иванов Иван Иванович</b></a>
							</div>
						</div>
						<div class="reviews-item__other-info">
							<div class="reviews-item__date p --m"><b>20.11.2017</b></div>
						</div>
					</div>
				</div>
				<div class="reviews-item__content">
					<p class="reviews-item__desc">По своей сути рыбатекст является альтернативой традиционному lorem ipsum, который вызывает у некторых людей недоумение рыбатекст является при прочитать ...  <a href="#review-1" data-popup="#review-1" class="link --color-1"><b>показать весь отзыв</b></a></p>
					<div class="reviews-item__answer-wrap flex mt-24">
						<div class="reviews-item__doc-avatar mr-16 lazy" data-src="/template/img/doctor__avatar--mini.jpg"></div>
						<div class="reviews-item__message">
							<div class="reviews-item__answer p">Спасибо за ваш отзыв!</div>
							<div class="reviews-item__doctor-name p --m">Иванов И. И.</div>
						</div>
					</div>
				</div>
			</div>
		<?php } ?>
	</div>
</div>
<div class="popup" id="review-1">
	<div class="popup__wrap">
		<div class="popup__content col --10">
			<div class="popup__close js-popup__close"></div>
			<h3><b>Иванов И. И.</b></h3>
			<p>По своей сути рыбатекст является альтернативой традиционному lorem ipsum, который вызывает у некторых людей недоумение рыбатекст является при прочитать альтернативой традиционному lorem ipsum, который вызывает у некторых людей недоумение рыбатекст является при прочитать</p>
			<div class="flex mt-40">
				<div class="btn --border-1 js-popup__close"><i></i><span>Закрыть</span><i></i></div>
			</div>
		</div>
		<div class="popup__shade js-popup__close"></div>
	</div>
</div>