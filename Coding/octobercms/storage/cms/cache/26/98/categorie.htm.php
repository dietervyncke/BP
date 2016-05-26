<?php 
use dieter\creatiecategorie\models\CreatieCategorie;use dieter\creatiecategorie\models\Realisatie;class Cms5746fcab5be6f_3643391102Class extends \Cms\Classes\PageCode
{


public function onStart()
{
	$slug = $this->param('slug');
	$this['categorie'] = CreatieCategorie::where('slug', $slug)->first();
	$this['realisaties'] = Realisatie::where('fk_categorie_id', $this['categorie']->id)->get();
}
}
