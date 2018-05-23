<?php namespace Octoplus\Wiki\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateOctoplusWikiArticles extends Migration
{
    public function up()
    {
        Schema::create('octoplus_wiki_articles', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('title');
            $table->string('slug');
            $table->text('abstract');
            $table->text('introduction')->nullable();
            
            $table->timestamps();
            $table->timestamp('published_at')->nullable();
            $table->softDeletes();
        });
    }

    public function down()
    {
        Schema::dropIfExists('octoplus_wiki_articles');
    }
}
