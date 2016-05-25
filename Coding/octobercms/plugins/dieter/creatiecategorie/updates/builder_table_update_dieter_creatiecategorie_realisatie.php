<?php namespace Dieter\CreatieCategorie\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateDieterCreatiecategorieRealisatie extends Migration
{
    public function up()
    {
        Schema::table('dieter_creatiecategorie_realisatie', function($table)
        {
            $table->integer('fk_categorie_id');
        });
    }
    
    public function down()
    {
        Schema::table('dieter_creatiecategorie_realisatie', function($table)
        {
            $table->dropColumn('fk_categorie_id');
        });
    }
}
