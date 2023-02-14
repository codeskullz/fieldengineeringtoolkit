<?php namespace NielsVanDenDries\FieldEngineeringToolkit\Models;

use Model;

/**
 * Model
 */
class Jobs extends Model
{
    use \October\Rain\Database\Traits\Validation;
    

    /**
     * @var string The database table used by the model.
     */
    public $table = 'nielsvandendries_fieldengineeringtoolkit_jobs';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
}
