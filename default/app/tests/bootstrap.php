<?php
/**
 * KumbiaPHP web & app Framework
 *
 * LICENSE
 *
 * This source file is subject to the new BSD license that is bundled
 * with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://wiki.kumbiaphp.com/Licencia
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@kumbiaphp.com so we can send you a copy immediately.
 *
 * @category   Kumbia
 * @package    Session
 * @copyright  Copyright (c) 2005 - 2018 Kumbia Team (http://www.kumbiaphp.com)
 * @license    http://wiki.kumbiaphp.com/Licencia     New BSD License
 */

if (session_status() !== PHP_SESSION_ACTIVE) {
    session_start();
}

defined('CORE_PATH') || define('CORE_PATH', dirname(dirname(dirname(__DIR__))) . '/core/');
defined('APP_PATH') || define('APP_PATH', dirname(__DIR__) . '/');
defined('PUBLIC_PATH') || define('PUBLIC_PATH', 'http://127.0.0.1/');

require_once CORE_PATH.'kumbia/autoload.php';
require_once APP_PATH.'../../vendor/autoload.php';

spl_autoload_register('kumbia_autoload_helper', true, true);