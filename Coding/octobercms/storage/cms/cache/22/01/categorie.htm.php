<?php 
use dieter\creatiecategorie\models\CreatieCategorie;use dieter\creatiecategorie\models\Realisatie;class Cms57458481b6e94_294303863Class extends \Cms\Classes\PageCode
{


public function onStart()
{
	$slug = $this->param('slug');
	$this['categorie'] = CreatieCategorie::where('slug', $slug)->first();
	$this['realisaties'] = Realisatie::where('fk_categorie_id', $this['categorie']->id)->get();
}
}
