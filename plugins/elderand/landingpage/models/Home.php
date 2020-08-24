<?php namespace Elderand\LandingPage\Models;

use Model;

/**
 * Model
 */
class Home extends Model
{
    public $implement = ['RainLab.Translate.Behaviors.TranslatableModel'];
    public $translatable = [
        'highlight_title',
        'highlight_cta',
        'highlight_description',
        'highlight_video',
        'features_title',
        'features_cta',
        'features_items',
        'galery_title'
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
    public $table = 'elderand_landingpage_home';


    protected $jsonable = ['features_items'];

    // /* Relations */
    // public $attachOne = [
    //     'image' => 'System\Models\File'
    // ];

    public $attachMany = [
        'gallery' => 'System\Models\File'
    ];

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
}
