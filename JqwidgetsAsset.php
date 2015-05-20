<?php
namespace sansusan\jqwidgets;

use Yii;
use yii\web\AssetBundle;
use yii\web\View;

class JqwidgetsAsset extends AssetBundle
{

    public $sourcePath = '@sansusan/jqwidgets/assets/jqwidgets-ver3.8.0/jqwidgets';
    public $css = [
    ];
    public $js = [
        'jqx-all.js',
    ];
    public $depends = [
        'yii\web\JqueryAsset',
    ];

    /**
     * @inheritdoc
     */
    public function init()
    {
        parent::init();
    }

    /**
     * @param \yii\web\View $view
     * @return static
     */
    public static function register($view)
    {
        return parent::register($view);
    }


}
