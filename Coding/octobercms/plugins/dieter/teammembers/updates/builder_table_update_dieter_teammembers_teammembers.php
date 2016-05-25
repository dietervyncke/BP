<?php namespace Dieter\Teammembers\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateDieterTeammembersTeammembers extends Migration
{
    public function up()
    {
        Schema::rename('dieter_teammembers_', 'dieter_teammembers_teammembers');
        Schema::table('dieter_teammembers_teammembers', function($table)
        {
            $table->increments('id')->unsigned(false)->change();
        });
    }
    
    public function down()
    {
        Schema::rename('dieter_teammembers_teammembers', 'dieter_teammembers_');
        Schema::table('dieter_teammembers_', function($table)
        {
            $table->increments('id')->unsigned()->change();
        });
    }
}
