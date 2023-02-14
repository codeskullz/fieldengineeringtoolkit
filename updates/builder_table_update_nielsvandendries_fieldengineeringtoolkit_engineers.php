<?php namespace NielsVanDenDries\FieldEngineeringToolkit\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateNielsvandendriesFieldengineeringtoolkitEngineers extends Migration
{
    public function up()
    {
        Schema::table('nielsvandendries_fieldengineeringtoolkit_engineers', function($table)
        {
            $table->string('name');
            $table->string('address');
            $table->string('zipcode');
            $table->string('place');
            $table->string('businessoperations');
            $table->string('skills');
            $table->string('contract');
            $table->string('car');
            $table->string('outofservice');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('nielsvandendries_fieldengineeringtoolkit_engineers', function($table)
        {
            $table->dropColumn('name');
            $table->dropColumn('address');
            $table->dropColumn('zipcode');
            $table->dropColumn('place');
            $table->dropColumn('businessoperations');
            $table->dropColumn('skills');
            $table->dropColumn('contract');
            $table->dropColumn('car');
            $table->dropColumn('outofservice');
            $table->dropColumn('created_at');
            $table->dropColumn('updated_at');
        });
    }
}
