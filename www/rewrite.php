<?php

# set_time_limit(1);

global $_CONST;
$_CONST = array();
$_CONST['ROOT_DIR'] = dirname(__DIR__);

$config = include $_CONST['ROOT_DIR'] . '/etc/config.php';

$_CONST['QUERY_SPEC'] = isset($_GET['!']) ? explode(',', $_GET['!']) : array();
defined('QUERY_APP') or define('QUERY_APP', isset($_GET['@']) ? $_GET['@'] : $config['app_default']);

if (in_array('phpinfo', $_CONST['QUERY_SPEC'])) {
    phpinfo();
}

$vhosts = include $_CONST['ROOT_DIR'] . '/etc/vhosts.php';
include_once $vhosts[QUERY_APP];
