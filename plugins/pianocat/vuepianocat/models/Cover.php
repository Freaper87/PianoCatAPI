<?php namespace Pianocat\Vuepianocat\Models;

use Model;

/**
 * Model
 */
class Cover extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    /* Relations */
    public $attachOne = [
        'sheetpdf' => 'System\Models\File'
    ];

    public $attachMany = [
        'sheetpreview' => 'System\Models\File'
    ];
    /**
     * @var string The database table used by the model.
     */
    public $table = 'pianocat_vuepianocat_covers';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

}
