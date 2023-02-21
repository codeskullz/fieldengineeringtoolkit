<?php namespace Nielsvandendries\Fieldengineeringtoolkit\Components;

use Cms\Classes\ComponentBase;
use Nielsvandendries\Fieldengineeringtoolkit\Models\Planning;

class Planninglist extends ComponentBase
{
    public $item;

    // Functie die de labels maakt
    public function componentDetails()
    {
        return [
            'name' => 'Planninglist ',
            'description' => 'Well DUH, maybe a list that shows the items in your planning Module??'
        ];
    }

    // Functie die een drowdown weergeeft in de editor mode met de filter Archive
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

    // Functie de de gegevens ophaalt uit de database
    public function getArchiveOptions()
    {
        return Planning::get()->lists('archive', 'archive');
    }

    public function onRun()
    {
        // filter voor gearchiveerde item keuze uit 0 en 1
        $this->item = Planning::where('archive', $this->property('archive'))->get()->toArray();
    }
}
