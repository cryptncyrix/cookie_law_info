<?php

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
        'name' => 'cyrixbiz_set_law_cookie',

        /**
         * View-File Name
         */

        'layout' => 'CookieView::layout.message',

        /**
         * Cookie_LifeTime
         */
        'life_time' => 60,

        /**
         * Template Tag to set the View
         */
        'tag' => '</body>'
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