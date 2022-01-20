<?php
/**
 * @copyright Copyright (c) 2018
 * @author Alexandr Kozhevnikov <onmotion1@gmail.com>
 * @package yii2-widget-apexcharts
 */

/** @var $this View */
/** @var $id string */

/** @var $chartOptions string */

use yii\helpers\Html;
use yii\web\View;

?>

<?= Html::tag('div', '', ['id' => $id]) ?>

<?php $this->registerJs(<<<JS
$(function () {
    var chart = new ApexCharts(document.querySelector('#$id'), $chartOptions)
    chart.render();
});
JS
);