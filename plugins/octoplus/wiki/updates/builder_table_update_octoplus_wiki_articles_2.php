<?php namespace Octoplus\Wiki\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateOctoplusWikiArticles2 extends Migration
{
    public function up()
    {
        Schema::table('octoplus_wiki_articles', function($table)
        {
            $table->smallInteger('published');
        });
    }
    
    public function down()
    {
        Schema::table('octoplus_wiki_articles', function($table)
        {
            $table->dropColumn('published');
        });
    }
}
