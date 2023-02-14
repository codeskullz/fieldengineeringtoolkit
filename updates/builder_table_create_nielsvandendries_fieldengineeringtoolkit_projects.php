<?php namespace NielsVanDenDries\FieldEngineeringToolkit\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateNielsvandendriesFieldengineeringtoolkitProjects extends Migration
{
    public function up()
    {
        Schema::create('nielsvandendries_fieldengineeringtoolkit_projects', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('nielsvandendries_fieldengineeringtoolkit_projects');
    }
}
