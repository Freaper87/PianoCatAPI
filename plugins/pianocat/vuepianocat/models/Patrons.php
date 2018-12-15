<?php namespace Pianocat\Vuepianocat\Models;

use Model;

/**
 * Model
 */
class Patrons extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    /*
     * Disable timestamps by default.
     * Remove this line if timestamps are defined in the database table.
     */
    public $timestamps = false;


    /**
     * @var string The database table used by the model.
     */
    public $table = 'pianocat_vuepianocat_patrons';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
}
