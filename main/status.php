<?php if (!defined('FLUX_ROOT')) exit; 

$cache = FLUX_DATA_DIR.'/tmp/ServerStatus.cache';
if (file_exists($cache) && (time() - filemtime($cache)) < (Flux::config('ServerStatusCache') * 600)) {
    $serverStatus = unserialize(file_get_contents($cache));
}
else {
    $serverStatus = array();
    foreach (Flux::$loginAthenaGroupRegistry as $groupName => $loginAthenaGroup) {
        if (!array_key_exists($groupName, $serverStatus)) {
            $serverStatus[$groupName] = array();
        }

        $loginServerUp = $loginAthenaGroup->loginServer->isUp();

        foreach ($loginAthenaGroup->athenaServers as $athenaServer) {
            $serverName = $athenaServer->serverName;

            $sql = "SELECT COUNT(char_id) AS players_online FROM {$athenaServer->charMapDatabase}.char WHERE online > 0";
            $sth = $loginAthenaGroup->connection->getStatement($sql);
            $sth->execute();
            $res = $sth->fetch();

            $serverStatus[$groupName][$serverName] = array(
                'loginServerUp' => $loginServerUp,
                'charServerUp' => $athenaServer->charServer->isUp(),
                'mapServerUp' => $athenaServer->mapServer->isUp(),
                'playersOnline' => intval($res ? $res->players_online : 0),
            );
        }
    }
    
    $fp = fopen($cache, 'w');
    if (is_resource($fp)) {
        fwrite($fp, serialize($serverStatus));
        fclose($fp);
    }
}
$online = "<img src=". $this->themePath('img/online.png') . " />";
$offline = "<img src=". $this->themePath('img/offline.png') . " />";
    foreach ($serverStatus as $privServerName => $gameServers): 
        foreach ($gameServers as $serverName => $gameServer): 
            if ($gameServer['loginServerUp']) { $loginonline = true; } else { $loginonline = false; } 
            if ($gameServer['charServerUp']) { $charonline = true; } else { $charonline = false; }
            if ($gameServer['mapServerUp']) { $maponline = true; } else { $maponline = false; } 
            $onlinecount = $gameServer['playersOnline'];
        endforeach;
    endforeach;

 ?>

<div class="topBar">
    <div class="col-md-4 onlineStatus"><p>Server Status</p>
        <?php if($loginonline) { echo $online; } else { echo $offline; } ?>
        <?php if($charonline) { echo $online; } else { echo $offline; } ?>
        <?php if($maponline) { echo $online; } else { echo $offline; } ?>
    </div>
    <div class="col-md-4 playerOnline" style="font-weight: bolder;"><p>Players Online</p><span class="counter" style="font-size: 18px;"><?php echo number_format($onlinecount); ?></span></div>
    <div class="col-md-4 serverTime">
        <p>Server Time</p><?php echo $master['server_time']; ?>
    </div> 
    
</div>
