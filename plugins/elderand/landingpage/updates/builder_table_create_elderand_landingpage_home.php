<?php namespace Elderand\LandingPage\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateElderandLandingpageHome extends Migration
{
    public function up()
    {
        Schema::create('elderand_landingpage_home', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('highlight_title');
            $table->string('highlight_cta')->nullable();
            $table->text('highlight_description');
            $table->string('highlight_video')->nullable();
            $table->string('features_title');
            $table->string('features_cta')->nullable();
            $table->text('features_items');
            $table->string('galery_title');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('elderand_landingpage_home');
    }
}
