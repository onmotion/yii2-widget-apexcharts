<?php
/**
 * @copyright Copyright (c) 2018
 * @author Alexandr Kozhevnikov <onmotion1@gmail.com>
 * @package yii2-widget-apexcharts
 */

namespace onmotion\apexcharts;

class ApexchartsWidgetAsset extends \yii\web\AssetBundle
{
    public function init()
    {
        $this->sourcePath = __DIR__ . '/assets/dist';
        parent::init();
    }

    public $publishOptions = [
        'forceCopy' => YII_ENV_DEV //dev
    ];

    public $js = [
        'build.js',
    ];

    public $depends = [
    ];
}