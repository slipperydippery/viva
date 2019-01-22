<?php
	include './partials/contact_form_header.php';
	include './partials/header.php';
/*
	$checkmark = "<img src='img/checkmark.png' class='checkmark' />";

*/	$checkmark = ''; 


	require_once './code/pages.php';
	$current = $$current;
	$parent = $current['parent'];
	$parent = $$parent;	

	require './code/cookiecode.php';
	pushcookie($parent['cookiecode'], $current['cookiecode']);
	pullcookie($current['cookiecode']);
	currentvisited($parent['cookiecode'], $current['cookiecode']);
	$vimeo_code = $current['vimeo'];

	if(isset($_GET['replay']))
	{
		$current_visited = false;
	}

	$recentlySentMail = false;
	if(isset($_COOKIE['mailSent']))
	{
		$recentlySentMail = $_COOKIE['mailSent'];
	}

?>
<script>
    var current_visited = <?php echo json_encode($current_visited); ?>; 
</script>

<div class="vimapp-wrap" id="vimeoapp">
	<div class="vim-breadcrumb">
		<?= $breadcrumb ?>
	</div>
	<div class="h1custom">
		<h1><?= $current['title'] ?></h1>
	</div>
	<div class="vim-wrap">
<?php
		$noblack_style = '';
		if(mobile_user_agent_switch() == "ipad" || mobile_user_agent_switch() == "iphone")
		{
			$noblack_style = 'style="display:none;"';
		}
?>
		<div class="vim-noblack" <?=$noblack_style?> >
			<?php 
				$thumbnail = unserialize(file_get_contents("https://vimeo.com/api/v2/video/$vimeo_code.php"));
			?>
			<img src="<?= $thumbnail[0]['thumbnail_large'] ?>" />
		</div>
<?php
			$overlay_visibility = '';
			if($current_visited || $current['type'] == 'blanco_overzicht')
			{
				$overlay_visibility = "style='left:0px; opacity: 1;'";
			}
?>		
		<div class="vim-overlay vim-overlay--full" style='left:0px; opacity: 1;' <?=$overlay_visibility?> >
			<div class="vim-head">
				<h2>Selecteer een gemeente op de kaart </h2>
			</div>
			<div class="vim-body-map vim-body-map-animate">
				<?php
					include 'partials/kaart.php';
				?>

			</div>  <!-- .vim-body-map -->
			
			<div class="vim-element__wrap vim-element--single__wrap playclick">
				<div class="vim-element vim-element--single">
					<a href="#" class="choice "> 
						<img src="img/vimeo_play_purple.png" class="vim-element--playbutton" alt="">
						<img src="<?= $thumbnail[0]['thumbnail_large'] ?>" class="vimeo-thumb vimeo-thumb--home" />
					</a>
					<a href="beverA1.php" class="vim-element__txt "> 
						Bekijk de introductiefilm
			    	</a>
				</div>
			</div>
			<div class="explaintext explaintext--home">
				Met deze woonwijzer kunt u de woonzorglocaties zien die bij u passen. Selecteer een gemeente waar u graag zou willen wonen.
			</div>

			<a href="#" class="vim-post-controls vim-post-controls--replay" id="replay">
				<img src="img/replay.png" />
			</a>


		</div>  <!-- .vim-overlay -->
		<div class="vim-playpause">
			<img src="img/vimeo_play_blue.png" class="play playpause" />
			<img src="img/vimeo_pause_grey.png" class="pause playpause" />
		</div>		
<?php
		if($current['type'] != 'blanco_overzicht')
		{
?>
		<iframe id="vimeoiframe" class="vimeo" id="player1" src="https://player.vimeo.com/video/<?= $vimeo_code ?>?api=1&player_id=player1" width="630" height="354" frameborder="0" ></iframe>
<?php
		}
?>		

	</div>
    <div class="vim-shortcuts">
<?php 
			$gParent = $parent['parent'];
			$backPage = $parent['type'] == 'woning_overzicht' ? $$gParent : $parent;
?>
			<a href="<?= $backPage['adress'] ?>" class="vim-shortcut vim-shortcut--back" >
				<h3><?= ' '//$type[$backPage['type']]['back_to_here']?></h3>							
			</a>  

<?php
			if(isset($next))
			{
				$next = $$next;
?>	
				<a href="<?= $next['adress'] ?>" class="vim-shortcut vim-shortcut--next" >
					<h3><?= ' '//$next['title'] ?></h3>							
				</a>  
<?php
			}
?>
		
	</div>
	<div class="vim-infoblock-container vim-infoblock-container--left">
	    <div class="vim-controls vim-infoblock">
<?php
			$question = (isset($current['type_alt'])) ? $type[$current['type_alt']]['question'] : $type[$current['type']]['question'];
?>
			<h2 class="vim-infoblock-head"><?= $question ?></h2>
<?php 
				if($current['children'] !== null || $current['type'] == 'woning')
				{
					$options = $current['type'] == 'woning' ? $parent['children'] : $current['children'];
					foreach ($options as $child) {
						$child = $$child;
						$childtitle = isset($child['link_title']) ? $child['link_title'] : $child['title'];
?>
						<a href="<?= $child['adress'] ?>" class="vimeo-button"><span><?= $childtitle ?></span></a>
<?php
					}
				}
?>
	    </div>
	    <div class="vim-toeslag vim-infoblock">
		    	<p>
		    		De overheid bepaalt jaarlijks de spelregels rond de huurtoeslag. Wilt u weten of u in aanmerking komt voor een huurwoning met huurtoeslag neem dan contact met ons op via wonen@vivazorggroep.nl
		    	</p>
	    </div>

	</div>

	<div class="vim-infoblock-container vim-infoblock-container--right">
	    <div class="vim-contact vim-imfoblock">
<?php
			if(!$recentlySentMail)
			{
				require "contact_form.php";
			}
			else
			{
				require "bedankt.php";
			}
?>	    	
		</div>
    </div>
    <!-- <a href="unsetcookies.php" style="display:inline-block; margin: 2rem 0 0 0 ;">reset demo</a></p> -->
</div>

<?php
	include './partials/footer.php';
?>	
