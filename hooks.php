<?php
/**
 *  Created by PhpStorm.
 *  User: Артём
 *  Date time: 21.08.19 22:55
 *
 */

use WHMCS\Module\Addon\RecalculationCostServices\Configs\ModuleConfig;

add_hook('AdminAreaFooterOutput', 1, function ($vars) {
    if (strpos($_SERVER['REQUEST_URI'], "configproducts.php") !== false) {
        $jsPath =ModuleConfig::getBaseRelativePath().'/js/main.js?v='.time();
        return '<script type="text/javascript" src="'.$jsPath.'"></script>';
    }
    return '';
});
