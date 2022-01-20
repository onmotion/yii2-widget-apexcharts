<?php
/**
 * @copyright Copyright (c) 2018
 * @author Alexandr Kozhevnikov <onmotion1@gmail.com>
 * @package yii2-widget-apexcharts
 */

namespace onmotion\apexcharts;

use Yii;
use yii\base\Widget;
use yii\db\ActiveRecord;
use yii\helpers\Json;

/**
 *
 * @property ActiveRecord|null $model
 */
class ApexchartsWidget extends Widget
{
    public $id = 'apexcharts-widget';
    public $chartOptions = [];

    public function init()
    {
        Yii::setAlias('@apexchartsWidgetRoot', __DIR__);

        parent::init();
    }

    public function getViewPath()
    {
        return Yii::getAlias('@apexchartsWidgetRoot/views');
    }

    public function beforeRun()
    {
        return parent::beforeRun();
    }


    public function run()
    {
        parent::run();

        ApexchartsWidgetAsset::register($this->getView());

        echo $this->render('index', [
            'id' => $this->getId(),
            'chartOptions' => Json::encode($this->chartOptions),
        ]);
    }


}
