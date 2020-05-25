<?php 

	include('inc/MySQL.php');
	
	$SQL 		= "SELECT status FROM woe_status";	
	$RESULT 	= $MySQL->Query($SQL) or die($MySQL->error);
	$ROW 		= $RESULT->Fetch_assoc();
	$WOEON		= $ROW['status'];
	
	if ($WOEON >= 1) {
			$WOE_ON = true;
		}
		else
		{
			$WOE_ON = false;	
		}

    $RESULT->close();
	

?>
<?php
$online = "<img src=". $this->themePath('img/online.png') . " />";
$offline = "<img src=". $this->themePath('img/offline.png') . " />"; 
?>
<div class="onlineStatus1 wstatus"><p>WoE Status</p> <?php if($WOE_ON) { echo $online; } else { echo $offline;} ?> </div>