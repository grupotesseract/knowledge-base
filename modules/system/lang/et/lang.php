<?php

return [
    'app' => [
        'name' => 'OctoberCMS',
        'tagline' => 'Tagasi põhitõdede juurde'
    ],
    'locale' => [
        'be' => 'Беларуская',
        'bg' => 'Български',
        'cs' => 'Čeština',
        'da' => 'Dansk',
        'en' => 'English (United States)',
        'en-au' => 'English (Australia)',
        'en-ca' => 'English (Canada)',
        'en-gb' => 'English (United Kingdom)',
        'et' => 'Eesti',
        'de' => 'Deutsch',
        'el' => 'Ελληνικά',
        'es' => 'Español',
        'es-ar' => 'Español (Argentina)',
        'fa' => 'فارسی',
        'fr' => 'Français',
        'fr-ca' => 'Français (Canada)',
        'hu' => 'Magyar',
        'id' => 'Bahasa Indonesia',
        'it' => 'Italiano',
        'ja' => '日本語',
        'lt' => 'Lietuvių',
        'lv' => 'Latviešu',
        'nb-no' => 'Norsk (Bokmål)',
        'nl' => 'Nederlands',
        'pl' => 'Polskie',
        'pt-br' => 'Português (Brasil)',
        'ro' => 'Română',
        'ru' => 'Русский',
        'sv' => 'Svenska',
        'sk' => 'Slovenský',
        'tr' => 'Türkçe',
        'zh-cn' => '简体中文',
        'zh-tw' => '繁體中文',
        'vn' => 'Tiếng việt'
    ],
    'directory' => [
        'create_fail' => 'Kataloogi :name ei õnnestunud luua'
    ],
    'file' => [
        'create_fail' => 'Faili :name ei õnnestunud luua'
    ],
    'combiner' => [
        'not_found' => "Ühendaja faili ':name' ei leitud."
    ],
    'system' => [
        'name' => 'Süsteem',
        'menu_label' => 'Süsteem',
        'categories' => [
            'cms' => 'Sisuhaldus',
            'misc' => 'Muu',
            'logs' => 'Logid',
            'mail' => 'E-post',
            'shop' => 'Pood',
            'team' => 'Meeskond',
            'users' => 'Kasutajad',
            'system' => 'Süsteem',
            'social' => 'Suhtlusvõrgustikud',
            'events' => 'Sündmused',
            'customers' => 'Kliendid',
            'my_settings' => 'Minu seaded'
        ]
    ],
    'theme' => [
        'label' => 'Teema',
        'unnamed' => 'Nimeta teema',
        'name' => [
            'label' => 'Teema nimi',
            'help' => 'Anna teemale nimi selle unikaalse koodi järgi, nt RainLab.Vanilla'
        ],
    ],
    'themes' => [
        'install' => 'Paigalda teemad',
        'search' => 'otsi paigaldamiseks teemasid...',
        'installed' => 'Paigaldatud teemad',
        'no_themes' => 'Ühtegi ostetud teemat pole paigaldatud.',
        'recommended' => 'Soovitatud',
        'remove_confirm' => 'Oled sa kindel, et soovid selle teema eemaldada?'
    ],
    'plugin' => [
        'label' => 'Plugin',
        'unnamed' => 'Nimeta plugin',
        'name' => [
            'label' => 'Plugina nimi',
            'help' => 'Anna pluginale nimi selle unikaalse koodi järgi. Nt RainLab.Blog'
        ]
    ],
    'plugins' => [
        'manage' => 'Halda pluginaid',
        'enable_or_disable' => 'Luba või keela',
        'enable_or_disable_title' => 'Luba või keela pluginaid',
        'install' => 'Paigalda pluginaid',
        'install_products' => 'Paigalda tooteid',
        'search' => 'otsi pluginaid paigaldamiseks...',
        'installed' => 'Paigaldatud pluginad',
        'no_plugins' => 'Ühtegi ostetud pluginat pole paigaldatud.',
        'recommended' => 'Soovitatud',
        'remove' => 'Eemalda',
        'refresh' => 'Värskenda',
        'disabled_label' => 'Keelatud',
        'disabled_help' => 'Keelatud pluginaid süsteem ei kasuta.',
        'frozen_label' => 'Peata uuendamised',
        'frozen_help' => 'Peatatud uuendustega pluginaid ei uuendata automaatse uuendusprotsessi käigus.',
        'selected_amount' => 'Valitud pluginaid: :amount',
        'remove_confirm' => 'Oled sa kindel, et soovid selle plugina eemaldada?',
        'remove_success' => 'Valitud pluginad on süsteemist eemaldatud.',
        'refresh_confirm' => 'Oled sa kindel?',
        'refresh_success' => 'Valitud plugin on edukalt värskendatud.',
        'disable_confirm' => 'Oled sa kindel?',
        'disable_success' => 'Valitud plugin on nüüd keelatud.',
        'enable_success' => 'Valitud pluginad on nüüd lubatud.',
        'unknown_plugin' => 'Plugin on edukalt eemaldatud.'
    ],
    'project' => [
        'name' => 'Projekt',
        'owner_label' => 'Omanik',
        'attach' => 'Seosta projekt',
        'detach' => 'Eemalda projekt',
        'none' => 'Puudub',
        'id' => [
            'label' => 'Projekti ID',
            'help' => 'Kuidas leida projekti ID-d',
            'missing' => 'Palun sisesta projekti ID.'
        ],
        'detach_confirm' => 'Oled sa kindel, et soovid selle projekti eemaldada?',
        'unbind_success' => 'Projekt on eemaldatud.'
    ],
    'settings' => [
        'menu_label' => 'Seaded',
        'not_found' => 'Soovitud seadeid ei leitud.',
        'missing_model' => 'Seadete lehel puudub modeli seos.',
        'update_success' => ':name seaded on uuendatud',
        'return' => 'Tagasi süsteemi seadete juurde',
        'search' => 'Otsi'
    ],
    'mail' => [
        'log_file' => 'Logi fail',
        'menu_label' => 'E-posti seadistus',
        'menu_description' => 'Halda e-posti seadistusi.',
        'general' => 'Üldine',
        'method' => 'Saatmise meetod',
        'sender_name' => 'Saatja nimi',
        'sender_email' => 'Saatja e-post',
        'php_mail' => 'PHP mail',
        'smtp' => 'SMTP',
        'smtp_address' => 'SMTP serveri aadress',
        'smtp_authorization' => 'SMTP autenimine',
        'smtp_authorization_comment' => 'Märgi see kast kui serveri poolt on nõutud SMTP autoriseerimine.',
        'smtp_username' => 'Kasutjanimi',
        'smtp_password' => 'Parool',
        'smtp_port' => 'SMTP port',
        'smtp_ssl' => 'SSL ühendus',
        'smtp_encryption' => 'SMTP krüpteerimise protokoll',
        'smtp_encryption_none' => 'Krüpteerimist ei kasutata',
        'smtp_encryption_tls' => 'TLS',
        'smtp_encryption_ssl' => 'SSL',
        'sendmail' => 'Sendmail',
        'sendmail_path' => 'Sendmaili asukoht',
        'sendmail_path_comment' => 'Palun sisesta sendmail programmi asukoht.',
        'mailgun' => 'Mailgun',
        'mailgun_domain' => 'Mailgun domeen',
        'mailgun_domain_comment' => 'Palun sisesta Mailgun domeeni nimi.',
        'mailgun_secret' => 'Mailgun võti',
        'mailgun_secret_comment' => 'Palun sisesta Mailgun API salajane võti.',
        'mandrill' => 'Mandrill',
        'mandrill_secret' => 'Mandrill võti',
        'mandrill_secret_comment' => 'Palun sisesta Mandrill API salajane võti.',
        'ses' => 'Amazon SES',
        'ses_key' => 'SES avalik võti',
        'ses_key_comment' => 'Palun sisesta SES avalik võti',
        'ses_secret' => 'SES salajane võti',
        'ses_secret_comment' => 'Palun sisesta SES saljane võti',
        'ses_region' => 'SES regioon',
        'ses_region_comment' => 'Palun sisesta SES regiooni nimi (nt eu-west-1)',
        'drivers_hint_header' => 'Draivereid pole paigaldatud',
        'drivers_hint_content' => 'See e-posti saatmise meetod nõuab plugina ":plugin" paigaldamist.'
    ],
    'mail_templates' => [
        'menu_label' => 'Kirja mallid',
        'menu_description' => 'Halda kirja malle ja kujundusi, mida saadetakse kasutajatele ja administraatoritele.',
        'new_template' => 'Uus mall',
        'new_layout' => 'Uus kujundus',
        'template' => 'Mall',
        'templates' => 'Mallid',
        'menu_layouts_label' => 'Kirja kujundused',
        'layout' => 'Kujundus',
        'layouts' => 'Kujundused',
        'no_layout' => '-- kujundust pole --',
        'name' => 'Nimi',
        'name_comment' => 'Unikaalne nimi, mida kasutatakse sellele mallile viitamisel',
        'code' => 'Kood',
        'code_comment' => 'Unikaalne kood, mida kasutatakse sellele mallile viitamisel',
        'subject' => 'Subjekt',
        'subject_comment' => 'Kirja subjekt',
        'description' => 'Kirjeldus',
        'content_html' => 'HTML',
        'content_css' => 'CSS',
        'content_text' => 'Tekstipõhine sisu',
        'test_send' => 'Saada testkiri',
        'test_success' => 'Testkiri saadetud.',
        'test_confirm' => 'Saada testkiri aadressile :email. Jätkan?',
        'creating' => 'Loon malli...',
        'creating_layout' => 'Loon kujundust...',
        'saving' => 'Salvestan malli...',
        'saving_layout' => 'Salvestan kujundust...',
        'delete_confirm' => 'Kustutan selle malli?',
        'delete_layout_confirm' => 'Kustutan selle kujunduse?',
        'deleting' => 'Kustutan malli...',
        'deleting_layout' => 'Kustutan kujundust...',
        'sending' => 'Saadan testkirja...',
        'return' => 'Tagasi mallide nimekirja'
    ],
    'install' => [
        'project_label' => 'Lisa projektile',
        'plugin_label' => 'Paigalda plugin',
        'theme_label' => 'Paigalda teema',
        'missing_plugin_name' => 'Palun sisesta plugina nimi, mida paigaldada.',
        'missing_theme_name' => 'Palun sisesta teema nimi, mida paigaldada.',
        'install_completing' => 'Lõpetan paigaldamise protsessi',
        'install_success' => 'Plugin on edukalt paigaldatud'
    ],
    'updates' => [
        'title' => 'Halda uuendusi',
        'name' => 'Tarkvara uuendus',
        'menu_label' => 'Uuendused & pluginad',
        'menu_description' => 'Uuenda süsteemi, halda ja paigalda pluginaid ja teemasid.',
        'return_link' => 'Tagasi süsteemi uuenduste juurde',
        'check_label' => 'Kontrolli uuendusi',
        'retry_label' => 'Proovi uuesti',
        'plugin_name' => 'Nimi',
        'plugin_code' => 'Kood',
        'plugin_description' => 'Kirjeldus',
        'plugin_version' => 'Versioon',
        'plugin_author' => 'Autor',
        'plugin_not_found' => 'Pluginat ei leitud',
        'core_current_build' => 'Praegune versioon',
        'core_build' => 'Versioon :build',
        'core_build_help' => 'Uusim versioon on saadaval.',
        'core_downloading' => 'Laen alla süsteemifaile',
        'core_extracting' => 'Pakin lahti süsteemifaile',
        'plugins' => 'Pluginad',
        'themes' => 'Teemad',
        'disabled' => 'Keelatud',
        'plugin_downloading' => 'Plugina allalaadimine: :name',
        'plugin_extracting' => 'Plugina failide lahtipakkimine: :name',
        'plugin_version_none' => 'Uus plugin',
        'plugin_current_version' => 'Praegune versioon',
        'theme_new_install' => 'Uue teema paigaldamine.',
        'theme_downloading' => 'Teema allalaadimine: :name',
        'theme_extracting' => 'Teema failide lahtipakkimine: :name',
        'update_label' => 'Uuenda tarkvara',
        'update_completing' => 'Lõpetan uuendamise protsessi',
        'update_loading' => 'Laen saadaolevaid uuendusi...',
        'update_success' => 'Uuendamise protsess lõpetatud',
        'update_failed_label' => 'Uendamine ebaõnnestus',
        'force_label' => 'Uuenda igal juhul',
        'found' => [
            'label' => 'Found new updates!',
            'help' => 'Kliki "Uuenda tarkvara," et alustada uuendamise protsesse.'
        ],
        'none' => [
            'label' => 'Uuendusi ei ole',
            'help' => 'Uusi uuendusi ei leitud.'
        ],
        'important_action' => [
            'empty' => 'Vali tegevus',
            'confirm' => 'Kinnita uuendus',
            'skip' => 'Jäta see uuendus vahele (ainult nüüd)',
            'ignore' => 'Jäta see uuendus vahele (alati)'
        ],
        'important_action_required' => 'Vajalik tegevus',
        'important_view_guide' => 'Vaata uuendamise juhendit',
        'important_view_release_notes' => 'Vaate uuenduse märkmeid',
        'important_alert_text' => 'Osa uuendusi vajab sinu tähelepanu.',
        'details_title' => 'Plugina andmed',
        'details_view_homepage' => 'Vaata kodulehte',
        'details_readme' => 'Dokumentatsioon',
        'details_readme_missing' => 'Dokumentatsiooni pole lisatud.',
        'details_changelog' => 'Muudatuste nimekiri',
        'details_changelog_missing' => 'Muudatuste nimekirja pole.',
        'details_upgrades' => 'Uuendamise juhend',
        'details_upgrades_missing' => 'Uuendamise juhendit ei ole lisatud.',
        'details_licence' => 'Litsents',
        'details_licence_missing' => 'Litsentsi pole lisatud.',
        'details_current_version' => 'Praegune versioon',
        'details_author' => 'Autor'
    ],
    'server' => [
        'connect_error' => 'Ühendus serveriga nurjus.',
        'response_not_found' => 'Uuenduste serverit ei leitud.',
        'response_invalid' => 'Serverilt saadi vigane vastus.',
        'response_empty' => 'Serverilt saadi tühi vastus.',
        'file_error' => 'Paketi saatmine ebaõnnestus.',
        'file_corrupt' => 'Saadetud fail on vigane.'
    ],
    'behavior' => [
        'missing_property' => 'Klass :class peab defineerima atribuudi $:property, mida kasutab käitumine :behavior.'
    ],
    'config' => [
        'not_found' => 'Ei leitud :location jaoks seadete faili :file.',
        'required' => ":location seade peab sisaldama ':property' väärtust."
    ],
    'zip' => [
        'extract_failed' => "Süsteemifaili ':file' lahtipakkimine ebaõnnestus."
    ],
    'event_log' => [
        'hint' => 'See logi sisaldab veateateid, mis esinevad süsteemi töös.',
        'menu_label' => 'Sündmuste logi',
        'menu_description' => 'Vaata süsteemi logi kirjeid.',
        'empty_link' => 'Kustuta sündmuste logi',
        'empty_loading' => 'Kustutan sündmuste logi...',
        'empty_success' => 'Sündmuste logi kustutatud',
        'return_link' => 'Tagasi sündmsute logi nimekirja',
        'id' => 'ID',
        'id_label' => 'Sündmuse ID',
        'created_at' => 'Kuupäev & kellaaeg',
        'message' => 'Sisu',
        'level' => 'Tase',
        'preview_title' => 'Sündmus'
    ],
    'request_log' => [
        'hint' => 'See logi sisaldab süsteemi juurdepääsuinfot, mis võiks vajada tähelepanu. Näiteks salvestatakse 404 päringud kui kasutaja üritab vaadata lehte, mida ei ole olemas.',
        'menu_label' => 'Päringute logi',
        'menu_description' => 'Vaata ebaõnnestunud või edasisuunatud päringuid, nt Lehte ei leitud (404).',
        'empty_link' => 'Kustuta sündmuste logi',
        'empty_loading' => 'Kustutan sündmuste logi...',
        'empty_success' => 'Sündmuste logi kustutatud',
        'return_link' => 'Tagasi sündmuste logi nimekirja',
        'id' => 'ID',
        'id_label' => 'Päringu ID',
        'count' => 'Korduste arv',
        'referer' => 'Allikas',
        'url' => 'URL',
        'status_code' => 'Staatus',
        'preview_title' => 'Päring'
    ],
    'permissions' => [
        'name' => 'Süsteem',
        'manage_system_settings' => 'Süsteemi seadete muutmine',
        'manage_software_updates' => 'Süsteemi uundamine',
        'access_logs' => 'Logide vaatamine',
        'manage_mail_templates' => 'Kirja mallide haldamine',
        'manage_mail_settings' => 'E-posti seadete muutmine',
        'manage_other_administrators' => 'Administraatorite haldamine',
        'manage_preferences' => 'Haldusliidese seadete muutmine',
        'manage_editor' => 'Koodi redaktori seadete muutmine',
        'view_the_dashboard' => 'Juurdepääs töölauale',
        'manage_branding' => 'Haldusliidese kohandamine'
    ],
    'log' => [
        'menu_label' => 'Logi seaded',
        'menu_description' => 'Määra millistes süsteemi osadeks peaks logi pidama.',
        'default_tab' => 'Logimine',
        'log_events' => 'Logi süsteemi sündmusi',
        'log_events_comment' => 'Salvesta logi ka andmebaasi (lisaks kettal olevale logifailile).',
        'log_requests' => 'Logi vigaseid päringuid',
        'log_requests_comment' => 'Süsteemi juurdepääsu päringud, mis võiksid vajada tähelepanu (nt 404)',
        'log_theme' => 'Logi teema muudatusi',
        'log_theme_comment' => 'Teema muudatused, mida tehakse haldusliideses.',
    ],
    'media' => [
        'invalid_path' => "Invalid file path specified: ':path'.",
        'folder_size_items' => 'item(s)',
    ],
];
