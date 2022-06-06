<?php

/**
 * The admin-specific functionality of the plugin.
 *
 * @link       webdevteam
 * @since      1.0.0
 *
 * @package    Conf_Lib
 * @subpackage Conf_Lib/admin
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    Conf_Lib
 * @subpackage Conf_Lib/admin
 * @author     Web Dev Team <rbarria@liveandinvestoverseas.com>
 */
class Conf_Lib_Admin {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $plugin_name    The ID of this plugin.
	 */
	private $plugin_name;

	/**
	 * The version of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 * @param      string    $plugin_name       The name of this plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version = $version;

	}

	/**
	 * Register the stylesheets for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Conf_Lib_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Conf_Lib_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/conf-lib-admin.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the JavaScript for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Conf_Lib_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Conf_Lib_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/conf-lib-admin.js', array( 'jquery' ), $this->version, false );

	}

	/**
	 * Register the settings page for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function register_settings_page() {
		// Create our settings page as a submenu page.
		add_menu_page(
			'Events',      // page title
			'Events Library',      // menu title
			'manage_options',                        // capability
			'library-plugin',                           // menu_slug
			array( $this, 'display_admin_page' ),
			'dashicons-schedule', // callable function
			10  //position
		);
	}
	
	public function display_admin_page(){
		require_once plugin_dir_path( dirname( __FILE__ ) ) . 'admin/partials/conf-lib-admin-display.php';
	}


}
