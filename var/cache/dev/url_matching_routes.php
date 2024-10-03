<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/cliente' => [[['_route' => 'cliente_index', '_controller' => 'App\\Controller\\ClienteController::index'], null, ['GET' => 0], null, true, false, null]],
        '/cliente/new' => [[['_route' => 'cliente_new', '_controller' => 'App\\Controller\\ClienteController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/imprimir' => [[['_route' => 'imprimir', '_controller' => 'App\\Controller\\CorreoController::imprimir'], null, null, null, false, false, null]],
        '/sendemail' => [[['_route' => 'sendemail', '_controller' => 'App\\Controller\\CorreoController::sendEmail'], null, null, null, false, false, null]],
        '/decoracion' => [[['_route' => 'decoracion_index', '_controller' => 'App\\Controller\\DecoracionController::index'], null, ['GET' => 0], null, true, false, null]],
        '/decoracion/new' => [[['_route' => 'decoracion_new', '_controller' => 'App\\Controller\\DecoracionController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/empleado' => [[['_route' => 'empleado_index', '_controller' => 'App\\Controller\\EmpleadoController::index'], null, ['GET' => 0], null, true, false, null]],
        '/empleado/new' => [[['_route' => 'empleado_new', '_controller' => 'App\\Controller\\EmpleadoController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/evento' => [[['_route' => 'evento_index', '_controller' => 'App\\Controller\\EventoController::index'], null, ['GET' => 0], null, true, false, null]],
        '/evento/new' => [[['_route' => 'evento_new', '_controller' => 'App\\Controller\\EventoController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/' => [[['_route' => 'index', '_controller' => 'App\\Controller\\IndexController::index'], null, null, null, false, false, null]],
        '/menu' => [[['_route' => 'menu_index', '_controller' => 'App\\Controller\\MenuController::index'], null, ['GET' => 0], null, true, false, null]],
        '/menu/new' => [[['_route' => 'menu_new', '_controller' => 'App\\Controller\\MenuController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/buscarPorFecha' => [[['_route' => 'buscarPorFecha', '_controller' => 'App\\Controller\\PresupuestoController::buscarPorFecha'], null, null, null, false, false, null]],
        '/buscar' => [[['_route' => 'buscar', '_controller' => 'App\\Controller\\PresupuestoController::buscar'], null, null, null, false, false, null]],
        '/formulario' => [[['_route' => 'formulario', '_controller' => 'App\\Controller\\PresupuestoController::formulario'], null, null, null, false, false, null]],
        '/nosotros' => [[['_route' => 'nosotros', '_locale' => 'es', '_controller' => 'App\\Controller\\PrincipalController::nosotros'], null, null, null, false, false, null]],
        '/buscarPorNombre' => [[['_route' => 'buscarPorNombre', '_controller' => 'App\\Controller\\PrincipalController::buscarPorNombre'], null, null, null, false, false, null]],
        '/salon' => [[['_route' => 'salon_index', '_controller' => 'App\\Controller\\SalonController::index'], null, ['GET' => 0], null, true, false, null]],
        '/salon/new' => [[['_route' => 'salon_new', '_controller' => 'App\\Controller\\SalonController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/user' => [[['_route' => 'user_index', '_controller' => 'App\\Controller\\UserController::index'], null, ['GET' => 0], null, true, false, null]],
        '/user/new' => [[['_route' => 'user_new', '_controller' => 'App\\Controller\\UserController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:102)'
                            .'|router(*:116)'
                            .'|exception(?'
                                .'|(*:136)'
                                .'|\\.css(*:149)'
                            .')'
                        .')'
                        .'|(*:159)'
                    .')'
                .')'
                .'|/cliente/([^/]++)(?'
                    .'|(*:189)'
                    .'|/edit(*:202)'
                    .'|(*:210)'
                .')'
                .'|/d(?'
                    .'|ecoracion/([^/]++)(?'
                        .'|(*:245)'
                        .'|/edit(*:258)'
                        .'|(*:266)'
                    .')'
                    .'|atosPresupuesto(?:/([^/]++))?(*:304)'
                .')'
                .'|/e(?'
                    .'|mpleado/([^/]++)(?'
                        .'|(*:337)'
                        .'|/edit(*:350)'
                        .'|(*:358)'
                    .')'
                    .'|vento/([^/]++)(?'
                        .'|(*:384)'
                        .'|/edit(*:397)'
                        .'|(*:405)'
                    .')'
                .')'
                .'|/menu/([^/]++)(?'
                    .'|(*:432)'
                    .'|/edit(*:445)'
                    .'|(*:453)'
                .')'
                .'|/presupuesto(?:/([^/]++))?(*:488)'
                .'|/buscarR(?:/([^/]++))?(*:518)'
                .'|/salon/([^/]++)(?'
                    .'|(*:544)'
                    .'|/edit(*:557)'
                    .'|(*:565)'
                .')'
                .'|/user/([^/]++)(?'
                    .'|(*:591)'
                    .'|/edit(*:604)'
                    .'|(*:612)'
                .')'
                .'|/js/routing(?:\\.(js|json))?(*:648)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        189 => [[['_route' => 'cliente_show', '_controller' => 'App\\Controller\\ClienteController::show'], ['idcliente'], ['GET' => 0], null, false, true, null]],
        202 => [[['_route' => 'cliente_edit', '_controller' => 'App\\Controller\\ClienteController::edit'], ['idcliente'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        210 => [[['_route' => 'cliente_delete', '_controller' => 'App\\Controller\\ClienteController::delete'], ['idcliente'], ['DELETE' => 0], null, false, true, null]],
        245 => [[['_route' => 'decoracion_show', '_controller' => 'App\\Controller\\DecoracionController::show'], ['iddecoracion'], ['GET' => 0], null, false, true, null]],
        258 => [[['_route' => 'decoracion_edit', '_controller' => 'App\\Controller\\DecoracionController::edit'], ['iddecoracion'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        266 => [[['_route' => 'decoracion_delete', '_controller' => 'App\\Controller\\DecoracionController::delete'], ['iddecoracion'], ['DELETE' => 0], null, false, true, null]],
        304 => [[['_route' => 'datosPresupuesto', 'datosRecibidos' => null, '_controller' => 'App\\Controller\\PresupuestoController::datosPresupuesto'], ['datosRecibidos'], ['GET' => 0], null, false, true, null]],
        337 => [[['_route' => 'empleado_show', '_controller' => 'App\\Controller\\EmpleadoController::show'], ['idempleado'], ['GET' => 0], null, false, true, null]],
        350 => [[['_route' => 'empleado_edit', '_controller' => 'App\\Controller\\EmpleadoController::edit'], ['idempleado'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        358 => [[['_route' => 'empleado_delete', '_controller' => 'App\\Controller\\EmpleadoController::delete'], ['idempleado'], ['DELETE' => 0], null, false, true, null]],
        384 => [[['_route' => 'evento_show', '_controller' => 'App\\Controller\\EventoController::show'], ['idevento'], ['GET' => 0], null, false, true, null]],
        397 => [[['_route' => 'evento_edit', '_controller' => 'App\\Controller\\EventoController::edit'], ['idevento'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        405 => [[['_route' => 'evento_delete', '_controller' => 'App\\Controller\\EventoController::delete'], ['idevento'], ['DELETE' => 0], null, false, true, null]],
        432 => [[['_route' => 'menu_show', '_controller' => 'App\\Controller\\MenuController::show'], ['idmenu'], ['GET' => 0], null, false, true, null]],
        445 => [[['_route' => 'menu_edit', '_controller' => 'App\\Controller\\MenuController::edit'], ['idmenu'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        453 => [[['_route' => 'menu_delete', '_controller' => 'App\\Controller\\MenuController::delete'], ['idmenu'], ['DELETE' => 0], null, false, true, null]],
        488 => [[['_route' => 'presupuesto_index', 'datosRecibidos' => null, '_controller' => 'App\\Controller\\PresupuestoController::index'], ['datosRecibidos'], ['GET' => 0], null, false, true, null]],
        518 => [[['_route' => 'buscarR', 'datosRecibidos' => null, '_controller' => 'App\\Controller\\PresupuestoController::buscarR'], ['datosRecibidos'], ['GET' => 0], null, false, true, null]],
        544 => [[['_route' => 'salon_show', '_controller' => 'App\\Controller\\SalonController::show'], ['idsalon'], ['GET' => 0], null, false, true, null]],
        557 => [[['_route' => 'salon_edit', '_controller' => 'App\\Controller\\SalonController::edit'], ['idsalon'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        565 => [[['_route' => 'salon_delete', '_controller' => 'App\\Controller\\SalonController::delete'], ['idsalon'], ['DELETE' => 0], null, false, true, null]],
        591 => [[['_route' => 'user_show', '_controller' => 'App\\Controller\\UserController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        604 => [[['_route' => 'user_edit', '_controller' => 'App\\Controller\\UserController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        612 => [[['_route' => 'user_delete', '_controller' => 'App\\Controller\\UserController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        648 => [
            [['_route' => 'fos_js_routing_js', '_controller' => 'fos_js_routing.controller::indexAction', '_format' => 'js'], ['_format'], ['GET' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
