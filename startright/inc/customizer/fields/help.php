<?php

// Help fields
$startright_default_options = startright_get_option_defaults();

startright_Kirki::add_field( 'my_config', array(
	'type'		 => 'custom',
	'settings'	 => 'startright_help_pro_cta',
	'label'		 => __( 'Premium Customer Support', 'startright' ),
	'section'	 => 'startright_section_help_help',
	'default'	 => '<div style="padding: 30px;background-color: #333; color: #fff;">' . esc_html__( 'StartRight is provided as is. StartRight Pro provides tons of additional features, including premium customer support. Check it out on https://createandcode.com', 'startright' ) . '</div>',
	'priority'	 => 10,
) );
