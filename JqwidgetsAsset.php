<?php
namespace sansusan\jqwidgets;

use Yii;
use yii\web\AssetBundle;
use yii\web\View;

class JqwidgetsAsset extends AssetBundle
{

    public $sourcePath = '@sansusan/jqwidgets/assets/jqwidgets-ver3.9.0/jqwidgets';
    public $css = [
    ];
    public $js = [
        'jqxcore.js',
    ];
    public $depends = [
        'yii\web\JqueryAsset',
    ];

    public static $theme = 'base';

    public static $globalize = 'ru-RU';

    public static $extensions = [];

    /**
     * @inheritdoc
     */
    public function init()
    {
        $this->applyTheme();
        $this->applyGlobalize();
        $this->applyExtensions();
        parent::init();
    }

    protected function applyTheme()
    {
        if (!empty(self::$theme) && is_string(self::$theme))
            $theme = self::$theme;
        else
            $theme = 'base';

        if ($theme != 'base') array_unshift($this->css, strtr('styles/jqx.{theme}.css', ['{theme}' => $theme]));
        array_unshift($this->css, 'styles/jqx.base.css');
    }

    protected function applyGlobalize()
    {
        if (!empty(self::$globalize) && is_string(self::$globalize))
            $globalize = self::$globalize;
        else
            $globalize = 'ru-RU';

        array_push($this->js, 'globalization/globalize.js');
        array_push($this->js, strtr('globalization/globalize.culture.{globalize}.js', ['{globalize}' => $globalize]));
    }

    protected function applyExtensions()
    {
        foreach (self::$extensions as $ex) {
            if (is_string($ex)) {
                array_push($this->js, strtr('{ex}.js', ['{ex}' => $ex]));
            }
        }
    }

    /**
     * @param \yii\web\View $view
     * @param array $options
     * @param array $extensions
     * @return static
     */
    public static function register($view, $options = [], $extensions = [])
    {
        if (is_array($options)) {
            if (array_key_exists('theme', $options)) self::$theme = $options['theme'];
            if (array_key_exists('globalize', $options)) self::$globalize = $options['globalize'];
        }

        if (is_array($extensions) && !empty($extensions)) self::$extensions = $extensions;
        return parent::register($view);
    }

}
