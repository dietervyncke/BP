<?php 
use dieter\creatiecategorie\models\Realisatie;class Cms5746fcb4dc79c_2433305893Class extends \Cms\Classes\PageCode
{

public function onStart()
{
	$slug = $this->param('slug');
	$this['realisatie'] = Realisatie::where('slug', $slug)->first();
}
}
