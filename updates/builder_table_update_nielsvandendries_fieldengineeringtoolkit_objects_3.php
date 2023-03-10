<?php namespace NielsVanDenDries\FieldEngineeringToolkit\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateNielsvandendriesFieldengineeringtoolkitObjects3 extends Migration
{
    public function up()
    {
        Schema::table('nielsvandendries_fieldengineeringtoolkit_objects', function($table)
        {
            $table->string('latitude');
            $table->string('longitude');
            $table->text('parameters');
        });
    }
    
    public function down()
    {
        Schema::table('nielsvandendries_fieldengineeringtoolkit_objects', function($table)
        {
            $table->dropColumn('latitude');
            $table->dropColumn('longitude');
            $table->dropColumn('parameters');
        });
    }
}
