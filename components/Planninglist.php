<?php namespace Nielsvandendries\Fieldengineeringtoolkit\Components;

use Cms\Classes\ComponentBase;
use Nielsvandendries\Fieldengineeringtoolkit\Models\Planning;


/**
 * Planninglist Component
 *
 * @link https://docs.octobercms.com/3.x/extend/cms-components.html
 */
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

    public function onRun()
    {
        $this->item = Planning::get()->toArray();
    }
}
