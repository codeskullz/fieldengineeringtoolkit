<?php namespace NielsVanDenDries\FieldEngineeringToolkit\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateNielsvandendriesFieldengineeringtoolkitObjects4 extends Migration
{
    public function up()
    {
        Schema::table('nielsvandendries_fieldengineeringtoolkit_objects', function($table)
        {
            $table->dropColumn('latitude');
            $table->dropColumn('longitude');
        });
    }
    
    public function down()
    {
        Schema::table('nielsvandendries_fieldengineeringtoolkit_objects', function($table)
        {
            $table->string('latitude', 255);
            $table->string('longitude', 255);
        });
    }
}
