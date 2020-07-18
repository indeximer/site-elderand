<?php namespace Elderand\LandingPage\Models;

use Model;

/**
 * Model
 */
class Menu extends Model
{
    public $implement = ['RainLab.Translate.Behaviors.TranslatableModel'];
    public $translatable = [
        'title',
        'link'
    ];

    use \October\Rain\Database\Traits\Validation;
    
    /*
     * Disable timestamps by default.
     * Remove this line if timestamps are defined in the database table.
     */
    public $timestamps = false;


    /**
     * @var string The database table used by the model.
     */
    public $table = 'elderand_landingpage_menu';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
}
