<?php 
use dieter\testimonals\models\Testimonial;class Cms5746fcc314164_2142081722Class extends \Cms\Classes\PageCode
{

public function onStart()
{
	$this['testimonials'] = Testimonial::orderBy('name', 'desc')->get();
}
}
