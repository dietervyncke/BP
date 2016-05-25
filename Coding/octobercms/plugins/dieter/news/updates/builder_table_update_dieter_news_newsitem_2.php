<?php namespace Dieter\News\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateDieterNewsNewsitem2 extends Migration
{
    public function up()
    {
        Schema::table('dieter_news_newsitem', function($table)
        {
            $table->dropColumn('date');
        });
    }
    
    public function down()
    {
        Schema::table('dieter_news_newsitem', function($table)
        {
            $table->date('date');
        });
    }
}
