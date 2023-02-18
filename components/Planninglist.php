<?php namespace Nielsvandendries\Fieldengineeringtoolkit\Components;

use Cms\Classes\ComponentBase;
use Nielsvandendries\Fieldengineeringtoolkit\Models\Planning;

class Planninglist extends ComponentBase
{
    public $item;

    public function componentDetails()
    {
        return [
            'name' => 'Planninglist ',
            'description' => 'Well DUH, maybe a list that shows the items in your planning Module??'
        ];
    }

    public function defineProperties()
    {
        return [
            'archive' => [
                'title'             => 'Gearchiveerd',
                'description'       => 'Watch the Simpson',
                'type'              => 'dropdown',
            ]
        ];
    }

    public function getArchiveOptions()
    {
        return Planning::get()->lists('archive', 'archive');
    }

    public function onRun()
    {
        $this->item = Planning::get()->toArray();
        // filter voor archivering
        $this->item = Planning::where('archive', $this->property('archive'))->get()->toArray();
    }
}
