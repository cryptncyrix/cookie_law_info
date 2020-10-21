<?php declare(strict_types=1);

return
[
    'cookie' =>
    [
        /**
         * Enable the Cookie-Law-Check
         */
        'enable' => true,

        /**
         * Mechanism to set the Cookie
         * Ajax or Redirect
         */
        'mechanism' => 'Redirect',

        /**
         * CookieName
         */
        'name' => 'cyrixbiz_set_law_cookile',

        /**
         * View-File Name
         */
        'layout' => 'CookieView::layout.message',

        /**
         * Cookie_LifeTime
         */
        'life_time' => 3600,

        /**
         * Template Tag to set the View
         */
        'tag' => '</body>',

        /**
         * Don't allow Cookies - GoHome
         */
        'fallback' => 'https://www.google.de'
    ],

    'template' =>
    [
        /**
         * Cdn Download for jQuery or use own
         */
        'extern_jQuery' => true,

        /**
         * Cdn Download for Bootstrap or use own
         */
        'extern_bootstrap' => true,
    ]

];