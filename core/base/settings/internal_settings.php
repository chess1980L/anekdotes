<?php

defined('VG_ACCESS') or die('Access denied');

const TEMPLATE = 'templates/default/';


const COOKIE_VERSION = '1.0.0';
const CRYOT_KEY = '7890';
const COOKIE_TIME = 60;
const BLOCK_TIME = 3;

const LIMIT = 20;
const QTY = 8;
const QTY_LINKS = 3;


use core\base\exceptions\RouteException;

function autoloadMainClasses($class_name)
{

    $class_name = str_replace('\\', '/', $class_name);

    if (!@include_once $class_name . '.php') {

        throw new RouteException('Не верное имя файла для подключения -' . $class_name);


    }

}

spl_autoload_register('autoloadMainClasses');