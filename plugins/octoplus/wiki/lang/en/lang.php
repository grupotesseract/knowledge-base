<?php return [
    'plugin' => [
        'name' => 'wiki',
        'description' => 'Simple wiki plugin for October CMS',
    ],
    'permissions' => [
        'createarticle' => 'Create Articles',
        'use' => 'Access to wiki plugin',
    ],
    'components' => [
        'article' => 'Wiki Article',
        'articleDescription' => 'This component allow you to display an article of your wiki',
        'section' => 'Wiki Section',
        'sectionDescription' => 'This component display a single section of your article',
        'articlesList' => 'Wiki Articles List',
        'articlesListDescription' => 'This component allow you to display an article of your wiki',
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
        'section_slug' => 'Section slug',
        'section_slug_description' => 'Look up the Section using the supplied slug value.',
        'section_article_slug' => 'Article slug',
        'section_article_slug_description' => 'Look up the Article using the supplied slug value.',
        'articlesList_url' => 'Article page url',
        'articlesList_url_description' => 'specify the page used to display your article',
    ]
];
