<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/backoffice' => [[['_route' => 'backoffice', '_controller' => 'App\\Controller\\Admin\\BackOfficeController::index'], null, null, null, false, false, null]],
        '/backlogin' => [[['_route' => 'backlogin', '_controller' => 'App\\Controller\\Admin\\SecurityController::login'], null, null, null, false, false, null]],
        '/api/animangas' => [[['_route' => 'Animangas', '_controller' => 'App\\Controller\\AnimangaController::index'], null, ['GET' => 0], null, false, false, null]],
        '/api/animangas/top' => [[['_route' => 'Top_Animangas', '_controller' => 'App\\Controller\\AnimangaController::top'], null, ['GET' => 0], null, false, false, null]],
        '/api/animangas/names' => [[['_route' => 'Animangas_Names', '_controller' => 'App\\Controller\\AnimangaController::names'], null, ['GET' => 0], null, false, false, null]],
        '/login' => [[['_route' => 'loginPage', '_controller' => 'App\\Controller\\LoginController::login'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'homePage', '_controller' => 'App\\Controller\\MainController::homepage'], null, null, null, false, false, null]],
        '/random' => [[['_route' => 'genreRandom', '_controller' => 'App\\Controller\\MainController::genreRandom'], null, null, null, false, false, null]],
        '/api/doc' => [[['_route' => 'app.swagger_ui', '_controller' => 'nelmio_api_doc.controller.swagger_ui'], null, ['GET' => 0], null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:35)'
                .'|/search(?:/([^/]++))?(*:63)'
                .'|/browse(?'
                    .'|(?:/([^/]++))?(*:94)'
                    .'|Manga(?:/([^/]++))?(*:120)'
                    .'|Anime(?:/([^/]++))?(*:147)'
                .')'
                .'|/animanga(?:/([^/]++))?(*:179)'
                .'|/users(?:/([^/]++))?(*:207)'
            .')/?$}sD',
    ],
    [ // $dynamicRoutes
        35 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        63 => [[['_route' => 'searchAnimanga', 'slug' => null, '_controller' => 'App\\Controller\\MainController::search'], ['slug'], null, null, false, true, null]],
        94 => [[['_route' => 'genreAnimanga', 'slug' => null, '_controller' => 'App\\Controller\\MainController::browse'], ['slug'], null, null, false, true, null]],
        120 => [[['_route' => 'genreManga', 'slug' => null, '_controller' => 'App\\Controller\\MainController::browseManga'], ['slug'], null, null, false, true, null]],
        147 => [[['_route' => 'genreAnime', 'slug' => null, '_controller' => 'App\\Controller\\MainController::browseAnime'], ['slug'], null, null, false, true, null]],
        179 => [[['_route' => 'animanga', 'slug' => null, '_controller' => 'App\\Controller\\MainController::animanga'], ['slug'], null, null, false, true, null]],
        207 => [
            [['_route' => 'users', 'id' => null, '_controller' => 'App\\Controller\\MainController::userProfil'], ['id'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
