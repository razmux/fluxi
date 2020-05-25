<?php if (!defined('FLUX_ROOT')) exit;

if($params->get('action')=='login') {
	$pvpladder = array();
} else {
	$sqlpvp = "SELECT `pvpladder`.`kills`, `pvpladder`.`streaks`, `pvpladder`.`deaths`, `char`.`name`, `char`.`class`, `char`.`base_level`, `char`.`job_level`, `char`.`account_id`, `char`.`online`, `login`.`sex` FROM `pvpladder` LEFT JOIN `char` ON `char`.`char_id` = `pvpladder`.`char_id` LEFT JOIN `login` ON `login`.`account_id` = `char`.`account_id` WHERE `login`.`state` = '0' ORDER BY `pvpladder`.`kills` DESC, `pvpladder`.`streaks` DESC, `pvpladder`.`deaths` DESC, `char`.`base_exp` DESC LIMIT 0,5"; 
	$sthpvp = $server->connection->getStatement($sqlpvp);
	$sthpvp->execute();
	$pvpladder = $sthpvp->fetchAll();
}
?>
<div class="containerLeft">
	<div class="pvp-rankings">
		<div class="pvph3" style="color: white; font-family: hind, cursive;">
			<h5>The Top Five PvP Players </h5>
		</div>

			<?php if(!empty($pvpladder)): ?>
				<?php $i=1; foreach ($pvpladder as $pvpplayer): ?>
					<img src="<?php echo $master['avatar'].($pvpplayer->name);?>" title="Rank: <?php echo $i++; ?> <br/> Name: <?php echo ((strlen($pvpplayer->name)>21)? substr($pvpplayer->name, 0,21)."..":$pvpplayer->name); ?> <br/> Kills: <?php echo number_format($pvpplayer->kills); ?> <br/> Deaths: <?php echo number_format($pvpplayer->deaths); ?>">
				
				<?php endforeach; ?>
			<?php endif; ?>

	</div>
</div>
