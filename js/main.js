/*
 *  Created by PhpStorm.
 *  User: Артём
 *  Date time: 21.08.19 23:20
 *
 */

window.onload = function () {
    $("table.datatable.sort-groups.no-margin > tbody:nth-child(2n+1) > tr > td:nth-child(3n+1)").attr('colspan', 7);
    $("table.datatable.no-margin > tbody > tr > th:last").after('<th style="width: 2%;"></th>');
    $("table.datatable.no-margin > tbody > tr > th:eq(3)").css('width', '15%');

    $("table.datatable.sort-groups.no-margin > tbody[id^=tbodyGroupProduct] > tr > td:nth-child(6n)").each(function () {
        var productInfo = $(this).parent().data('id').split('|');
        var pid = productInfo[productInfo.length-1];

        console.log(pid);

        $(this).after('<td style="width: 2%;">' +
            '<a href="/?m=RecalculationCostServices&pid='+pid+'" onclick="return confirm(\'Обновить цену для всех услуг?\')"><i class="fas fa-dollar-sign" style="cursor:pointer;color:green"></i></a>'
            + '</td>');
    });

};
