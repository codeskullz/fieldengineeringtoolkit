<?php namespace NielsVanDenDries\FieldEngineeringToolkit\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableDeleteNielsvandendriesFieldengineeringtoolkitUsermanager extends Migration
{
    public function up()
    {
        Schema::dropIfExists('nielsvandendries_fieldengineeringtoolkit_usermanager');
    }
    
    public function down()
    {
        Schema::create('nielsvandendries_fieldengineeringtoolkit_usermanager', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
        });
    }
}
