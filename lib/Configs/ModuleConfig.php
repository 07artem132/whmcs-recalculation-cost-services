<?php
/**
 *  Created by PhpStorm.
 *  User: Артём
 *  Date time: 21.08.19 23:23
 *
 */
namespace WHMCS\Module\Addon\RecalculationCostServices\Configs;


class ModuleConfig {
    private static $defaultLanguage = 'russian';
    private static $whmcsRootDir = ROOTDIR;
    private static $moduleName = 'RecalculationCostServices';

    /**
     * @return mixed
     */
    public static function getWhmcsRootDir()
    {
        return self::$whmcsRootDir;
    }

    /**
     * @return string
     */
    public static function getDefaultLanguage()
    {
        return self::$defaultLanguage;
    }

    /**
     * @return string
     */
    public static function getModuleName()
    {
        return self::$moduleName;
    }

    public static function getModuleLink()
    {
        global $module, $customadminpath;

        return '/' . $customadminpath . '/addonmodules.php?module=' . $module;
    }

    public static function getBaseFullPath()
    {
        return self::getWhmcsRootDir() . '/modules/addons/' . self::getModuleName();
    }

    public static function getBaseRelativePath()
    {
        return '/modules/addons/' . self::getModuleName();
    }
}