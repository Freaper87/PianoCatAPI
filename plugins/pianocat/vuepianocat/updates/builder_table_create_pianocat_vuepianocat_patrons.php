<?php namespace Pianocat\Vuepianocat\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreatePianocatVuepianocatPatrons extends Migration
{
    public function up()
    {
        Schema::create('pianocat_vuepianocat_patrons', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name');
            $table->integer('patronid');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('pianocat_vuepianocat_patrons');
    }
}
