<?php


function hs21_customize_register($wp_customize) {
$wp_customize->get_setting('blogname')->transport='postMessage';

$wp_customize->selective_refresh->add_partial('blogname', array (
    //'settings'=>array('blogname')
    'selector'=>'.logo',
    'container_inclusive'=>false,
    'render_callback'=>function () {
        bloginfo('name');
    }
));


/*Single post options*/
$wp_customize->add_section('hs21_single_blog_options', array (
    'title'=>esc_html__('Single blog options', 'hs21'),
    'description'=>esc_html__('You can change single blog options from here', 'hs21'),
    'active_callback'=>'hs21_show_single_blog_section'
));
$wp_customize->add_setting('hs21_display_author_info', array (
    'default'=>true,
    'transport'=>'postMessage',
    'sanitize_callback'=>'hs21_sanitize_checkbox'
));
$wp_customize->add_control('hs21_display_author_info', array (
    'type'=>'checkbox',
    'label'=>esc_html('Show author info', 'hs21'),
    'section'=>'hs21_single_blog_options'
));


function hs21_sanitize_checkbox ($checked) {
return (isset($checked) && $checked===true) ? true : false;
}
function hs21_show_single_blog_section () {
global $post;
return is_single() && $post->post_type==='post';
}

/*END OF Single post options*/


/*General settings*/

    $wp_customize->add_section('hs21_general_options', array (
        'title'=>esc_html__('General options', 'hs21'),
        'description'=>esc_html__('You can change general options from here', 'hs21')
    ));

    $wp_customize->add_setting('hs21_accent_color', array (
        'default'=>'#CE171F',
        'transport'=>'postMessage',
        'sanitize_callback'=>'sanitize_hex_color',
    ));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'hs21_accent_color', array (
        'label'=>__('Accent color', 'hs21'),
        'section'=>'hs21_general_options',
    )));

//Portfolio slug
$wp_customize->add_setting('hs21_portfolio_slug', array (
    'default'=>'portfolio',
    'transport'=>'postMessage',
    'sanitize_callback'=>'sanitize_text_field',
));

$wp_customize->add_control('hs21_portfolio_slug', array (
    'type'=>'text',
    'label'=>esc_html__('Portfolio slug', 'hs21'),
    'description'=>esc_html__('Will appear in the archive url', 'hs21'),
    'section'=>'hs21_general_options'
));

    /*Footer settings*/
    $wp_customize->selective_refresh->add_partial('hs21_footer_partial', array (
        'settings'=>array('hs21_site_info', 'hs21_footer_bg', 'hs21_footer_layout' ),
        'selector'=>'#footer',
        'container_inclusive'=>false,
        'render_callback'=>function () {
            get_template_part('template-parts/footer/info');
            get_template_part('template-parts/footer/widgets');
        }
    ));


    $wp_customize->add_section('hs21_footer_options', array (
        'title'=>esc_html__('Footer options', 'hs21'),
        'description'=>esc_html__('You can change footer options from here', 'hs21'),
    ));

$wp_customize->add_setting('hs21_site_info', array (
    'default'=>'',
    'sanitize_callback'=>'hs21_sanitize_site_info',
    'transport'=>'postMessage'
    ));
$wp_customize->add_control('hs21_site_info', array (
    'type'=>'text',
    'label'=>esc_html__('Site info','hs21'),
    'section'=>'hs21_footer_options'

));

$wp_customize->add_setting('hs21_footer_bg', array (
    'default'=>'dark',
    'transport'=>'postMessage',
    'sanitize_callback'=>'hs21_sanitize_footer_bg'
    ));

    $wp_customize->add_control('hs21_footer_bg', array(
        'type'=>'select',
        'label'=>esc_html__('Footer background', 'hs21'),
        'choices'=>array(
            'light'=>esc_html__('Light','hs21'),
            'dark'=>esc_html__('Dark','hs21'),
        ),
        'section'=>'hs21_footer_options'

    ));

  
    //Footer widgets columns

    $wp_customize->add_setting('hs21_footer_layout', array (
        'default'=>'3,3,3,3',
        'transport'=>'postMessage',
        'sanitize_callback'=>'sanitize_text_field',
        'validate_vallback'=>'hs21_validate_footer_layout'
    ));

    $wp_customize->add_control('hs21_footer_layout', array (
        'type'=>'text',
        'label'=>esc_html__('Footer layout','hs21'),
        'section'=>'hs21_footer_options'

    ));
   //End of columns

   //Find me icons
    $wp_customize->add_setting('hs21_facebook_handle', [
        'default'=>''
        
    ]);
 
    $wp_customize->add_control(new WP_Customize_Control(
        $wp_customize,
        'hs21_social_facebook_input',
        array (
            'type'=>'text',
        'label'=>esc_html__('Facebook','hs21'),
        'section'=>'hs21_footer_options',
        'settings'=>'hs21_facebook_handle'
        ))
        );

        $wp_customize->add_setting('hs21_instagram_handle', [
            'default'=>''
        ]);
     
        $wp_customize->add_control(new WP_Customize_Control(
            $wp_customize,
            'hs21_social_instagram_input',
            array (
                'type'=>'text',
            'label'=>esc_html__('Instagram','hs21'),
            'section'=>'hs21_footer_options',
            'settings'=>'hs21_instagram_handle'
            ))
            );
            
            $wp_customize->add_setting('hs21_twitter_handle', [
                'default'=>''
            ]);
         
            $wp_customize->add_control(new WP_Customize_Control(
                $wp_customize,
                'hs21_social_twitter_input',
                array (
                    'type'=>'text',
                'label'=>esc_html__('Twitter','hs21'),
                'section'=>'hs21_footer_options',
                'settings'=>'hs21_twitter_handle'
                ))
                );

                $wp_customize->add_setting('hs21_youtube_handle', [
                    'default'=>''
                ]);
             
                $wp_customize->add_control(new WP_Customize_Control(
                    $wp_customize,
                    'hs21_social_youtube_input',
                    array (
                        'type'=>'text',
                    'label'=>esc_html__('Youtube','hs21'),
                    'section'=>'hs21_footer_options',
                    'settings'=>'hs21_youtube_handle'
                    ))
                    );
            
                    $wp_customize->add_setting('hs21_viber_handle', [
                        'default'=>''
                    ]);
                 
                    $wp_customize->add_control(new WP_Customize_Control(
                        $wp_customize,
                        'hs21_social_viber_input',
                        array (
                            'type'=>'text',
                        'label'=>esc_html__('Viber','hs21'),
                        'section'=>'hs21_footer_options',
                        'settings'=>'hs21_viber_handle'
                        ))
                        );

                        $wp_customize->add_setting('hs21_whatsapp_handle', [
                            'default'=>''
                        ]);
                     
                        $wp_customize->add_control(new WP_Customize_Control(
                            $wp_customize,
                            'hs21_social_whatsapp_input',
                            array (
                                'type'=>'text',
                            'label'=>esc_html__('WhatAspp','hs21'),
                            'section'=>'hs21_footer_options',
                            'settings'=>'hs21_whatsapp_handle'
                            ))
                            );

                            $wp_customize->add_setting('hs21_github_handle', [
                                'default'=>''
                            ]);
                         
                            $wp_customize->add_control(new WP_Customize_Control(
                                $wp_customize,
                                'hs21_social_github_input',
                                array (
                                    'type'=>'text',
                                'label'=>esc_html__('GitHub','hs21'),
                                'section'=>'hs21_footer_options',
                                'settings'=>'hs21_github_handle'
                                ))
                                );

                            
                        
                        $wp_customize->add_setting('hs21_skype_handle', [
                            'default'=>''
                        ]);
                     
                     
                        $wp_customize->add_control(new WP_Customize_Control(
                            $wp_customize,
                            'hs21_skype_input',
                            array (
                                'type'=>'text',
                            'label'=>esc_html__('Skype','hs21'),
                            'section'=>'hs21_footer_options',
                            'settings'=>'hs21_skype_handle'
                            ))
                            );

                            $wp_customize->add_setting('hs21_email_handle', [
                                'default'=>''
                            ]);

                        $wp_customize->add_control(new WP_Customize_Control(
                            $wp_customize,
                            'hs21_social_email_input',
                            array (
                                'type'=>'text',
                            'label'=>esc_html__('Email','hs21'),
                            'section'=>'hs21_footer_options',
                            'settings'=>'hs21_email_handle'
                            ))
                            );

                            $wp_customize->add_setting('hs21_phone_handle', [
                                'default'=>''
                            ]);
                         
                            $wp_customize->add_control(new WP_Customize_Control(
                                $wp_customize,
                                'hs21_social_phone_input',
                                array (
                                    'type'=>'text',
                                'label'=>esc_html__('Phone','hs21'),
                                'section'=>'hs21_footer_options',
                                'settings'=>'hs21_phone_handle'
                                ))
                                );

}
add_action('customize_register', 'hs21_customize_register');

function hs21_validate_footer_layout ($validity, $value) {
 if(!preg_match('/^([1-9]|1[012])(,([1-9]|1[012]))*$/', $value)) {
     $validity->add('invalid_footer_layout', esc_html__( 'Footer layout is invalid', 'hs21' ));
 }
    return $validity;
}

function hs21_sanitize_site_info ($input) {
    $allowed=array(
     'a'=>array(
         'href'=>array(),
         'title'=>array(),
         'target'=>array()
     )
    );
    return wp_kses($input, $allowed);
}
function hs21_sanitize_footer_bg ($input) {
    $valid=array('light', 'dark');
    if (in_array($input, $valid, true)) {
        return $input;
    }
    return 'dark';
}

