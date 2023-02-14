<?php namespace NielsVanDenDries\FieldEngineeringToolkit\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateNielsvandendriesFieldengineeringtoolkitUsers extends Migration
{
    public function up()
    {
        Schema::create('nielsvandendries_fieldengineeringtoolkit_users', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('name');
            $table->string('surname');
            $table->string('email');
            $table->string('groups');
            $table->string('created_ip');
            $table->string('las_ip');
            $table->string('phone');
            $table->string('mobile');
            $table->string('company');
            $table->string('street');
            $table->string('city');
            $table->string('zip');
            $table->string('county');
            $table->string('state');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('nielsvandendries_fieldengineeringtoolkit_users');
    }
}
