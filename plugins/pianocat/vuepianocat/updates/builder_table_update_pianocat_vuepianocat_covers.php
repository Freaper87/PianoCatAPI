<?php namespace Pianocat\Vuepianocat\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdatePianocatVuepianocatCovers extends Migration
{
    public function up()
    {
        Schema::table('pianocat_vuepianocat_covers', function($table)
        {
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('pianocat_vuepianocat_covers', function($table)
        {
            $table->dropColumn('created_at');
            $table->dropColumn('updated_at');
        });
    }
}
