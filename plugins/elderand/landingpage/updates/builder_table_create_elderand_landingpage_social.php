<?php namespace Elderand\LandingPage\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateElderandLandingpageSocial extends Migration
{
    public function up()
    {
        Schema::create('elderand_landingpage_social', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->text('name');
            $table->text('link');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('elderand_landingpage_social');
    }
}
