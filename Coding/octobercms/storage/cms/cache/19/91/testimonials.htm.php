<?php 
use dieter\testimonals\models\Testimonial;class Cms574586fb92949_3808649991Class extends \Cms\Classes\PageCode
{

public function onStart()
{
	$this['testimonials'] = Testimonial::orderBy('name', 'desc')->get();
}
}
