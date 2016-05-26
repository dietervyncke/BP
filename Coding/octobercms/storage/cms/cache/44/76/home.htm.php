<?php 
class Cms5746ea194f80b_2203680713Class extends \Cms\Classes\PageCode
{
public function onStart()
{
	$this['first_newsItem'] = Db::table('dieter_news_newsitem')->first();
	$this['newsItems'] = Db::table('dieter_news_newsitem')->skip(1)->take(2)->get();
}
}
