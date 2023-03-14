<?php namespace NielsVanDenDries\FieldEngineeringToolkit;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function registerComponents()
    {
        return [
            '\Nielsvandendries\Fieldengineeringtoolkit\Components\Planninglist' => 'Planninglist',
            '\Nielsvandendries\Fieldengineeringtoolkit\Components\Objectlist' => 'Objectlist',
            '\Nielsvandendries\Fieldengineeringtoolkit\Components\Mapoverview' => 'Mapoverview'
        ];
    }

    public function registerSettings()
    {
    }

    {
        public $require = ['inetis.listswitch'];
    }
}
