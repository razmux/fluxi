<?php if (!defined('FLUX_ROOT')) exit;
	
	$index=0; 
	$woe_schd = $woe_castles = array();
	foreach ($master['woe_schd'] as $woeschd) {
		$e_woe_schd = explode(",", $woeschd);
		$woe_castles[] = $e_woe_schd[0];
		$woe_schd[] = $e_woe_schd[1];
	}
	foreach($woe_schd as $key => $woe):
		if( strtotime($woe_schd[0]) > strtotime($woe) ):
			$index = $key;
		endif;
	endforeach;

?>
<div class="containerRight">
	<div class="woe-block">
		<div class="next-woe">
			<div class="woe_countdown">
				<p class="text-center"><?php echo date('M d, Y H:i:s', strtotime($woe_schd[$index])); ?></p>
			</div>
			<div class="castle-name">Castle : <?php echo $woe_castles[$index]; ?></div>
		</div>
	</div>
</div>