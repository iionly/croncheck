<?php

elgg_register_event_handler('init', 'system', 'croncheck_init');

function croncheck_init() {
	elgg_extend_view('admin/cron', 'croncheck/croncheck');
}
