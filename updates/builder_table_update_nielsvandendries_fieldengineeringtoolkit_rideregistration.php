<?php namespace NielsVanDenDries\FieldEngineeringToolkit\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateNielsvandendriesFieldengineeringtoolkitRideregistration extends Migration
{
    public function up()
    {
        Schema::table('nielsvandendries_fieldengineeringtoolkit_rideregistration', function($table)
        {
            $table->string('from');
            $table->string('to');
            $table->string('start');
            $table->string('end');
            $table->string('licenseplate');
            $table->string('driver');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('nielsvandendries_fieldengineeringtoolkit_rideregistration', function($table)
        {
            $table->dropColumn('from');
            $table->dropColumn('to');
            $table->dropColumn('start');
            $table->dropColumn('end');
            $table->dropColumn('licenseplate');
            $table->dropColumn('driver');
            $table->dropColumn('created_at');
            $table->dropColumn('updated_at');
        });
    }
}
