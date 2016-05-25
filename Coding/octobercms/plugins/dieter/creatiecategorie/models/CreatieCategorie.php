<?php namespace Dieter\CreatieCategorie\Models;

use Model;

/**
 * Model
 */
class CreatieCategorie extends Model
{
    use \October\Rain\Database\Traits\Validation;

    /*
     * Validation
     */
    public $rules = [
    ];

    /*
     * Disable timestamps by default.
     * Remove this line if timestamps are defined in the database table.
     */
    public $timestamps = false;

    /**
     * @var string The database table used by the model.
     */
    public $table = 'dieter_creatiecategorie_creatiecategorie';

	 public $attachOne = [
 		'cover_image' => ['System\Models\File']
 	];
}
