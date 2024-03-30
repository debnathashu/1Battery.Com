<?php
// Designed By Locker LT Solution (http://it.brainlockerltd.com)
// Powered By Brain Locker Ltd. (http://brainlockerltd.com)

$group = $row_Application4['GP'];
$BID = $row_Application4['BID'];

if ($group == "DC") {
    echo "../product/battery/update-dc-series.php?BID=$BID";
} else {
    if ($group == "FF") {
		echo "../product/battery/update-full-force.php?BID=$BID";
	} else {
		if ($group == "HC") {
			echo "../product/battery/update-hc-series.php?BID=$BID";
		} else {
			echo "#";
		}
	}
}
?>