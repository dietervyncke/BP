<?php namespace Dieter\CreatieCategorie\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateDieterCreatiecategorieRealisatie extends Migration
{
    public function up()
    {
        Schema::create('dieter_creatiecategorie_realisatie', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('title');
            $table->string('slug');
            $table->text('body');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('dieter_creatiecategorie_realisatie');
    }
}
