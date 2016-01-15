<?php

//define('FEED_ONE', "http://connect.phizuu.com/client/5598/lineup/1");

//define('SITE_PATH', "http://".$_SERVER['SERVER_NAME']."");

define('SITE_PATH', "http://".$_SERVER['SERVER_NAME']."/esoftprojecte/mvc/");

//define('SITE_PATH', "http://".dirname($_SERVER['SERVER_NAME'].':'.$_SERVER['SERVER_PORT'].$_SERVER['PHP_SELF']));
echo SITE_PATH;
define('LOCAL_DIR_PATH', dirname(__FILE__));

define('DS', '/');

define ( 'HTTP_PATH', "http://". $_SERVER['HTTP_HOST'] . "/" );

define ( 'TEMPLATE_HOME_PATH', HTTP_PATH . '/Views/' );