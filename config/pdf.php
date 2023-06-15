<?php

return [
	'mode'                  => 'utf-8',
	'format'                => 'A3',
	'author'                => '',
	'subject'               => '',
	'keywords'              => '',
	'creator'               => 'Laravel Pdf',
	'display_mode'          => 'fullpage',
	'tempDir'               => base_path('../temp/'),
	'pdf_a'                 => false,
	'pdf_a_auto'            => false,
	'icc_profile_path'      => '',
    'font_path' => base_path('resources/fonts/'),
    'font_data' => [
        'samim' => [
            'R'  => 'IRANSansWeb.ttf',
            'B' =>  'IRANSansWeb.ttf', //optional
		   'useOTL' => 0xFF,
		   'useKashida' => 75,
		],
	]
];
