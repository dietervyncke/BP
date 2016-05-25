<?php 
use dieter\creatiecategorie\models\CreatieCategorie;class Cms5745848028a7e_3505193296Class extends \Cms\Classes\PageCode
{

public function onStart()
{
	$this['creaties'] = CreatieCategorie::orderBy('title', 'desc')->get();
}
}
