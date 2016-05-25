<?php namespace Dieter\Teammembers\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateDieterTeammembers extends Migration
{
    public function up()
    {
        Schema::create('dieter_teammembers_', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name');
            $table->string('job');
            $table->date('hiredate');
            $table->string('image_url');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('dieter_teammembers_');
    }
}
