<?php

/* ----------- Meta Boxes -------------- */

$cp_config['mb'][] = array(
	'settings' => array(
		'active' => true,
		'id' => 'det_1',
		'name' => 'Details',
		'post_type' => 'page',
		'template' => 'image',
		'context' => 'normal', // normal | advanced | side
		'priority' => 'high', // high | core | default | low
	),
	'fields' => array(
		1 => array(
			'id' => 'txt',
			'name' => 'Txt',
			'type' => 'textarea',
		),
		2 => array(
			'id' => 'cta_text',
			'name' => 'Button text',
			'type' => 'text',
		),
		3 => array(
			'id' => 'cta_link',
			'name' => 'Button link',
			'type' => 'text',
		),
		4 => array(
			'id' => 'image_bg',
			'name' => 'Image',
			'type' => 'upload',
			'multiple' => false,
			'filetype' => 'image', // image, file, video
			'attributes' => array(
				'autofocus' => false,
				'disabled' => false,
				'required' => false,
				'size' => '1',
			),
			'labels' => array(
				'button' => 'Add',
				'button_window' => 'Add image',
				'title_window' => 'Choose image form library or upload'
			)
		)
	)
);

$cp_config['mb'][] = array(
	'settings' => array(
		'active' => true,
		'id' => 'det_2',
		'name' => 'Details',
		'post_type' => 'page',
		'template' => 'single_column_100',
		'context' => 'normal', // normal | advanced | side
		'priority' => 'high', // high | core | default | low
	),
	'fields' => array(
		1 => array(
			'id' => 'title_100',
			'name' => 'Title',
			'type' => 'text',
		),
		2 => array(
			'id' => 'subtitle_100',
			'name' => 'Subtitle',
			'type' => 'text',
		),
	
	)
);

$cp_config['mb'][] = array(
	'settings' => array(
		'active' => true,
		'id' => 'det_3',
		'name' => 'Details',
		'post_type' => 'page',
		'template' => 'single_column_75',
		'context' => 'normal', // normal | advanced | side
		'priority' => 'high', // high | core | default | low
	),
	'fields' => array(
		1 => array(
			'id' => 'title_75',
			'name' => 'Title',
			'type' => 'text',
		),
		2 => array(
			'id' => 'subtitle_75',
			'name' => 'Subtitle',
			'type' => 'text',
		),
	
	)
);

$cp_config['mb'][] = array(
	'settings' => array(
		'active' => true,
		'id' => 'det_4',
		'name' => 'Details',
		'post_type' => 'page',
		'template' => 'single_column_50',
		'context' => 'normal', // normal | advanced | side
		'priority' => 'high', // high | core | default | low
	),
	'fields' => array(
		1 => array(
			'id' => 'title_50',
			'name' => 'Title',
			'type' => 'text',
		),
		2 => array(
			'id' => 'subtitle_50',
			'name' => 'Subtitle',
			'type' => 'text',
		),
	
	)
);

$cp_config['mb'][] = array(
	'settings' => array(
		'active' => true,
		'id' => 'det_5',
		'name' => 'Details',
		'post_type' => 'page',
		'template' => 'two_columns_50_50',
		'context' => 'normal', // normal | advanced | side
		'priority' => 'high', // high | core | default | low
	),
	'fields' => array(
		1 => array(
			'id' => 'title_50_50',
			'name' => 'Title',
			'type' => 'text',
		),
		2 => array(
			'id' => 'subtitle_50_50',
			'name' => 'Subtitle',
			'type' => 'text',
		),
		3 => array(
			'id' => 'column_1_50_50',
			'name' => 'Left column',
			'type' => 'editor',
		),
		4 => array(
			'id' => 'column_2_50_50',
			'name' => 'Right column',
			'type' => 'editor',
		),
	
	)
);

$cp_config['mb'][] = array(
	'settings' => array(
		'active' => true,
		'id' => 'det_6',
		'name' => 'Details',
		'post_type' => 'page',
		'template' => 'two_columns_25_75',
		'context' => 'normal', // normal | advanced | side
		'priority' => 'high', // high | core | default | low
	),
	'fields' => array(
		1 => array(
			'id' => 'title_25_75',
			'name' => 'Title',
			'type' => 'text',
		),
		2 => array(
			'id' => 'subtitle_25_75',
			'name' => 'Subtitle',
			'type' => 'text',
		),
		3 => array(
			'id' => 'column_1_25_75',
			'name' => 'Left column',
			'type' => 'editor',
		),
		4 => array(
			'id' => 'column_2_25_75',
			'name' => 'Right column',
			'type' => 'editor',
		),
	
	)
);

$cp_config['mb'][] = array(
	'settings' => array(
		'active' => true,
		'id' => 'det_6',
		'name' => 'Details',
		'post_type' => 'page',
		'template' => 'three_columns',
		'context' => 'normal', // normal | advanced | side
		'priority' => 'high', // high | core | default | low
	),
	'fields' => array(
		1 => array(
			'id' => 'title_3',
			'name' => 'Title',
			'type' => 'text',
		),
		2 => array(
			'id' => 'subtitle_3',
			'name' => 'Subtitle',
			'type' => 'text',
		),
		3 => array(
			'id' => 'column_1_3',
			'name' => 'Left column',
			'type' => 'editor',
		),
		4 => array(
			'id' => 'column_2_3',
			'name' => 'Center column',
			'type' => 'editor',
		),
		5 => array(
			'id' => 'column_3_3',
			'name' => 'Right column',
			'type' => 'editor',
		),
	
	)
);

$cp_config['mb'][] = array(
	'settings' => array(
		'active' => true,
		'id' => 'det_7',
		'name' => 'Details',
		'post_type' => 'page',
		'template' => 'four_columns',
		'context' => 'normal', // normal | advanced | side
		'priority' => 'high', // high | core | default | low
	),
	'fields' => array(
		1 => array(
			'id' => 'title_4',
			'name' => 'Title',
			'type' => 'text',
		),
		2 => array(
			'id' => 'subtitle_4',
			'name' => 'Subtitle',
			'type' => 'text',
		),
		3 => array(
			'id' => 'column_1_4',
			'name' => 'Column 1',
			'type' => 'editor',
		),
		4 => array(
			'id' => 'column_2_4',
			'name' => 'Column 2',
			'type' => 'editor',
		),
		5 => array(
			'id' => 'column_3_4',
			'name' => 'Column 3',
			'type' => 'editor',
		),
		6 => array(
			'id' => 'column_4_4',
			'name' => 'Column 4',
			'type' => 'editor',
		),
	
	)
);

/* ----------- Templates -------------- */

$cp_config['template']['image'] = array(
	'active' => 'true',
	'name' => 'Image + short text',
	'post_type' => 'page', // optional
	'file' => '01.html'
);

$cp_config['template']['intro'] = array(
	'active' => 'true',
	'name' => 'Introduction',
	'post_type' => 'page', // optional
	'file' => '02.html'
);

$cp_config['template']['single_column_100'] = array(
	'active' => 'true',
	'name' => 'Single column - full width',
	'post_type' => 'page', // optional
	'file' => '03.html'
);

$cp_config['template']['single_column_75'] = array(
	'active' => 'true',
	'name' => 'Single column - 3/4 width',
	'post_type' => 'page', // optional
	'file' => '04.html'
);

$cp_config['template']['single_column_50'] = array(
	'active' => 'true',
	'name' => 'Single column - half width',
	'post_type' => 'page', // optional
	'file' => '05.html'
);

$cp_config['template']['two_columns_50_50'] = array(
	'active' => 'true',
	'name' => 'Two columns - 50/50',
	'post_type' => 'page', // optional
	'file' => '06.html'
);

$cp_config['template']['two_columns_25_75'] = array(
	'active' => 'true',
	'name' => 'Two columns - 25/75',
	'post_type' => 'page', // optional
	'file' => '07.html'
);

$cp_config['template']['three_columns'] = array(
	'active' => 'true',
	'name' => 'Three columns',
	'post_type' => 'page', // optional
	'file' => '08.html'
);

$cp_config['template']['four_columns'] = array(
	'active' => 'true',
	'name' => 'Four columns',
	'post_type' => 'page', // optional
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

