<?php namespace Octoplus\Wiki\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateOctoplusWikiSections extends Migration
{
    public function up()
    {
        Schema::create('octoplus_wiki_sections', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('article_id');
            $table->string('title');
            $table->string('slug');
            $table->text('content');

            $table->timestamps();
            $table->timestamp('published_at')->nullable();
            $table->softDeletes();
        });
    }

    public function down()
    {
        Schema::dropIfExists('octoplus_wiki_sections');
    }
}
