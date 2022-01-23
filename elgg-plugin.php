<?php

return [
	'plugin' => [
		'name' => 'Croncheck',
		'version' => '4.0.0',
	],
	'view_extensions' => [
		'admin/cron' => [
			'croncheck/croncheck' => [],
		],
	],
];
