<?php return [
    'component' => [
        'article' => 'Wiki Article',
        'articleDescription' => 'This component allow you to display an article of your wiki',
    ],
    'settings' => [
        'article_slug' => 'Article slug',
        'article_slug_description' => 'Look up the Article using the supplied slug value.',
        'article_paginate_section_group' => 'Paginate Sections',
        'article_paginate_section' => 'Paginate Sections?',
        'article_paginate_section_description' => 'Check this if you want to display each section in separate pages',
        'article_paginate_section_url' => 'Section pages URL',
        'article_paginate_section_url_description' => 'Specify the page used to display your sections',
        'article_toc' => 'Table of Content?',
        'article_toc_description' => 'Check this if you want to display the TOC for your article',
        'article_toc_group' => 'Table of content',
    ],
    'partials' => [
        'introduction' => 'Introdution',
        'next' =>'Continue to first section: ',
        'sections' => 'Sections'
    ]
];
