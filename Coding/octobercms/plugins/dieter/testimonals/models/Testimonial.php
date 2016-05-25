<?php namespace Dieter\Testimonals\Models;

use Model;
use System\Models\File;

/**
* Model
*/
class Testimonial extends Model
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
	public $table = 'dieter_testimonals_testimonials';

	public $attachMany = [
		'project_image_url' => ['System\Models\File']
	];
}
