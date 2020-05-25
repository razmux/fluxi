		<?php if (!defined('FLUX_ROOT')) exit; 
	if($params->get('action') == 'login')
    {
        $hofchars = array();
        $hofguilds = array();
    }  else {
		$sqlpvp  = "SELECT `pvpladder`.`name` AS char_name, `pvpladder`.`kills` AS kills, `pvpladder`.`deaths` AS deaths, `char`.`char_id`, char.class, `login`.`sex`, `guild`.`name` as gname, `guild`.`emblem_len`, `guild`.`guild_id` FROM pvpladder LEFT JOIN  `char` ON pvpladder.char_id = char.char_id LEFT JOIN  `login` ON char.account_id = login.account_id LEFT JOIN  `guild` ON char.guild_id = guild.guild_id ORDER BY kills DESC LIMIT 1"; 
		$sthpvp  = $server->connection->getStatement($sqlpvp);
		$sthpvp->execute();
		$hofchars = $sthpvp->fetch();

		$sqlgvg  = "SELECT g.guild_id, g.name AS gname, g.emblem_len, (SELECT COUNT( c.castle_id ) FROM guild_castle c WHERE c.guild_id = g.guild_id ) AS castles, g.master, (SELECT COUNT( char_id ) FROM  `char` WHERE  `char`.guild_id = g.guild_id ) AS members FROM guild AS g LEFT JOIN  `char` AS ch ON ch.char_id = g.char_id LEFT JOIN login ON login.account_id = ch.account_id ORDER BY castles DESC, members DESC , g.max_member DESC , g.next_exp ASC LIMIT 3"; 
		$sthgvg  = $server->connection->getstatement($sqlgvg);
		$sthgvg->execute();
		$hofguilds = $sthgvg->fetchAll();
	}
?>



		<div class="guild">
			<img class="flagg center-block" src="<?php echo$this->themePath('img/flagbg.png');?>">
				<?php if(isset($hofguilds) AND is_array($hofguilds)): ?>
					<ul>
						<?php foreach ($hofguilds as $guild): ?>
						<li>
							<?php if ($guild->emblem_len): ?>
								<img width="24" src="<?php echo $this->emblem($guild->guild_id) ?>" alt="<?php echo $guild->gname; ?>" title="Guild: <?php echo $guild->gname; ?><br/>Castle: <?php echo $guild->castles; ?>" >
							<?php endif ?>
						</li>
						<?php endforeach; ?>
					</ul>
				<?php endif; ?>
			</div>