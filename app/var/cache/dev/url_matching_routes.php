<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/admin' => [[['_route' => 'admin_main_page', '_controller' => 'App\\Controller\\AdminController::index'], null, null, null, true, false, null]],
        '/admin/su/categories' => [[['_route' => 'categories', '_controller' => 'App\\Controller\\AdminController::categories'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/videos' => [[['_route' => 'videos', '_controller' => 'App\\Controller\\AdminController::videos'], null, null, null, false, false, null]],
        '/admin/su/upload-video' => [[['_route' => 'upload_video', '_controller' => 'App\\Controller\\AdminController::uploadVideo'], null, null, null, false, false, null]],
        '/admin/su/users' => [[['_route' => 'users', '_controller' => 'App\\Controller\\AdminController::users'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'main_page', '_controller' => 'App\\Controller\\FrontController::index'], null, null, null, false, false, null]],
        '/pricing' => [[['_route' => 'pricing', '_controller' => 'App\\Controller\\FrontController::pricing'], null, null, null, false, false, null]],
        '/register' => [[['_route' => 'register', '_controller' => 'App\\Controller\\FrontController::register'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'login', '_controller' => 'App\\Controller\\FrontController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'logout', '_controller' => 'App\\Controller\\FrontController::logout'], null, null, null, false, false, null]],
        '/payment' => [[['_route' => 'payment', '_controller' => 'App\\Controller\\FrontController::payment'], null, null, null, false, false, null]],
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/admin/su/(?'
                    .'|edit\\-category/([^/]++)(*:43)'
                    .'|delete\\-category/([^/]++)(*:75)'
                .')'
                .'|/video\\-(?'
                    .'|list/category/([^/]++)/([^/]++)(?:/([^/]++))?(*:139)'
                    .'|details/([^/]++)(*:163)'
                .')'
                .'|/search\\-results(?:/([^/]++))?(*:202)'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:241)'
                    .'|wdt/([^/]++)(*:261)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:307)'
                            .'|router(*:321)'
                            .'|exception(?'
                                .'|(*:341)'
                                .'|\\.css(*:354)'
                            .')'
                        .')'
                        .'|(*:364)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        43 => [[['_route' => 'edit_category', '_controller' => 'App\\Controller\\AdminController::editCategory'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        75 => [[['_route' => 'delete_category', '_controller' => 'App\\Controller\\AdminController::deleteCategory'], ['id'], null, null, false, true, null]],
        139 => [[['_route' => 'video_list', 'page' => '1', '_controller' => 'App\\Controller\\FrontController::videoList'], ['categoryname', 'id', 'page'], null, null, false, true, null]],
        163 => [[['_route' => 'video_details', '_controller' => 'App\\Controller\\FrontController::videoDetails'], ['video'], null, null, false, true, null]],
        202 => [[['_route' => 'search_results', 'page' => '1', '_controller' => 'App\\Controller\\FrontController::searchResults'], ['page'], ['GET' => 0], null, false, true, null]],
        241 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        261 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        307 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        321 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        341 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        354 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        364 => [
            [['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
