<?php

use WHMCS\Service\Service;

/**
 *  Created by PhpStorm.
 *  User: Артём
 *  Date time: 21.08.19 22:58
 *
 */

function RecalculationCostServices_config()
{
    $config = [
        "name" => "Перерасчет стоимости услуг при изменении продукта",
        "description" => "На списке продуктов добавляется кнопка перерасчета стоимости всех услуг для клиентов",
        "version" => "1",
        "author" => "service-voice",
        "fields" => [

        ]
    ];

    return $config;
}

function RecalculationCostServices_clientarea($vars)
{
    global $customadminpath;

    if (!function_exists("recalcRecurringProductPrice")) {
        require(ROOTDIR . "/includes/clientfunctions.php");
    }

    foreach (Service::where('packageid', '=', $_GET['pid'])->get() as $item) {
        $item->amount = recalcRecurringProductPrice($item->id);
        $item->save();
    }

    redir('', $customadminpath . '/configproducts.php');
}