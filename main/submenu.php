<?php if (!defined('FLUX_ROOT')) exit;
$adminMenuItems = $this->getAdminMenuItems(); 
?>

<?php $subMenuItems = $this->getSubMenuItems(); $menus = array() ?>
<?php if (!empty($subMenuItems)): ?>
	<div id="submenu">Menu:
		<?php foreach ($subMenuItems as $menuItem): ?>
			<?php $menus[] = sprintf('<a href="%s" class="sub-menu-item%s">%s</a>',
				$this->url($menuItem['module'], $menuItem['action']),
				$params->get('module') == $menuItem['module'] && $params->get('action') == $menuItem['action'] ? ' current-sub-menu' : '',
				htmlspecialchars($menuItem['name'])) ?>
			<?php endforeach ?>
			<?php echo implode(' / ', $menus) ?>
		</div>
	<?php endif ?>
	<?php if (!empty($adminMenuItems)): ?>
		<div class="menu-item"><p style="display: inline-block; color: white;">Admin</p>
			<ul class="sub-menu" style="list-style: none; display: inline-block;">
				<?php foreach ($adminMenuItems as $menuItem): ?>
					<li class="menu-item" style="float: left; padding: 0 10px;">
						<a href="<?php echo $menuItem['url'] ?>"<?php
						if ($menuItem['module'] == 'account' && $menuItem['action'] == 'logout')
							echo ' onclick="return confirm(\'Are you sure you want to logout?\')"' ?>>
						<?php echo htmlspecialchars($menuItem['name']) ?></a>
					</li>
				<?php endforeach ?>
			</ul>
		</div>
	<?php endif ?>