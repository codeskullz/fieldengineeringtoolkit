<?php namespace Nielsvandendries\Fieldengineeringtoolkit\Components;

use Cms\Classes\ComponentBase;
use Nielsvandendries\Fieldengineeringtoolkit\Models\Objects;

class Map extends ComponentBase
{
    public $item;
    public function componentDetails()
    {
        return [
            'name' => 'Map Overview',
            'description' => 'A Map with all your objects'
        ];
    }

    /**
     * @link https://docs.octobercms.com/3.x/element/inspector-types.html
     */
    public function defineProperties()
    {
        return [];
    }

    public function onRun()
    {
        $this->item = Objects::get()->toArray();
        $this->addCss('/plugins/nielsvandendries/fieldengineeringtoolkit/assets/leaflet.css');
        $this->addJs('/plugins/nielsvandendries/fieldengineeringtoolkit/assets/leaflet.js');
    }
}
