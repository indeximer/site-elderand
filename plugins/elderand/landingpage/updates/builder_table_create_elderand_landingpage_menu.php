<?php namespace Elderand\LandingPage\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateElderandLandingpageMenu extends Migration
{
    public function up()
    {
        Schema::create('elderand_landingpage_menu', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('title');
            $table->string('link')->nullable();
            $table->string('class')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('elderand_landingpage_menu');
    }
}
