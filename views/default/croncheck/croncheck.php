<?php

$intervals = elgg_get_config('elgg_cron_periods');

// List registered cronjobs per interval

$rows = [];
foreach($intervals as $interval) {
	$row = [];

	$row[] = elgg_format_element('td', [], elgg_echo("interval:$interval"));
	$row[] = elgg_format_element('td', [], '');

	$rows[] = elgg_format_element('tr', [], implode('', $row));

	$cronhooks = new Croncheck();
	$callbacks = $cronhooks->getCroneventHandlers($interval);

	if ($callbacks) {
		foreach($callbacks as $cron) {
			$row = [];

			$row[] = elgg_format_element('td', [], '');
			$row[] = elgg_format_element('td', [], $cron);

			$rows[] = elgg_format_element('tr', [], implode('', $row));
		}
	} else {
		$row = [];

		$row[] = elgg_format_element('td', [], '');
		$row[] = elgg_format_element('td', [], elgg_echo('croncheck:none_registered'));

		$rows[] = elgg_format_element('tr', [], implode('', $row));
	}
}

$header_row = [
	elgg_format_element('th', [], elgg_echo('admin:cron:period')),
	elgg_format_element('th', [], elgg_echo('croncheck:events')),
];
$header = elgg_format_element('tr', [], implode('', $header_row));

$table_content = elgg_format_element('thead', [], $header);
$table_content .= elgg_format_element('tbody', [], implode('', $rows));

$table = elgg_format_element('table', ['class' => 'elgg-table'], $table_content);

echo elgg_view_module('inline', elgg_echo('croncheck:registered'), $table);
