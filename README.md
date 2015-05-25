# yii2-jqwidgets-asset
jqwidgets Asset for Yii2 (http://www.jqwidgets.com/)

## Installation
add
```
"sansusan/yii2-jqwidgets-asset": "dev-master"
```
to the require section of your composer.json file.

## Usage

Add asset bundle to layout or view

```
\sansusan\jqwidgets\JqwidgetsAsset::register($this, ['theme' => 'base', 'globalize' => 'ru_RU'],
    [
        'jqxbuttons',
        'jqxwindow',
        'jqxscrollbar',
        'jqxpanel',
        'jqxmenu',
        'jqxcheckbox',
    ]);
```
