<?php namespace NielsVanDenDries\FieldEngineeringToolkit\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableDeleteNielsvandendriesFieldengineeringtoolkitUsers extends Migration
{
    public function up()
    {
        Schema::dropIfExists('nielsvandendries_fieldengineeringtoolkit_users');
    }
    
    public function down()
    {
        Schema::create('nielsvandendries_fieldengineeringtoolkit_users', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('name', 255);
            $table->string('surname', 255);
            $table->string('email', 255);
            $table->string('groups', 255);
            $table->string('created_ip', 255)->nullable();
            $table->string('phone', 255);
            $table->string('mobile', 255);
            $table->string('company', 255);
            $table->string('street', 255);
            $table->string('city', 255);
            $table->string('zip', 255);
            $table->string('county', 255);
            $table->string('state', 255);
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->string('last_ip', 255)->nullable();
        });
    }
}
