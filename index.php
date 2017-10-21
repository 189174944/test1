<?php
/**
 * Created by PhpStorm.
 * User: interface
 * Date: 2017/10/21
 * Time: 上午11:31
 */

require_once 'vendor/autoload.php';

$monolog = new Monolog\Logger('name');
$monolog->addInfo("asdasda");

$t = new App\Test();
$t->say();