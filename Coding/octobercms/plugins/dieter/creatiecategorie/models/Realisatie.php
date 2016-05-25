<?php namespace Dieter\CreatieCategorie\Models;

use Model;

/**
 * Model
 */
class Realisatie extends Model
{
    use \October\Rain\Database\Traits\Validation;

    /*
     * Validation
     */
    public $rules = [
    ];

	 //relationships
	 public $belongsTo  = [
         'categorie' => ['dieter\CreatieCategorie\Models\CreatieCategorie', 'key' => 'fk_categorie_id']
    ];

    /*
     * Disable timestamps by default.
     * Remove this line if timestamps are defined in the database table.
     */
    public $timestamps = false;

    /**
     * @var string The database table used by the model.
     */
    public $table = 'dieter_creatiecategorie_realisatie';

	 public $attachMany = [
	   'realisation_images' => ['System\Models\File']
   ];


	public function getCategorieOptions($keyValue = null)
	{
		 return \dieter\creatiecategorie\models\creatiecategorie::lists('title', 'id');
	}
}
