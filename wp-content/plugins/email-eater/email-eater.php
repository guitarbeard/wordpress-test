<?php
/**
 * Plugin Name: Email Eater
 * Description: This plugin collects emails.
 * Version: 1.0.0
 * Author: Alex Medina
 * Author URI: http://www.alxdna.net
 * License: MIT
 */
wp_enqueue_style( 'email-eater-css', plugin_dir_url( __FILE__ ) . 'email-eater.css' );
wp_enqueue_script( 'email-eater-ajax', plugin_dir_url( __FILE__ ) . 'email-eater.js', array('jquery'));

wp_localize_script('email-eater-ajax', 'email_eater_ajax', array('ajaxurl' => admin_url('admin-ajax.php' )));
// THE AJAX ADD ACTIONS
add_action( 'wp_ajax_the_ajax_hook', 'the_action_function' );
add_action( 'wp_ajax_nopriv_the_ajax_hook', 'the_action_function' );
// THE FUNCTION
function the_action_function(){
 $email = $_POST['email'];
 $success = true;
 try {
      if (!$success) {
          throw new Exception('email not valid', 500);
      }
      echo json_encode(array(
          'msg' => 'Thanks for signing up!'
      ));
  } catch (Exception $e) {
      echo json_encode(array(
          'error' => array(
              'msg' => $e->getMessage(),
              'code' => $e->getCode()
          ),
      ));
  }
 die();
}

function email_eater_funtion(){
 $the_form = '
  <form id="emailEaterForm" onsubmit="return submit_me()">
    <input id="emailInput" name="email" type="text" placeholder="email" />
    <input name="action" type="hidden" value="the_ajax_hook" />
    <button id="submitEmailButton" type="submit">
      Sign up!
    </button>
  </form>
  <div id="emailEaterMessage" class="hidden"></div>';
 return $the_form;
}

add_shortcode("email_eater", "email_eater_funtion");
