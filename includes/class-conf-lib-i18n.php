<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       webdevteam
 * @since      1.0.0
 *
 * @package    Conf_Lib
 * @subpackage Conf_Lib/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Conf_Lib
 * @subpackage Conf_Lib/includes
 * @author     Web Dev Team <rbarria@liveandinvestoverseas.com>
 */
class Conf_Lib_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'conf-lib',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
