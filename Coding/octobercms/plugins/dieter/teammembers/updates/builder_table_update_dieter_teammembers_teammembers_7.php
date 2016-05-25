<?php namespace Dieter\Teammembers\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateDieterTeammembersTeammembers7 extends Migration
{
    public function up()
    {
        Schema::table('dieter_teammembers_teammembers', function($table)
        {
            $table->date('hiredate')->nullable(false)->change();
        });
    }
    
    public function down()
    {
        Schema::table('dieter_teammembers_teammembers', function($table)
        {
            $table->date('hiredate')->nullable()->change();
        });
    }
}
