<?php namespace NielsVanDenDries\FieldEngineeringToolkit\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableDeleteNielsvandendriesFieldengineeringtoolkitPorncategorie extends Migration
{
    public function up()
    {
        Schema::dropIfExists('nielsvandendries_fieldengineeringtoolkit_porncategorie');
    }
    
    public function down()
    {
        Schema::create('nielsvandendries_fieldengineeringtoolkit_porncategorie', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('catergorie', 255)->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }
}
