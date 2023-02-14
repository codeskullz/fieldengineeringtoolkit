<?php namespace NielsVanDenDries\FieldEngineeringToolkit\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateNielsvandendriesFieldengineeringtoolkitJobs extends Migration
{
    public function up()
    {
        Schema::table('nielsvandendries_fieldengineeringtoolkit_jobs', function($table)
        {
            $table->string('name');
            $table->text('job');
            $table->string('engineer');
            $table->string('archive');
            $table->text('tools');
            $table->text('description');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('nielsvandendries_fieldengineeringtoolkit_jobs', function($table)
        {
            $table->dropColumn('name');
            $table->dropColumn('job');
            $table->dropColumn('engineer');
            $table->dropColumn('archive');
            $table->dropColumn('tools');
            $table->dropColumn('description');
            $table->dropColumn('created_at');
            $table->dropColumn('updated_at');
        });
    }
}
