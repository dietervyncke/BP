<?php 
class Cms5745871c09932_475872910Class extends \Cms\Classes\PageCode
{
public function onStart()
{
	$this['members'] = Db::table('dieter_teammembers_teammembers')->get();
}
}
