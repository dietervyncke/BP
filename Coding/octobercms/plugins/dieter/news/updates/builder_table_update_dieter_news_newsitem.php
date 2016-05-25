<?php namespace Dieter\News\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateDieterNewsNewsitem extends Migration
{
    public function up()
    {
        Schema::table('dieter_news_newsitem', function($table)
        {
            $table->string('slug')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('dieter_news_newsitem', function($table)
        {
            $table->dropColumn('slug');
        });
    }
}
