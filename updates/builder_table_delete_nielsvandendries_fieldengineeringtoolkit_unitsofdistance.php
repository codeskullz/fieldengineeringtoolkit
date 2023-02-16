<?php namespace NielsVanDenDries\FieldEngineeringToolkit\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableDeleteNielsvandendriesFieldengineeringtoolkitUnitsofdistance extends Migration
{
    public function up()
    {
        Schema::dropIfExists('nielsvandendries_fieldengineeringtoolkit_unitsofdistance');
    }
    
    public function down()
    {
        Schema::create('nielsvandendries_fieldengineeringtoolkit_unitsofdistance', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('kilometer', 255);
            $table->string('miles', 255);
        });
    }
}
