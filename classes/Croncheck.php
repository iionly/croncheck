<?php
/**
 * Return registered callbacks of cronjobs
 *
 */

class Croncheck extends \Elgg\HooksRegistrationService {

	public function getCroneventHandlers($interval) {
		$cronhooks = elgg_get_ordered_hook_handlers('cron', $interval);

		$callbacks = [];
		foreach($cronhooks as $cron) {
			if ($cron != "_elgg_cron_monitor") {
				$callbacks[] = $cron;
			}
		}
		return $callbacks;
	}
}
