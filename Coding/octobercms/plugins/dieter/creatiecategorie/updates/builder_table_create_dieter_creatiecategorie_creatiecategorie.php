<?php namespace Dieter\CreatieCategorie\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateDieterCreatiecategorieCreatiecategorie extends Migration
{
    public function up()
    {
        Schema::create('dieter_creatiecategorie_creatiecategorie', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->text('title');
            $table->string('short_description');
            $table->text('body');
            $table->string('slug', 255);
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('dieter_creatiecategorie_creatiecategorie');
    }
}
