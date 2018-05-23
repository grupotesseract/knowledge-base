<?php namespace Octoplus\Wiki\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateOctoplusWikiArticles extends Migration
{
    public function up()
    {
        Schema::table('octoplus_wiki_articles', function($table)
        {
            $table->string('image')->nullable();
        });
    }

    public function down()
    {
        Schema::table('octoplus_wiki_articles', function($table)
        {
            $table->dropColumn('image');
        });
    }
}
