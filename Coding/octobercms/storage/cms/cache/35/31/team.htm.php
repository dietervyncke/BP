<?php 
class Cms5746fca6c8108_4173144134Class extends \Cms\Classes\PageCode
{
public function onStart()
{
	$this['members'] = Db::table('dieter_teammembers_teammembers')->get();
}
}
