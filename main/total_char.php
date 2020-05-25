<?php if (!defined('FLUX_ROOT')) exit; 

if($params->get('action')!='login') {
	$sql = "SELECT COUNT(*) as total FROM `char`";
	$sthaccounts = $server->connection->getStatement($sql);
	$sthaccounts->execute();
	$_total_accounts = $sthaccounts->fetch();

	$total_accounts = $_total_accounts->total;
}
else {
	$total_accounts = 0;
}
?>
<div class="total_accounts">
	<span><?php echo $total_accounts; ?></span>
</div>

