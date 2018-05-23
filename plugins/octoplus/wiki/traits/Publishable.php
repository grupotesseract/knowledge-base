<?php namespace Octoplus\Wiki\Traits;

use Carbon\Carbon;

/**
* This trait gives to a Model the ability to become publisable. Meaning that
* it as a pubished and a published_at attribute. Given thoses parameters it
* provide the riqued scope
*/
trait Publishable
{
  //
  // Scopes
  //

  public function scopeIsPublished($query)
  {
      return $query
          ->whereNotNull('published')
          ->where('published', true)
          ->whereNotNull('published_at')
          ->where('published_at', '<', Carbon::now())
      ;
  }
}
