<?php

$rrd_filename = Rrd::name($device['hostname'], 'mtxr_hotspot_users');

require 'includes/html/graphs/common.inc.php';

$ds = 'hotspotUsers';

$colour_area = '9999cc';
$colour_line = '0000cc';

$colour_area_max = '9999cc';

$graph_min = 0;

$unit_text = 'Hotspot Users';

require 'includes/html/graphs/generic_simplex.inc.php';