<?php 
	$mete__title = "";
	$mete__desc  = "";
	$mete__key   = "";
	require($cfg__path.'/header.php');
	require($cfg__path.'/core/header.php');
?> 

<div class="center-wrap">
	<div class="mrg">
		
		<div class="flex  mrg --min">
			<div class="social-share flex --just-end --align-center">
				<div class="p --m">Поделиться:</div>
				<div class="flex --align-center">
					<a href="#" target="_blank" onclick="this.href='https://vk.com/share.php?url='+window.location.href+window.location.hash+'&amp;title='+document.title" class="social-share__link">
						<img src="/template/core/img/element__soc-icon-4--bg.svg" alt="">
					</a>
					<a href="#" target="_blank" onclick="this.href='http://www.facebook.com/share.php?u='+window.location.href+window.location.hash" class="social-share__link">
						<img src="/template/core/img/element__soc-icon-7--bg.svg" alt="">
					</a>
				</div>
			</div>			
		</div>
	
	</div>
</div>

<?php require($cfg__path.'/core/footer.php'); ?>
<?php require($cfg__path.'/footer.php'); ?>