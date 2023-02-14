<?php namespace NielsVanDenDries\FieldEngineeringToolkit\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateNielsvandendriesFieldengineeringtoolkitUsers extends Migration
{
    public function up()
    {
        Schema::table('nielsvandendries_fieldengineeringtoolkit_users', function($table)
        {
            $table->string('last_ip', 255)->nullable();
            $table->string('created_ip', 255)->nullable()->change();
            $table->dropColumn('las_ip');
        });
    }
    
    public function down()
    {
        Schema::table('nielsvandendries_fieldengineeringtoolkit_users', function($table)
        {
            $table->dropColumn('last_ip');
            $table->string('created_ip', 255)->nullable(false)->change();
            $table->string('las_ip', 255);
        });
    }
}
