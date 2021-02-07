<?php
/**
 * Return registered callbacks of cronjobs
 *
 */

class Croncheck extends \Elgg\HooksRegistrationService {

	public function getCroneventHandlers($interval) {
		$cronhooks = elgg()->hooks->getOrderedHandlers('cron', $interval);
		$callbacks = [];
		foreach($cronhooks as $cron) {
			if ($cron != "_elgg_cron_monitor") {
				$callbacks[] = $cron;
			}
		}

		return $callbacks;
	}
}
