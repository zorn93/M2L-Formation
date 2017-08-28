<?php
/**
 * Created by PhpStorm.
 * User: blackmister
 * Date: 16/05/2017
 * Time: 17:46
 */

namespace Core;


class Controller
{
    protected static $twig;

    /**
     * Controller constructor.
     */
    public function __construct()
    {
        $loader = new \Twig_Loader_Filesystem(dirname(__DIR__).'/View/');
        self::$twig = new \Twig_Environment(
            $loader, array(
                'cache' => false,
                'debug' => true,
            )
        );
        self::$twig->addExtension(new \Twig_Extension_Debug());

    }
}