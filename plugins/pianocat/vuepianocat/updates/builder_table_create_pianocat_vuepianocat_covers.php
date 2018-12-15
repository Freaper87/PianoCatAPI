<?php namespace Pianocat\Vuepianocat\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreatePianocatVuepianocatCovers extends Migration
{
    public function up()
    {
        Schema::create('pianocat_vuepianocat_covers', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('title')->nullable();
            $table->string('subtitle')->nullable();
            $table->string('slug')->nullable();
            $table->string('video')->nullable();
            $table->text('description')->nullable();
            $table->string('sheetpreview')->nullable();
            $table->string('sheetpdf')->nullable();
            $table->string('metatitle')->nullable();
            $table->string('metadescription')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('pianocat_vuepianocat_covers');
    }
}
