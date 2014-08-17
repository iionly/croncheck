Croncheck for Elgg 1.9
Latest Version: 1.9.0
Released: 2014-08-13
Contact: iionly@gmx.de
License: GNU General Public License version 2
Copyright: (c) iionly (for Elgg 1.8 and newer), ColdTrick IT Solutions


This plugin adds a stats page in the admin backend of your Elgg site under "Administer" - "Statistics" - "Croncheck" that shows the time of the latest execution of the Elgg cronjobs and shows which cron events are registered by Elgg core and 3rd party plugins for the cron intervalls. This plugin doesn't handle the configuration of or manages the execution of cronjobs - you still have to do this on your own following the instructions given in the Elgg install docs. The Croncheck plugin just gives you a quick summary of the cronjobs which might be useful to verify that the jobs have been correctly set up and to get a summary of the cron events registered by various plugins.

Originally, the Croncheck plugin has been written and released by ColdTrick IT Solutions (available at https://community.elgg.org/plugins/484590/2.0.1/croncheck). At the time of release of Coldtrick's Croncheck version for Elgg 1.8 I'd already ported it to Elgg 1.8 for personal use. Also, Elgg 1.9 offers a stats page for latest cron runs by default but is lacking the summary table of which cron events are registered for the cron intervals. So, I've updated what I already had for Elgg 1.8 also for Elgg 1.9 and adjusted the code to match the view location used in Elgg 1.9 to avoid adding a separate stats page.


Installation and configuration:

1. Copy the croncheck plugin folder into the mod folder on your server,
2. Enable the plugin in the admin section of your site.


Changelog

1.9.0
- Updated for Elgg 1.9.

1.8.0
- Intial release for Elgg 1.8.
