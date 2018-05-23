<?php namespace Octoplus\Wiki\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateOctoplusWikiSections extends Migration
{
    public function up()
    {
        Schema::table('octoplus_wiki_sections', function($table)
        {
            $table->smallInteger('published');
            $table->text('comments')->nullable();
        });
    }

    public function down()
    {
        Schema::table('octoplus_wiki_sections', function($table)
        {
            $table->dropColumn('published');
            $table->dropColumn('comments');
        });
    }
}
