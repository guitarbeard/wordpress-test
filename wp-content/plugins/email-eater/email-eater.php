<?php
/**
 * Plugin Name: Email Eater
 * Description: This plugin collects emails.
 * Version: 1.0.0
 * Author: Alex Medina
 * Author URI: http://www.alxdna.net
 * License: MIT
 */

 // enqueue and localise scripts
 wp_enqueue_script( 'my-ajax-handle', plugin_dir_url( __FILE__ ) . 'js/email-eater.js', array( 'jquery' ) );
 wp_localize_script( 'my-ajax-handle', 'the_ajax_script', array( 'ajaxurl' => admin_url( 'admin-ajax.php' ) ) );
 // THE AJAX ADD ACTIONS
 add_action( 'wp_ajax_the_ajax_hook', 'the_action_function' );
 add_action( 'wp_ajax_nopriv_the_ajax_hook', 'the_action_function' ); // need this to serve non logged in users
 // THE FUNCTION
 function the_action_function(){
   /* this area is very simple but being serverside it affords the possibility of retreiving data from the server and passing it back to the javascript function */
   $name = $_POST['email'];
   echo"Hello World, " . $name;// this is passed back to the javascript function
   die();// wordpress may print out a spurious zero without this - can be particularly bad if using json
 }
 function email_eater_funtion(){
   $the_form = '
    <form id="emailEaterForm">
      <input id="emailInput" name="email" type="text" placeholder="email" />
      <input name="action" type="hidden" value="the_ajax_hook" />
      <button id="submitEmailButton" type="button" onClick="submit_me();">
        Sign up
      </button>
    </form>
    <div id="response_area">
      This is where we\'ll get the response
    </div>';
   return $the_form;
 }
 add_shortcode("email_eater", "email_eater_funtion");
 ?>
