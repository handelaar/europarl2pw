<?php

$csv = (array_map('str_getcsv',file('meetings.csv')));
$output = array();

foreach ($csv as $row) {
	# CRE-9-2022-11-24_EN.xml
	$filename = "CRE-" . $row[0] . "-" . $row[1] . "_EN.xml";
	if (!in_array($filename, $output)) {
		$output[] .= $filename;
		echo $filename . "\n";
	}
}

