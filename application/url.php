<?php
// Designed By Locker LT Solution (http://it.brainlockerltd.com)
// Powered By Brain Locker Ltd. (http://brainlockerltd.com)

$group = $row_Application['GP'];
$BID = $row_Application['BID'];

if ($group == "DC") {
    echo "../product/batteries/dc-series.php?BID=$BID";
} else {
    if ($group == "FF") {
		echo "../product/batteries/full-force.php?BID=$BID";
	} else {
		if ($group == "HC") {
			echo "../product/batteries/hc-series.php?BID=$BID";
		} else {
			echo "#";
		}
	}
}
?>