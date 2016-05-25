<?php 
class Cms5745b53414ae5_3474522440Class extends \Cms\Classes\PageCode
{
public function onStart()
{
	$this['first_newsItem'] = Db::table('dieter_news_newsitem')->first();
	$this['newsItems'] = Db::table('dieter_news_newsitem')->skip(1)->take(2)->get();
}
}
