<?php

namespace Parser\View;

use Mustache_Engine;
use Mustache_Loader_FilesystemLoader;

class Mustache extends \Parser\View_Mustache
{

    /**
     * Returns the Parser lib object
     *
     * @return  Mustache_Engine
     */
    public static function parser()
    {
        if (!empty(static::$_parser)) {
            return static::$_parser;
        }

        $parser = parent::parser();

        // partilas_loaderを設定
        //$partials_loader = new Mustache_Loader_FilesystemLoader(APPPATH.'views/partials');
        //$parser->setPartialsLoader($partials_loader);

        static::$_parser = $parser;
        return static::$_parser;
    }
}
