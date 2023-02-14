<?php namespace NielsVanDenDries\FieldEngineeringToolkit\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateNielsvandendriesFieldengineeringtoolkitCustomers extends Migration
{
    public function up()
    {
        Schema::table('nielsvandendries_fieldengineeringtoolkit_customers', function($table)
        {
            $table->string('name');
            $table->string('address');
            $table->string('zipcode');
            $table->string('place');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('nielsvandendries_fieldengineeringtoolkit_customers', function($table)
        {
            $table->dropColumn('name');
            $table->dropColumn('address');
            $table->dropColumn('zipcode');
            $table->dropColumn('place');
            $table->dropColumn('created_at');
            $table->dropColumn('updated_at');
        });
    }
}
