<?php

/* ----------- Meta Boxes -------------- */

$cp_config['mb'][] = array(
	'settings' => array(
		'active' => true,
		'id' => 'det_1',
		'name' => 'Details',
		'post_type' => 'page',
		'template' => 'image',
		'context' => 'normal', 
		'priority' => 'high', 
	),
	'fields' => array(
		1 => array(
			'id' => 'txt',
			'name' => __cp('Text', 'general'),
			'type' => 'textarea',
		),
		2 => array(
			'id' => 'cta_text',
			'name' => __cp('Button', 'general'),
			'type' => 'text',
		),
		3 => array(
			'id' => 'cta_link',
			'name' => __cp('Link', 'general'),
			'type' => 'text',
		),
		4 => array(
			'id' => 'image_bg',
			'name' => __cp('Image', 'general'),
			'type' => 'upload',
			'multiple' => false,
			'filetype' => 'image', 
			'attributes' => array(
				'autofocus' => false,
				'disabled' => false,
				'required' => false,
				'size' => '1',
			),
			'labels' => array(
				'button' => __cp('Add', 'general'),
				'button_window' => __cp('Add image', 'general'),
				'title_window' => __cp('Choose image form library or upload', 'general')
			)
		)
	)
);

$cp_config['mb'][] = array(
	'settings' => array(
		'active' => true,
		'id' => 'det_1q',
		'name' => 'Details',
		'post_type' => 'page',
		'template' => 'intro',
		'context' => 'normal', 
		'priority' => 'high', 
	),
	'fields' => array(
		1 => array(
			'id' => 'special_txt',
			'name' => __cp('Text', 'general'),
			'type' => 'textarea',
		),
		2 => array(
			'id' => 'special_cta_text',
			'name' => __cp('Button', 'general'),
			'type' => 'text',
		),
		3 => array(
			'id' => 'special_cta_link',
			'name' => __cp('Link', 'general'),
			'type' => 'text',
		)
	)
);

$cp_config['mb'][] = array(
	'settings' => array(
		'active' => true,
		'id' => 'det_2',
		'name' => __cp('Details', 'general'),
		'post_type' => 'page',
		'template' => 'single_column_100',
		'context' => 'normal', 
		'priority' => 'high', 
	),
	'fields' => array(
		1 => array(
			'id' => 'title_100',
			'name' => __cp('Title', 'general'),
			'type' => 'text',
		),
		2 => array(
			'id' => 'subtitle_100',
			'name' => __cp('Subtitle', 'general'),
			'type' => 'text',
		),
		3 => array(
			'id' => 'text_100',
			'name' => __cp('Text', 'general'),
			'type' => 'editor',
		),
	
	)
);

$cp_config['mb'][] = array(
	'settings' => array(
		'active' => true,
		'id' => 'det_3',
		'name' => __cp('Details', 'general'),
		'post_type' => 'page',
		'template' => 'single_column_75',
		'context' => 'normal', 
		'priority' => 'high', 
	),
	'fields' => array(
		1 => array(
			'id' => 'title_75',
			'name' =>  __cp('Title', 'general'),
			'type' => 'text',
		),
		2 => array(
			'id' => 'subtitle_75',
			'name' => __cp('Subtitle', 'general'),
			'type' => 'text',
		),
		3 => array(
			'id' => 'text_75',
			'name' => __cp('Text', 'general'),
			'type' => 'editor',
		),
	
	)
);

$cp_config['mb'][] = array(
	'settings' => array(
		'active' => true,
		'id' => 'det_4',
		'name' => __cp('Details', 'general'),
		'post_type' => 'page',
		'template' => 'single_column_50',
		'context' => 'normal', 
		'priority' => 'high', 
	),
	'fields' => array(
		1 => array(
			'id' => 'title_50',
			'name' =>  __cp('Title', 'general'),
			'type' => 'text',
		),
		2 => array(
			'id' => 'subtitle_50',
			'name' => __cp('Subtitle', 'general'),
			'type' => 'text',
		),
		3 => array(
			'id' => 'text_50',
			'name' => __cp('Text', 'general'),
			'type' => 'editor',
		),
	
	)
);

$cp_config['mb'][] = array(
	'settings' => array(
		'active' => true,
		'id' => 'det_5',
		'name' => __cp('Details', 'general'),
		'post_type' => 'page',
		'template' => 'two_columns_50_50',
		'context' => 'normal', 
		'priority' => 'high', 
	),
	'fields' => array(
		1 => array(
			'id' => 'title_50_50',
			'name' =>  __cp('Title', 'general'),
			'type' => 'text',
		),
		2 => array(
			'id' => 'subtitle_50_50',
			'name' => __cp('Subtitle', 'general'),
			'type' => 'text',
		),
		3 => array(
			'id' => 'column_1_50_50',
			'name' => __cp('Left column', 'general'),
			'type' => 'editor',
		),
		4 => array(
			'id' => 'column_2_50_50',
			'name' => __cp('Right column', 'general'),
			'type' => 'editor',
		),
	
	)
);

$cp_config['mb'][] = array(
	'settings' => array(
		'active' => true,
		'id' => 'det_6',
		'name' => __cp('Details', 'general'),
		'post_type' => 'page',
		'template' => 'two_columns_25_75',
		'context' => 'normal', 
		'priority' => 'high', 
	),
	'fields' => array(
		1 => array(
			'id' => 'title_25_75',
			'name' =>  __cp('Title', 'general'),
			'type' => 'text',
		),
		2 => array(
			'id' => 'subtitle_25_75',
			'name' => __cp('Subtitle', 'general'),
			'type' => 'text',
		),
		3 => array(
			'id' => 'column_1_25_75',
			'name' => __cp('Left column', 'general'),
			'type' => 'editor',
		),
		4 => array(
			'id' => 'column_2_25_75',
			'name' => __cp('Right column', 'general'),
			'type' => 'editor',
		),
	
	)
);

$cp_config['mb'][] = array(
	'settings' => array(
		'active' => true,
		'id' => 'det_6',
		'name' => __cp('Details', 'general'),
		'post_type' => 'page',
		'template' => 'three_columns',
		'context' => 'normal', 
		'priority' => 'high', 
	),
	'fields' => array(
		1 => array(
			'id' => 'title_3',
			'name' =>  __cp('Title', 'general'),
			'type' => 'text',
		),
		2 => array(
			'id' => 'subtitle_3',
			'name' => __cp('Subtitle', 'general'),
			'type' => 'text',
		),
		3 => array(
			'id' => 'column_1_3',
			'name' => __cp('Left column', 'general'),
			'type' => 'editor',
		),
		4 => array(
			'id' => 'column_2_3',
			'name' => __cp('Middle column', 'general'),
			'type' => 'editor',
		),
		5 => array(
			'id' => 'column_3_3',
			'name' => __cp('Right column', 'general'),
			'type' => 'editor',
		),
	
	)
);

$cp_config['mb'][] = array(
	'settings' => array(
		'active' => true,
		'id' => 'det_7',
		'name' => __cp('Details', 'general'),
		'post_type' => 'page',
		'template' => 'four_columns',
		'context' => 'normal', 
		'priority' => 'high', 
	),
	'fields' => array(
		1 => array(
			'id' => 'title_4',
			'name' =>  __cp('Title', 'general'),
			'type' => 'text',
		),
		2 => array(
			'id' => 'subtitle_4',
			'name' => __cp('Subtitle', 'general'),
			'type' => 'text',
		),
		3 => array(
			'id' => 'column_1_4',
			'name' => __cp('Column 1', 'general'),
			'type' => 'editor',
		),
		4 => array(
			'id' => 'column_2_4',
			'name' => __cp('Column 2', 'general'),
			'type' => 'editor',
		),
		5 => array(
			'id' => 'column_3_4',
			'name' => __cp('Column 3', 'general'),
			'type' => 'editor',
		),
		6 => array(
			'id' => 'column_4_4',
			'name' => __cp('Column 4', 'general'),
			'type' => 'editor',
		),
	
	)
);

/* ----------- Templates -------------- */

$cp_config['template']['image'] = array(
	'active' => 'true',
	'name' => __cp('Image + short text', 'general'),
	'post_type' => 'page', 
	'file' => '01.html'
);

$cp_config['template']['intro'] = array(
	'active' => 'true',
	'name' => __cp('Introduction', 'general'),
	'post_type' => 'page', 
	'file' => '02.html'
);

$cp_config['template']['single_column_100'] = array(
	'active' => 'true',
	'name' => __cp('Single column - full width', 'general'),
	'post_type' => 'page', 
	'file' => '03.html'
);

$cp_config['template']['single_column_75'] = array(
	'active' => 'true',
	'name' => __cp('Single column - 3/4 width', 'general'),
	'post_type' => 'page', 
	'file' => '04.html'
);

$cp_config['template']['single_column_50'] = array(
	'active' => 'true',
	'name' => __cp('Single column - half width', 'general'),
	'post_type' => 'page', 
	'file' => '05.html'
);

$cp_config['template']['two_columns_50_50'] = array(
	'active' => 'true',
	'name' => __cp('Two columns - 50/50', 'general'),
	'post_type' => 'page', 
	'file' => '06.html'
);

$cp_config['template']['two_columns_25_75'] = array(
	'active' => 'true',
	'name' => __cp('Two columns - 25/75', 'general'),
	'post_type' => 'page', 
	'file' => '07.html'
);

$cp_config['template']['three_columns'] = array(
	'active' => 'true',
	'name' => __cp('Three columns', 'general'),
	'post_type' => 'page',
	'file' => '08.html'
);

$cp_config['template']['four_columns'] = array(
	'active' => 'true',
	'name' => __cp('Four columns', 'general'),
	'post_type' => 'page', 
	'file' => '08.html'
);


/* ----------- Loops -------------- */

$cp_config['loop'][] = array(
	'name' => 'sections',
	'template' => 'loop_sections.html',
	'args' => array(
		'post_type' => 'page',
		'posts_per_page' => -1,
		'orderby' => 'menu_order',
		'order' => 'ASC',
		'post_parent' => 2
	)
);

