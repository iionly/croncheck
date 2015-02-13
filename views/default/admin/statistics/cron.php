<?php

$intervals = elgg_get_config('elgg_cron_periods');

?>

<div>
<h3><?php echo elgg_echo("croncheck:info"); ?></h3>
	<table class="elgg-table-alt">
		<tr>
			<th><?php echo elgg_echo("croncheck:interval"); ?></th>
			<th><?php echo elgg_echo("croncheck:timestamp"); ?></th>
			<th><?php echo elgg_echo("croncheck:friendly_time"); ?></th>
		</tr>
		<?php
			foreach($intervals as $interval) {
				$key = "cron_latest:$interval:ts";
				$interval_ts = elgg_get_site_entity()->getPrivateSetting($key);
		?>

		<tr>
			<td>
				<?php echo elgg_echo("interval:$interval"); ?>
			</td>
			<td>
				<?php
					if($interval_ts) {
						echo $interval_ts;
					}
				?>
			</td>
			<td>
				<?php
					if($interval_ts) {
						echo elgg_view_friendly_time($interval_ts) . " @ " . date("r", $interval_ts);
					} else {
						echo elgg_echo("croncheck:no_run");
					}
				?>
			</td>
		</tr>
		<?php
			}
		?>
	</table>

<br>

<h3><?php echo elgg_echo("croncheck:registered")?></h3>
	<table class="elgg-table-alt">
		<tr>
			<th><?php echo elgg_echo("croncheck:interval"); ?></th>
			<th><?php echo elgg_echo("croncheck:events"); ?></th>
		</tr>
		<?php
			foreach($intervals as $interval) {
		?>
			<tr>
				<td>
					<?php echo elgg_echo("interval:$interval"); ?>
				</td>
				<td>&nbsp</td>
			</tr>
			<?php

				$cronhooks = new Croncheck();
				$callbacks = $cronhooks->getCroneventHandlers($interval);

				if($callbacks) {
					foreach($callbacks as $cron) {
			?>
						<tr>
							<td>&nbsp</td>
							<td><?php echo $cron;?></td>
						</tr>
			<?php
					}
				} else {
			?>
						<tr>
							<td>&nbsp</td>
							<td><?php echo elgg_echo("croncheck:none_registered");?></td>
						</tr>
			<?php
				}
			?>
		<?php
			}
		?>
	</table>
</div>