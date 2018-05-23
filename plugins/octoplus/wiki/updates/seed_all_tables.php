<?php namespace Octoplus\Wiki\Updates;

use Seeder;
use Octoplus\Wiki\Models\Article;
use Octoplus\Wiki\Models\Section;
use Carbon\Carbon;

class SeedAllTable extends Seeder
{
    public function run()
    {
        $articles = Article::create([
          'title' => 'Article 1',
          'slug'  => 'article-1',
          'abstract' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin vestibulum molestie ipsum. Morbi malesuada semper iaculis. Vivamus hendrerit massa eu risus aliquet fringilla. Praesent consectetur mi sit amet turpis suscipit, vel imperdiet sem pulvinar. In posuere, nisi in pellentesque malesuada, leo lorem consequat est, in finibus nulla nisi vitae ex. Vestibulum maximus, massa sed laoreet varius, sem urna dictum magna, et bibendum ipsum dui non justo. Nullam auctor sem sed mattis egestas.',
          'introduction' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin vestibulum molestie ipsum. Morbi malesuada semper iaculis. Vivamus hendrerit massa eu risus aliquet fringilla. Praesent consectetur mi sit amet turpis suscipit, vel imperdiet sem pulvinar. In posuere, nisi in pellentesque malesuada, leo lorem consequat est, in finibus nulla nisi vitae ex. Vestibulum maximus, massa sed laoreet varius, sem urna dictum magna, et bibendum ipsum dui non justo. Nullam auctor sem sed mattis egestas.

Nulla facilisi. Quisque sit amet nisi commodo, volutpat odio id, blandit nisl. Pellentesque eu congue velit. Mauris id lacus urna. Interdum et malesuada fames ac ante ipsum primis in faucibus. Vestibulum ornare tortor nec posuere pretium. Sed ultricies viverra eros, et elementum massa egestas in. Morbi viverra tempor vestibulum. Pellentesque vitae massa quis nisl porttitor tempus. Etiam dictum massa nec diam mollis volutpat. Nullam ultricies lacus cursus facilisis consequat. Etiam tincidunt turpis eu leo molestie rutrum.',
          'published' => true,
          'published_at' => Carbon::now(),
        ]);

        $sections = [
          [
            'article_id' => $articles->id,
            'title' => 'Section 1',
            'slug'  => 'section-1',
            'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin vestibulum molestie ipsum. Morbi malesuada semper iaculis. Vivamus hendrerit massa eu risus aliquet fringilla. Praesent consectetur mi sit amet turpis suscipit, vel imperdiet sem pulvinar. In posuere, nisi in pellentesque malesuada, leo lorem consequat est, in finibus nulla nisi vitae ex. Vestibulum maximus, massa sed laoreet varius, sem urna dictum magna, et bibendum ipsum dui non justo. Nullam auctor sem sed mattis egestas.

Nulla facilisi. Quisque sit amet nisi commodo, volutpat odio id, blandit nisl. Pellentesque eu congue velit. Mauris id lacus urna. Interdum et malesuada fames ac ante ipsum primis in faucibus. Vestibulum ornare tortor nec posuere pretium. Sed ultricies viverra eros, et elementum massa egestas in. Morbi viverra tempor vestibulum. Pellentesque vitae massa quis nisl porttitor tempus. Etiam dictum massa nec diam mollis volutpat. Nullam ultricies lacus cursus facilisis consequat. Etiam tincidunt turpis eu leo molestie rutrum.

Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Suspendisse eu mauris eu felis consequat pulvinar vitae vitae nunc. Quisque ut dolor ut neque convallis fringilla. Suspendisse enim lorem, egestas sed nulla quis, tincidunt tincidunt lacus. Quisque consequat semper vestibulum. Donec vitae erat sit amet sapien cursus egestas. Nullam blandit aliquet vehicula. In hac habitasse platea dictumst. Nulla vel rutrum augue, at semper neque. Fusce auctor vestibulum dolor sit amet dignissim. Etiam rutrum, urna ut convallis maximus, turpis justo tempus nunc, id vestibulum odio dui ac erat. Mauris at mi vel tellus euismod ultricies. Nullam eget arcu lacus.

Pellentesque in gravida dui, vitae vulputate orci. Vestibulum pharetra placerat porta. Pellentesque tincidunt purus ut elementum mollis. Maecenas lacinia erat ut ipsum tincidunt mollis. Suspendisse efficitur quis erat at pretium. Suspendisse cursus convallis neque. Mauris nec suscipit lacus. Nam facilisis urna ut tortor varius pellentesque vel eget libero. Cras urna sem, lacinia sit amet efficitur et, finibus eget odio. In et tortor ut lectus egestas congue. Phasellus vulputate metus bibendum magna luctus, eu semper ligula tincidunt. Suspendisse commodo fringilla nunc, a ultricies justo molestie rhoncus. Proin pulvinar mi finibus ornare pulvinar.

Donec sed velit non neque maximus rutrum. Nunc malesuada ultricies risus at sollicitudin. Proin eget nibh non turpis tempus tristique. Curabitur semper auctor ipsum et vestibulum. Ut laoreet tempus varius. Donec pharetra, tortor a commodo fermentum, eros augue pharetra nulla, ac ultricies felis lectus vel nibh. Nullam eu justo dolor. Sed non congue odio, a ornare est. Aliquam facilisis orci non elit dapibus tincidun',
            'published' => true,
            'published_at' => Carbon::now(),
          ],[
            'article_id' => $articles->id,
            'title' => 'Section 2',
            'slug'  => 'section-2',
            'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin vestibulum molestie ipsum. Morbi malesuada semper iaculis. Vivamus hendrerit massa eu risus aliquet fringilla. Praesent consectetur mi sit amet turpis suscipit, vel imperdiet sem pulvinar. In posuere, nisi in pellentesque malesuada, leo lorem consequat est, in finibus nulla nisi vitae ex. Vestibulum maximus, massa sed laoreet varius, sem urna dictum magna, et bibendum ipsum dui non justo. Nullam auctor sem sed mattis egestas.

Nulla facilisi. Quisque sit amet nisi commodo, volutpat odio id, blandit nisl. Pellentesque eu congue velit. Mauris id lacus urna. Interdum et malesuada fames ac ante ipsum primis in faucibus. Vestibulum ornare tortor nec posuere pretium. Sed ultricies viverra eros, et elementum massa egestas in. Morbi viverra tempor vestibulum. Pellentesque vitae massa quis nisl porttitor tempus. Etiam dictum massa nec diam mollis volutpat. Nullam ultricies lacus cursus facilisis consequat. Etiam tincidunt turpis eu leo molestie rutrum.

Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Suspendisse eu mauris eu felis consequat pulvinar vitae vitae nunc. Quisque ut dolor ut neque convallis fringilla. Suspendisse enim lorem, egestas sed nulla quis, tincidunt tincidunt lacus. Quisque consequat semper vestibulum. Donec vitae erat sit amet sapien cursus egestas. Nullam blandit aliquet vehicula. In hac habitasse platea dictumst. Nulla vel rutrum augue, at semper neque. Fusce auctor vestibulum dolor sit amet dignissim. Etiam rutrum, urna ut convallis maximus, turpis justo tempus nunc, id vestibulum odio dui ac erat. Mauris at mi vel tellus euismod ultricies. Nullam eget arcu lacus.

Pellentesque in gravida dui, vitae vulputate orci. Vestibulum pharetra placerat porta. Pellentesque tincidunt purus ut elementum mollis. Maecenas lacinia erat ut ipsum tincidunt mollis. Suspendisse efficitur quis erat at pretium. Suspendisse cursus convallis neque. Mauris nec suscipit lacus. Nam facilisis urna ut tortor varius pellentesque vel eget libero. Cras urna sem, lacinia sit amet efficitur et, finibus eget odio. In et tortor ut lectus egestas congue. Phasellus vulputate metus bibendum magna luctus, eu semper ligula tincidunt. Suspendisse commodo fringilla nunc, a ultricies justo molestie rhoncus. Proin pulvinar mi finibus ornare pulvinar.

Donec sed velit non neque maximus rutrum. Nunc malesuada ultricies risus at sollicitudin. Proin eget nibh non turpis tempus tristique. Curabitur semper auctor ipsum et vestibulum. Ut laoreet tempus varius. Donec pharetra, tortor a commodo fermentum, eros augue pharetra nulla, ac ultricies felis lectus vel nibh. Nullam eu justo dolor. Sed non congue odio, a ornare est. Aliquam facilisis orci non elit dapibus tincidun',
            'published' => true,
            'published_at' => Carbon::tomorrow(),
          ],[
            'article_id' => $articles->id,
            'title' => 'Section 3',
            'slug'  => 'section-3',
            'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin vestibulum molestie ipsum. Morbi malesuada semper iaculis. Vivamus hendrerit massa eu risus aliquet fringilla. Praesent consectetur mi sit amet turpis suscipit, vel imperdiet sem pulvinar. In posuere, nisi in pellentesque malesuada, leo lorem consequat est, in finibus nulla nisi vitae ex. Vestibulum maximus, massa sed laoreet varius, sem urna dictum magna, et bibendum ipsum dui non justo. Nullam auctor sem sed mattis egestas.

Nulla facilisi. Quisque sit amet nisi commodo, volutpat odio id, blandit nisl. Pellentesque eu congue velit. Mauris id lacus urna. Interdum et malesuada fames ac ante ipsum primis in faucibus. Vestibulum ornare tortor nec posuere pretium. Sed ultricies viverra eros, et elementum massa egestas in. Morbi viverra tempor vestibulum. Pellentesque vitae massa quis nisl porttitor tempus. Etiam dictum massa nec diam mollis volutpat. Nullam ultricies lacus cursus facilisis consequat. Etiam tincidunt turpis eu leo molestie rutrum.

Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Suspendisse eu mauris eu felis consequat pulvinar vitae vitae nunc. Quisque ut dolor ut neque convallis fringilla. Suspendisse enim lorem, egestas sed nulla quis, tincidunt tincidunt lacus. Quisque consequat semper vestibulum. Donec vitae erat sit amet sapien cursus egestas. Nullam blandit aliquet vehicula. In hac habitasse platea dictumst. Nulla vel rutrum augue, at semper neque. Fusce auctor vestibulum dolor sit amet dignissim. Etiam rutrum, urna ut convallis maximus, turpis justo tempus nunc, id vestibulum odio dui ac erat. Mauris at mi vel tellus euismod ultricies. Nullam eget arcu lacus.

Pellentesque in gravida dui, vitae vulputate orci. Vestibulum pharetra placerat porta. Pellentesque tincidunt purus ut elementum mollis. Maecenas lacinia erat ut ipsum tincidunt mollis. Suspendisse efficitur quis erat at pretium. Suspendisse cursus convallis neque. Mauris nec suscipit lacus. Nam facilisis urna ut tortor varius pellentesque vel eget libero. Cras urna sem, lacinia sit amet efficitur et, finibus eget odio. In et tortor ut lectus egestas congue. Phasellus vulputate metus bibendum magna luctus, eu semper ligula tincidunt. Suspendisse commodo fringilla nunc, a ultricies justo molestie rhoncus. Proin pulvinar mi finibus ornare pulvinar.

Donec sed velit non neque maximus rutrum. Nunc malesuada ultricies risus at sollicitudin. Proin eget nibh non turpis tempus tristique. Curabitur semper auctor ipsum et vestibulum. Ut laoreet tempus varius. Donec pharetra, tortor a commodo fermentum, eros augue pharetra nulla, ac ultricies felis lectus vel nibh. Nullam eu justo dolor. Sed non congue odio, a ornare est. Aliquam facilisis orci non elit dapibus tincidun',
            'published' => false,
            'published_at' => Carbon::now(),
          ]
        ];

        Section::insert($sections);
    }
}
