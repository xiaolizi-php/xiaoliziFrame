<?php
/**
 * 入口文件
 *1.定义常量
 *2.加载函数库
 *3.启动框架
 *小李php框架
 *xingxuan@xingxuanka.cn
 */
define('XIAOLI',realpath('./'));
define('MODULE','app');
define("CORE",XIAOLI.'/core');
define('APP',XIAOLI.'/app');
define('DEBUG',true);
include "vendor/autoload.php";


if(DEBUG){
	$whoops = new \Whoops\Run;
	$errorTitle = '框架出错了';
	$option=  new \Whoops\Handler\PrettyPageHandler();
	$option->setPageTitle($errorTitle);
	$whoops->pushHandler($option);
	$whoops->register();
	ini_set('display_error','On');
}else{
	ini_set('display_error','Off');
}


include CORE.'/common/function.php';
include CORE.'/xiaoli.php';


spl_autoload_register('\core\xiaoli::load');

\core\xiaoli::run();