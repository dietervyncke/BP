<?php namespace Dieter\Teammembers\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateDieterTeammembersTeammembers2 extends Migration
{
    public function up()
    {
        Schema::table('dieter_teammembers_teammembers', function($table)
        {
            $table->renameColumn('image_url', 'imageurl');
        });
    }
    
    public function down()
    {
        Schema::table('dieter_teammembers_teammembers', function($table)
        {
            $table->renameColumn('imageurl', 'image_url');
        });
    }
}
