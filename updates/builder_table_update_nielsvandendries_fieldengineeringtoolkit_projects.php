<?php namespace NielsVanDenDries\FieldEngineeringToolkit\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateNielsvandendriesFieldengineeringtoolkitProjects extends Migration
{
    public function up()
    {
        Schema::table('nielsvandendries_fieldengineeringtoolkit_projects', function($table)
        {
            $table->string('name');
            $table->string('owner');
            $table->string('contact_name');
            $table->string('contact_phonenumber');
            $table->string('contact_mailaddress');
            $table->string('description');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('nielsvandendries_fieldengineeringtoolkit_projects', function($table)
        {
            $table->dropColumn('name');
            $table->dropColumn('owner');
            $table->dropColumn('contact_name');
            $table->dropColumn('contact_phonenumber');
            $table->dropColumn('contact_mailaddress');
            $table->dropColumn('description');
            $table->dropColumn('created_at');
            $table->dropColumn('updated_at');
        });
    }
}
