Croncheck plugin for Elgg 3.0 and newer Elgg 3.X
================================================

Latest Version: 3.0.0  
Released: 2018-08-10  
Contact: iionly@gmx.de  
License: GNU General Public License version 2  
Copyright: (c) iionly (for Elgg 1.8 and newer), ColdTrick IT Solutions


Description
-----------

This plugin adds a stats page in the admin backend of your Elgg site under "Information" - "Croncheck" that shows the time of the latest execution of the Elgg cronjobs and shows which cron events are registered by Elgg core and 3rd party plugins for the cron intervals. This plugin doesn't handle the configuration of or manages the execution of cronjobs - you still have to do this on your own following the instructions given in the Elgg install docs. The Croncheck plugin just gives you a quick summary of the cronjobs which might be useful to verify that the jobs have been correctly set up and to get a summary of the cron events registered by various plugins.


Installation and configuration
------------------------------

1. If you have a previous version of the Croncheck plugin installed, first remove the old croncheck plugin folder from your mod directory before copying/extracting the new version to your server,
2. Copy the croncheck plugin folder into the mod folder on your server,
3. Enable the plugin in the admin section of your site.
