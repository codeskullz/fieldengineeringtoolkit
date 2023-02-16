<?php namespace NielsVanDenDries\FieldEngineeringToolkit\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateNielsvandendriesFieldengineeringtoolkitPlanning4 extends Migration
{
    public function up()
    {
        Schema::table('nielsvandendries_fieldengineeringtoolkit_planning', function($table)
        {
            $table->dropColumn('engineer');
        });
    }
    
    public function down()
    {
        Schema::table('nielsvandendries_fieldengineeringtoolkit_planning', function($table)
        {
            $table->string('engineer', 255);
        });
    }
}
