<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://github.com/bbathel12
 * @since             1.0.0
 * @package           Job_App
 *
 * @wordpress-plugin
 * Plugin Name:       Job Application
 * Plugin URI:        https://github.com/bbathel12/job-apps
 * Description:       Creates a basic job application, with responses viewable in the admin
 * Version:           1.0.0
 * Author:            Brice
 * Author URI:        https://github.com/bbathel12
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       job-app
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-job-app-activator.php
 */
function activate_job_app() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-job-app-activator.php';
	Job_App_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-job-app-deactivator.php
 */
function deactivate_job_app() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-job-app-deactivator.php';
	Job_App_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_job_app' );
register_deactivation_hook( __FILE__, 'deactivate_job_app' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-job-app.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_job_app() {

	$plugin = new Job_App();
	$plugin->run();

}
run_job_app();
