<?php namespace Dieter\Teammembers\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateDieterTeammembersTeammembers3 extends Migration
{
    public function up()
    {
        Schema::table('dieter_teammembers_teammembers', function($table)
        {
            $table->string('url');
        });
    }
    
    public function down()
    {
        Schema::table('dieter_teammembers_teammembers', function($table)
        {
            $table->dropColumn('url');
        });
    }
}
