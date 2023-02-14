<?php namespace NielsVanDenDries\FieldEngineeringToolkit\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateNielsvandendriesFieldengineeringtoolkitPlanning extends Migration
{
    public function up()
    {
        Schema::table('nielsvandendries_fieldengineeringtoolkit_planning', function($table)
        {
            $table->string('customer_address');
            $table->string('customer_name');
            $table->string('customer_phonenumber');
            $table->string('customer_emailaddress');
            $table->string('customer_zipcode');
            $table->string('customer_place');
            $table->date('wishdate');
            $table->date('plandate');
            $table->text('job');
            $table->string('status');
            $table->string('archive');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('nielsvandendries_fieldengineeringtoolkit_planning', function($table)
        {
            $table->dropColumn('customer_address');
            $table->dropColumn('customer_name');
            $table->dropColumn('customer_phonenumber');
            $table->dropColumn('customer_emailaddress');
            $table->dropColumn('customer_zipcode');
            $table->dropColumn('customer_place');
            $table->dropColumn('wishdate');
            $table->dropColumn('plandate');
            $table->dropColumn('job');
            $table->dropColumn('status');
            $table->dropColumn('archive');
            $table->dropColumn('created_at');
            $table->dropColumn('updated_at');
        });
    }
}
