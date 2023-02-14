<?php namespace NielsVanDenDries\FieldEngineeringToolkit\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateNielsvandendriesFieldengineeringtoolkitPorncategorie extends Migration
{
    public function up()
    {
        Schema::create('nielsvandendries_fieldengineeringtoolkit_porncategorie', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('catergorie');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('nielsvandendries_fieldengineeringtoolkit_porncategorie');
    }
}
