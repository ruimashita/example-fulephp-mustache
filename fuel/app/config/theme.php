<?php

return array(
    'active' => 'default',
    'fallback' => 'default',
    'paths' => array(			// theme files are outside the DOCROOT here
        APPPATH.'views/'.'themes',
    ),
    'assets_folder' => 'themes',	// so this implies <localpath>/public/themes/<themename>...
    'view_ext' => '.mustache',
    'info_file_name' => 'theme.info',
    'require_info_file' => false,
    'info_file_type' => 'php',
    'use_modules' => true,
);
