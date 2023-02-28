<?php namespace Nielsvandendries\Fieldengineeringtoolkit\Components;

use Cms\Classes\ComponentBase;
use Nielsvandendries\Fieldengineeringtoolkit\Models\Objects;

class Objectlist extends ComponentBase
{
    public $item;
    public function componentDetails()
    {
        return [
            'name' => 'Objectlist',
            'description' => 'List of all the registred objects'
        ];
    }

    /**
     * @link https://docs.octobercms.com/3.x/element/inspector-types.html
     */
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
        return Objects::get()->lists('archive', 'archive');
    }

    public function onRun()
    {
        // filter voor gearchiveerde item keuze uit 0 en 1
        $this->item = Objects::where('archive', $this->property('archive'))->get()->toArray();
    }
}
