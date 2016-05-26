<?php 
use dieter\creatiecategorie\models\CreatieCategorie;class Cms5746fcaa07033_2666270931Class extends \Cms\Classes\PageCode
{

public function onStart()
{
	$this['creaties'] = CreatieCategorie::orderBy('title', 'desc')->get();
}
}
