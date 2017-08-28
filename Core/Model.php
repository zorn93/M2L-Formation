<?php
/**
 * Created by PhpStorm.
 * User: blackmister
 * Date: 16/05/2017
 * Time: 17:44
 */

namespace Core;


class Model
{
    protected static $pdo = null;

    /**
     * Model constructor.
     */
    public function __construct()
    {
        self::$pdo = Database::connect();
    }


}