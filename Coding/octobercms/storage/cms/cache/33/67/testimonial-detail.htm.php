<?php 
use dieter\testimonals\models\Testimonial;class Cms5745b5550a63f_4270475447Class extends \Cms\Classes\PageCode
{

public function onStart()
{
	$slug = $this->param('slug');
	$this['testimonial'] = Testimonial::where('slug', $slug)->first();
}
}
