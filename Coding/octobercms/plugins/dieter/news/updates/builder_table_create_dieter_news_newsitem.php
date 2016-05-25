<?php namespace Dieter\News\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateDieterNewsNewsitem extends Migration
{
    public function up()
    {
        Schema::create('dieter_news_newsitem', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('title');
            $table->string('short_description')->nullable();
            $table->text('body')->nullable();
            $table->date('date');
				$table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('dieter_news_newsitem');
    }
}
