<?php
/* packages/parser/config/parser.phpをoverride */

return array(

    // ------------------------------------------------------------------------
    // Register extensions to their parsers, either classname or array config
    // ------------------------------------------------------------------------
    'extensions' => array(
        'mustache'  => 'View\\Mustache', // View_Mustacheを拡張したviewクラスを使う
    ),

    // MUSTACHE ( https://github.com/bobthecow/mustache.php )
    // ------------------------------------------------------------------------
    'View_Mustache' => array(
        'auto_encode' => true,
        'environment' => array(
            'cache_dir' => APPPATH.'cache'.DS.'mustache'.DS,
            'partials'  => array(),
            'helpers'   => array(),
            'charset'   => 'UTF-8',
        ),
    ),
);
