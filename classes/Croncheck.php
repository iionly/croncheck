<?php
/**
 * Return registered callbacks of cronjobs
 *
 */

class Croncheck extends \Elgg\HooksRegistrationService {

	public function getCroneventHandlers($interval) {
		$cronhooks = _elgg_services()->hooks->getOrderedHandlers('cron', $interval);

		$callbacks = array();
		foreach($cronhooks as $cron) {
			if($cron != "_elgg_cron_monitor") {
				$callbacks[] = $cron;
			}
		}
		return $callbacks;
	}
}
