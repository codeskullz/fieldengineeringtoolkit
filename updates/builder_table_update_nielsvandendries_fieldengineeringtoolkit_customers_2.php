<?php namespace NielsVanDenDries\FieldEngineeringToolkit\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateNielsvandendriesFieldengineeringtoolkitCustomers2 extends Migration
{
    public function up()
    {
        Schema::table('nielsvandendries_fieldengineeringtoolkit_customers', function($table)
        {
            $table->string('phonenumber');
            $table->string('emailaddress');
        });
    }
    
    public function down()
    {
        Schema::table('nielsvandendries_fieldengineeringtoolkit_customers', function($table)
        {
            $table->dropColumn('phonenumber');
            $table->dropColumn('emailaddress');
        });
    }
}
