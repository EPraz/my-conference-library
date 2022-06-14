<?php

/**
 * The public-facing functionality of the plugin.
 *
 * @link       webdevteam
 * @since      1.0.0
 *
 * @package    Conf_Lib
 * @subpackage Conf_Lib/public
 */

/**
 * The public-facing functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the public-facing stylesheet and JavaScript.
 *
 * @package    Conf_Lib
 * @subpackage Conf_Lib/public
 * @author     Web Dev Team <rbarria@liveandinvestoverseas.com>
 */
class Conf_Lib_Public {

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
	 * @param      string    $plugin_name       The name of the plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version = $version;

	}

	/**
	 * Register the stylesheets for the public-facing side of the site.
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

		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/conf-lib-public.css', array(), $this->version, 'all' );
		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/conf-lib-card.css', array(), $this->version, 'all' );
		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/conf-lib-container.css', array(), $this->version, 'all' );
		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/conf-lib-my_library.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the JavaScript for the public-facing side of the site.
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

		wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/conf-lib-public.js', array( 'jquery' ), $this->version, false );

	}

	public function register_shortcodes(){
		add_shortcode( 'my-profile-dashboard', array( $this, 'display_dashboard') );
		
	}

	public function display_dashboard(){
		require_once plugin_dir_path( dirname( __FILE__ ) ) . 'public/partials/conf-lib-public-display-dashboard.php';
	}

}
