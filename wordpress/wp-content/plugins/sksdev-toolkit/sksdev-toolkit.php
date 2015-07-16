<?php
/*
Plugin Name: Sksdev Toolkit
Plugin URI: http://sksphpdev.com/plugin
Description: A specific plugin use in Sksdev Theme to help you register post types.
Version: 1.0.0
Author: Sks Dev
Author URI: http://sksphpdev.com
License: GPLv3

Sksdev Toolkit plugin, Copyright 2014 Sksphpdev.com
Sksdev Toolkit is distributed under the terms of the GNU GPL
*/

/*
 * Plugin domain
 */

/*
 * Register post types
 */
require plugin_dir_path( __FILE__ ) . 'posttype/posttype.php';



       /*************** Contact Form Start***********************************************************/
           if(!function_exists('scf_html')){
            
                    function scf_html() { ?>
                    
                        <div class="simple-contact-form">
                    
                            <form id="scuf">
                    
                                <input id="scfn" class="text" type="text" name="scfn" placeholder="Your Name *" required/>
                    
                                <input id="scfe" class="text" type="text" name="scfe" placeholder="Your Email *" required/>
                    
                                <input id="scfsj" class="text" type="text" name="scfsj" placeholder="Subject"/>
                    
                                <textarea id="scfm" class="textarea" name="scfm" placeholder="Message"></textarea>
                    
                                <input name="action" type="hidden" value="simple_contact_form" />
                    
                                <?php wp_nonce_field( 'scf_html', 'scf_nonce' ); ?>
                    
                                <input id="scfs" class="button mainBtn" type="submit" name="scfs" value="Send Message"/>
                    
                                <img class="scf-ajax" src="http://i61.tinypic.com/11kguf4.gif" alt="Sending Message">
                    
                                <div class="formmessage"><p></p></div>
                    
                            </form>
                    
                        </div>
                    
                    <?php }
            }

            function scf_ajax_simple_contact_form() {
            
                if ( isset( $_POST['scf_nonce'] ) && wp_verify_nonce( $_POST['scf_nonce'], 'scf_html' ) ) {
                    $name = sanitize_text_field($_POST['scfn']);
                    $email = sanitize_email($_POST['scfe']);
                    $subject = sanitize_text_field($_POST['scfsj']);
                    $message = wp_kses_data($_POST['scfm']);
            
                  $headers[] = 'From: ' . $name . ' <' . $email . '>' . "\r\n";
                  $headers[] = 'Content-type: text/html' . "\r\n"; //Enables HTML ContentType. Remove it for Plain Text Messages
                  $to = get_option( 'admin_email' );
            
                    wp_mail( $to, $subject, $message, $headers );
                }
                die(); // Important
            }
            add_action( 'wp_ajax_simple_contact_form', 'scf_ajax_simple_contact_form' );
            add_action( 'wp_ajax_nopriv_simple_contact_form', 'scf_ajax_simple_contact_form' );