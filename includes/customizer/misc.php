<?php

function ju_misc_customizer_section(WP_Customize_Manager $wp_customize){
	//Establish database values
	$wp_customize->add_setting('ju_header_show_search',array(
		'default'   => 'yes'
	));

	$wp_customize->add_setting('ju_header_show_cart',array(
		'default'   => 'yes'
	));

	$wp_customize->add_setting('ju_footer_copyright_text',array(
		'default'   => 'Copyrights &copy; 2017 All Rights Reserved by Greenjocote Inc.'
	));

	$wp_customize->add_setting('ju_footer_tos_page',array(
		'default'   => 0
	));

	$wp_customize->add_setting('ju_footer_privacy_policy_page',array(
		'default'   => 0
	));

	//Section to hold the controls on the frontend
	$wp_customize->add_section('ju_misc_section',array(
		'title' => __('Udemy Misc Settings', 'udemy'),
		'priority'  => 30
	));

	//Actual frontend control
	$wp_customize->add_control(new WP_Customize_Control(
		$wp_customize,
		'ju_header_show_search_input',
		array(
			'label'     => __('Show Search Button in Header','udemy'),
			'section'   =>'ju_misc_section',
			'settings'  =>'ju_header_show_search',
			'type'      => 'checkbox',
			'choices'   => array(
				'yes'   =>  __('Yes','udemy')
			)
		)
	));

	$wp_customize->add_control(new WP_Customize_Control(
		$wp_customize,
		'ju_header_show_cart_input',
		array(
			'label'     => __('Show Cart Button in Header','udemy'),
			'section'   =>'ju_misc_section',
			'settings'  =>'ju_header_show_cart',
			'type'      => 'checkbox',
			'choices'   => array(
				'yes'   =>  __('Yes','udemy')
			)
		)
	));

	$wp_customize->add_control(new WP_Customize_Control(
		$wp_customize,
		'ju_footer_copyright_text_input',
		array(
			'label'     => __('Copyright Text','udemy'),
			'section'   =>'ju_misc_section',
			'settings'  =>'ju_footer_copyright_text',
		)
	));

	$wp_customize->add_control(new WP_Customize_Control(
		$wp_customize,
		'ju_footer_tos_page_input',
		array(
			'label'     => __('Terms of Service Page','udemy'),
			'section'   =>'ju_misc_section',
			'settings'  =>'ju_footer_tos_page',
			'type'      => 'dropdown-pages',
		)
	));

	$wp_customize->add_control(new WP_Customize_Control(
		$wp_customize,
		'ju_footer_privacy_policy_page_input',
		array(
			'label'     => __('Privacy Policy Page','udemy'),
			'section'   =>'ju_misc_section',
			'settings'  =>'ju_footer_privacy_policy_page',
			'type'      => 'dropdown-pages',
		)
	));

}