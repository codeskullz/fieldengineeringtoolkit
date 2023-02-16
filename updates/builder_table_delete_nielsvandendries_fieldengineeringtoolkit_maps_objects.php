<?php namespace NielsVanDenDries\FieldEngineeringToolkit\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableDeleteNielsvandendriesFieldengineeringtoolkitMapsObjects extends Migration
{
    public function up()
    {
        Schema::dropIfExists('nielsvandendries_fieldengineeringtoolkit_maps_objects');
    }
    
    public function down()
    {
        Schema::create('nielsvandendries_fieldengineeringtoolkit_maps_objects', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
        });
    }
}
