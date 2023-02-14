<?php namespace NielsVanDenDries\FieldEngineeringToolkit\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateNielsvandendriesFieldengineeringtoolkitUnitsofdistance extends Migration
{
    public function up()
    {
        Schema::create('nielsvandendries_fieldengineeringtoolkit_unitsofdistance', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('kilometer');
            $table->string('miles');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('nielsvandendries_fieldengineeringtoolkit_unitsofdistance');
    }
}
