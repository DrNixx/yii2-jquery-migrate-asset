<?php
namespace onix\assets;

use yii\web\AssetBundle;

class JQueryMigrateAsset extends AssetBundle
{
    public $sourcePath = null;

    public $basePath = null;

    public $js = [
        'https://code.jquery.com/jquery-migrate-3.3.2.min.js',
    ];

    public $depends = [
        'yii\web\JqueryAsset',
    ];
}
