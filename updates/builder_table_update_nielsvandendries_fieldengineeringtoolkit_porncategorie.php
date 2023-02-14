<?php namespace NielsVanDenDries\FieldEngineeringToolkit\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateNielsvandendriesFieldengineeringtoolkitPorncategorie extends Migration
{
    public function up()
    {
        Schema::table('nielsvandendries_fieldengineeringtoolkit_porncategorie', function($table)
        {
            $table->string('catergorie', 255)->nullable()->change();
        });
    }
    
    public function down()
    {
        Schema::table('nielsvandendries_fieldengineeringtoolkit_porncategorie', function($table)
        {
            $table->string('catergorie', 255)->nullable(false)->change();
        });
    }
}
