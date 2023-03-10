<?php namespace NielsVanDenDries\FieldEngineeringToolkit\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateNielsvandendriesFieldengineeringtoolkitObjects6 extends Migration
{
    public function up()
    {
        Schema::table('nielsvandendries_fieldengineeringtoolkit_objects', function($table)
        {
            $table->string('map_location');
        });
    }
    
    public function down()
    {
        Schema::table('nielsvandendries_fieldengineeringtoolkit_objects', function($table)
        {
            $table->dropColumn('map_location');
        });
    }
}
