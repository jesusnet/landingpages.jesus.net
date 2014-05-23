<?php

$cp_config['customize_section']['colors'] = array(
	'active' => true,
	'title' => __cp('Colors', 'customization'),
	'priority' => 35,
	'capability' => 'edit_theme_options',
	'description' => __cp('Allows to customize colors.', 'customization')
);

$cp_config['customize_section']['images'] = array(
	'active' => true,
	'title' => __cp('Logo', 'customization'),
	'priority' => 36,
	'capability' => 'edit_theme_options',
	'description' => __cp('Allows to customize images.', 'customization')
);

$cp_config['customize_section']['ministry_partner'] = array(
	'active' => true,
	'title' => __cp('Ministry partner', 'customization'),
	'priority' => 36,
	'capability' => 'edit_theme_options',
	'description' => __cp('Allows to customize images.', 'customization')
);


$cp_config['customize_settings']['main_color'] = array(
	'active' => true,
	'label' => __cp('Main Color', 'customization'), //Admin-visible name of the control
	'section' => 'colors', //ID of the section this control should render in (can be one of yours, or a WordPress default section)
	'default' => '#e47c24', //Default setting/value to save
	'type' => 'theme_mod', //Is this an 'option' or a 'theme_mod'?
	'capability' => 'edit_theme_options', //Optional. Special permissions for accessing this setting.
	'transport' => 'postMessage', //What triggers a refresh of the setting? 'refresh' or 'postMessage' (instant)?
	'priority' => 15,
	'control' => 'WP_Customize_Color_Control',
	'css' => array(
		'a {color: %s}',
		'.cta {background-color: %s}',
		'.special {background-color: %s}',
		'.footer_menu_bottom li a:hover {color: %s}',
		'footer a:hover {color: %s}',
	)
);


$cp_config['customize_settings']['logo'] = array(
	'active' => true,
	'label' => __cp('Logo', 'customization'), //Admin-visible name of the control
	'section' => 'images', //ID of the section this control should render in (can be one of yours, or a WordPress default section)
	'default' => '', //Default setting/value to save
	'type' => 'theme_mod', //Is this an 'option' or a 'theme_mod'?
	'capability' => 'edit_theme_options', //Optional. Special permissions for accessing this setting.
	'transport' => 'postMessage', //What triggers a refresh of the setting? 'refresh' or 'postMessage' (instant)?
	'priority' => 10,
	'control' => 'WP_Customize_Image_Control',
	'css' => array(
	
	)
);

$cp_config['customize_settings']['logo_footer'] = array(
	'active' => true,
	'label' => __cp('Partner logo', 'customization'), //Admin-visible name of the control
	'section' => 'ministry_partner', //ID of the section this control should render in (can be one of yours, or a WordPress default section)
	'default' => '', //Default setting/value to save
	'type' => 'theme_mod', //Is this an 'option' or a 'theme_mod'?
	'capability' => 'edit_theme_options', //Optional. Special permissions for accessing this setting.
	'transport' => 'postMessage', //What triggers a refresh of the setting? 'refresh' or 'postMessage' (instant)?
	'priority' => 10,
	'control' => 'WP_Customize_Image_Control',
	'css' => array(
	
	)
);

$cp_config['customize_settings']['logo_footer'] = array(
	'active' => true,
	'label' => __cp('Partner logo', 'customization'), //Admin-visible name of the control
	'section' => 'ministry_partner', //ID of the section this control should render in (can be one of yours, or a WordPress default section)
	'default' => '', //Default setting/value to save
	'type' => 'theme_mod', //Is this an 'option' or a 'theme_mod'?
	'capability' => 'edit_theme_options', //Optional. Special permissions for accessing this setting.
	'transport' => 'postMessage', //What triggers a refresh of the setting? 'refresh' or 'postMessage' (instant)?
	'priority' => 10,
	'control' => 'WP_Customize_Image_Control',
	'css' => array(
	
	)
);

$cp_config['customize_settings']['partner_name'] = array(
	'active' => true,
	'label' => __cp('Partner name', 'customization'), //Admin-visible name of the control
	'section' => 'ministry_partner', //ID of the section this control should render in (can be one of yours, or a WordPress default section)
	'default' => 'hello', //Default setting/value to save
	'type' => 'theme_mod', //Is this an 'option' or a 'theme_mod'?
	'capability' => 'edit_theme_options', //Optional. Special permissions for accessing this setting.
	'transport' => 'postMessage', //What triggers a refresh of the setting? 'refresh' or 'postMessage' (instant)?
	'priority' => 15,
	'control' => 'WP_Customize_Control'
);

$cp_config['customize_settings']['partner_link'] = array(
	'active' => true,
	'label' => __cp('Partner website', 'customization'), //Admin-visible name of the control
	'section' => 'ministry_partner', //ID of the section this control should render in (can be one of yours, or a WordPress default section)
	'default' => 'hello', //Default setting/value to save
	'type' => 'theme_mod', //Is this an 'option' or a 'theme_mod'?
	'capability' => 'edit_theme_options', //Optional. Special permissions for accessing this setting.
	'transport' => 'postMessage', //What triggers a refresh of the setting? 'refresh' or 'postMessage' (instant)?
	'priority' => 15,
	'control' => 'WP_Customize_Control'
);
