<?php namespace Dieter\Testimonals\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateDieterTestimonalsTestimonials extends Migration
{
    public function up()
    {
        Schema::create('dieter_testimonals_testimonials', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->text('name');
            $table->text('short_description');
            $table->text('full_description');
            $table->text('person_image_url');
            $table->text('project_image_url');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('dieter_testimonals_testimonials');
    }
}
