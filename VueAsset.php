<?php

namespace icy2003\widgets;

use yii\web\AssetBundle;
use yii\web\View;

class VueAsset extends AssetBundle
{
    public $sourcePath = '@bower/vue/dist';
    public $css = [

    ];
    public $js = [
        YII_ENV_DEV ? 'vue.js' : 'vue.min.js',
    ];
    public $jsOptions = [
        'position' => View::POS_HEAD,
    ];
    public $depends = [

    ];
}
