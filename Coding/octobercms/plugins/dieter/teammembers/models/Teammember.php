<?php namespace Dieter\Teammembers\Models;

use Model;

/**
 * Model
 */
class Teammember extends Model
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


	//  public $attachOne = [
   //      'url' => 'System\Models\File'
   //  ];

    /**
     * @var string The database table used by the model.
     */
    public $table = 'dieter_teammembers_teammembers';

}
