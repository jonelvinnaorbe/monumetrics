<?php
/**
 * Plugin Name: Test Plugin
 * Plugin URI: http://www.mywebsite.com/my-first-plugin
 * Description: The very first plugin that I have ever created.
 * Version: 1.2
 * Author: Your Name
 * Author URI: http://www.mywebsite.com
 */

echo 'v1.2';

require 'plugin-update-checker/plugin-update-checker.php';
$myUpdateChecker = Puc_v4_Factory::buildUpdateChecker(
	'https://github.com/jonelvinnaorbe/monumetrics/',
	__FILE__,
	'monumetrics'
);

//Set the branch that contains the stable release.
$myUpdateChecker->setBranch('main');