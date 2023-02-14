<?php namespace NielsVanDenDries\FieldEngineeringToolkit\Models;

use Model;

/**
 * Model
 */
class Projects extends Model
{
    use \October\Rain\Database\Traits\Validation;
    

    /**
     * @var string The database table used by the model.
     */
    public $table = 'nielsvandendries_fieldengineeringtoolkit_projects';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
}
