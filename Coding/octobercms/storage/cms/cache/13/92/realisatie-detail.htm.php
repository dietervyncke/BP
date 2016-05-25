<?php 
use dieter\creatiecategorie\models\Realisatie;class Cms5745839de6d37_1040332702Class extends \Cms\Classes\PageCode
{

public function onStart()
{
	$slug = $this->param('slug');
	$this['realisatie'] = Realisatie::where('slug', $slug)->first();
}
}
