<?php 
 /**************************************************************/
                add_action('init', 'portfolio_register');
                 
                function portfolio_register() {
                 
                    $labels = array(
                        'name' => _x('Portfolio', 'post type general name', 'sksdev'),
                        'singular_name' => _x('Portfolio Item', 'post type singular name', 'sksdev'),
                        'add_new' => _x('Add New', 'portfolio item', 'sksdev'),
                        'add_new_item' => __('Add New Portfolio Item', 'sksdev'),
                        'edit_item' => __('Edit Portfolio Item', 'sksdev'),
                        'new_item' => __('New Portfolio Item', 'sksdev'),
                        'view_item' => __('View Portfolio Item', 'sksdev'),
                        'search_items' => __('Search Portfolio', 'sksdev'),
                        'not_found' =>  __('Nothing found', 'sksdev'),
                        'not_found_in_trash' => __('Nothing found in Trash', 'sksdev'),
                        'parent_item_colon' => ''
                    );
                 
                    $args = array(
                        'labels' => $labels,
                        'public' => true,
                        'publicly_queryable' => true,
                        'show_ui' => true,
                        'query_var' => true,
                        'menu_icon' => get_template_directory_uri() . '/images/portfolio.png',
                        'rewrite' => true,
                        'capability_type' => 'post',
                        'hierarchical' => false,
                        'menu_position' => null,
                        'supports' => array('title','editor','thumbnail')
                      ); 
                 
                    register_post_type( 'portfolio' , $args );
                }

            /**************************************************************/
            add_action('init', 'team_register');
             
            function team_register() {
             
                $labels = array(
                    'name' => _x('Team', 'post type general name', 'sksdev'),
                    'singular_name' => _x('Team Item', 'post type singular name', 'sksdev'),
                    'add_new' => _x('Add New', 'team item', 'sksdev'),
                    'add_new_item' => __('Add New Team Item', 'sksdev'),
                    'edit_item' => __('Edit Team Item', 'sksdev'),
                    'new_item' => __('New Team Item', 'sksdev'),
                    'view_item' => __('View Team Item', 'sksdev'),
                    'search_items' => __('Search Team', 'sksdev'),
                    'not_found' =>  __('Nothing found', 'sksdev'),
                    'not_found_in_trash' => __('Nothing found in Trash', 'sksdev'),
                    'parent_item_colon' => ''
                );
             
                $args = array(
                    'labels' => $labels,
                    'public' => true,
                    'publicly_queryable' => true,
                    'show_ui' => true,
                    'query_var' => true,
                    'menu_icon' => get_template_directory_uri() . '/images/team.png',
                    'rewrite' => true,
                    'capability_type' => 'post',
                    'hierarchical' => false,
                    'menu_position' => null,
                    'supports' => array('title','thumbnail')
                  ); 
             
                register_post_type( 'team' , $args );
            }


				add_action("admin_init", "team_admin_init");
				add_action('save_post', 'save_team_details');
				
				function team_admin_init(){
	                add_meta_box("team-meta", "Team Options", "team_meta", "team", "normal", "low");
				}
				
				function team_meta(){
					
                      global $post;
                     
                      $custom = get_post_custom($post->ID);
                      
					   $designation = '';
					   $facebook = '';
					   $twitter = '';
					    $linkedin = '';
						
					  $designation = $custom["designation"][0];
                      $facebook = $custom["facebook"][0];
                      $twitter = $custom["twitter"][0];
                      $linkedin = $custom["linkedin"][0];
                      ?>
                    
                      <p><label>Designation:</label><br />
                      <input type="text" name="designation" value="<?php echo $designation; ?>"></p>
                      
                      <p><label>Facebook Link:</label><br />
                      <input type="text" name="facebook" value="<?php echo $facebook; ?>"></p>
                      
                      <p><label>Twitter Link:</label><br />
                      <input type="text" name="twitter" value="<?php echo $twitter; ?>"></p>
                      
                      <p><label>Linkedin Link:</label><br />
                      <input type="text" name="linkedin" value="<?php echo $linkedin; ?>"></p>
                    
                      <?php

				}
				
				function save_team_details(){
				
                	if ( defined('DOING_AUTOSAVE') && DOING_AUTOSAVE ) return $post_id;
					
                     global $post;
 
                      update_post_meta($post->ID, "designation", $_POST["designation"]);
                      update_post_meta($post->ID, "facebook", $_POST["facebook"]);
                      update_post_meta($post->ID, "twitter", $_POST["twitter"]);
                      update_post_meta($post->ID, "linkedin", $_POST["linkedin"]);
				}










        /**************************************************************/
        add_action('init', 'skills_register');
         
        function skills_register() {
         
            $labels = array(
                'name' => _x('Skills', 'post type general name', 'sksdev'),
                'singular_name' => _x('Skills Item', 'post type singular name', 'sksdev'),
                'add_new' => _x('Add New', 'skills item', 'sksdev'),
                'add_new_item' => __('Add New Skills Item', 'sksdev'),
                'edit_item' => __('Edit Skills Item', 'sksdev'),
                'new_item' => __('New Skills Item', 'sksdev'),
                'view_item' => __('View Skills Item', 'sksdev'),
                'search_items' => __('Search Skills', 'sksdev'),
                'not_found' =>  __('Nothing found', 'sksdev'),
                'not_found_in_trash' => __('Nothing found in Trash', 'sksdev'),
                'parent_item_colon' => ''
            );
         
            $args = array(
                'labels' => $labels,
                'public' => true,
                'publicly_queryable' => true,
                'show_ui' => true,
                'query_var' => true,
                'menu_icon' => get_template_directory_uri() . '/images/skills.png',
                'rewrite' => true,
                'capability_type' => 'post',
                'hierarchical' => false,
                'menu_position' => null,
                'supports' => array('title')
              ); 
         
            register_post_type( 'skills' , $args );
        }
        
        
        add_action("admin_init", "skills_admin_init");
        add_action('save_post', 'save_skills_details');
         
        function skills_admin_init(){
         
          add_meta_box("skills-meta", "Skills Options", "skills_meta", "skills", "normal", "low");
        }
         
        function skills_meta() {
          global $post;
          $custom = get_post_custom($post->ID);
          $digit_number = '';
		  $digit_number = $custom["digit_number"][0];
          ?>
          <p><label>Enter Digit number 1 to 100:</label><br />
          <input type="text" name="digit_number" value="<?php echo $digit_number; ?>"></p>
          <?php
        }
        
        
        function save_skills_details(){
          global $post;
         
          update_post_meta($post->ID, "digit_number", $_POST["digit_number"]);
         
        }
		
		
		