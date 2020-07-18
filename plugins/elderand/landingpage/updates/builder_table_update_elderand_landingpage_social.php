<?php namespace Elderand\LandingPage\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateElderandLandingpageSocial extends Migration
{
    public function up()
    {
        Schema::table('elderand_landingpage_social', function($table)
        {
            $table->string('name')->nullable(false)->unsigned(false)->default(null)->change();
            $table->string('link')->nullable(false)->unsigned(false)->default(null)->change();
        });
    }
    
    public function down()
    {
        Schema::table('elderand_landingpage_social', function($table)
        {
            $table->text('name')->nullable(false)->unsigned(false)->default(null)->change();
            $table->text('link')->nullable(false)->unsigned(false)->default(null)->change();
        });
    }
}
