<?php

use Symfony\Component\Routing\Matcher\Dumper\PhpMatcherTrait;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class srcApp_KernelDevDebugContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    use PhpMatcherTrait;

    public function __construct(RequestContext $context)
    {
        $this->context = $context;
        $this->staticRoutes = [
            '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
            '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
            '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
            '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
            '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
            '/' => [[['_route' => 'app_main_index', '_controller' => 'App\\Controller\\MainController::index'], null, null, null, false, false, null]],
            '/info' => [[['_route' => 'app_main_getinfo', '_controller' => 'App\\Controller\\MainController::getInfo'], null, null, null, false, false, null]],
            '/professional' => [[['_route' => 'professional_index', '_controller' => 'App\\Controller\\ProfessionalController::index'], null, ['GET' => 0], null, true, false, null]],
            '/professional/new' => [[['_route' => 'professional_new', '_controller' => 'App\\Controller\\ProfessionalController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
            '/specialty' => [[['_route' => 'specialty_index', '_controller' => 'App\\Controller\\SpecialtyController::index'], null, ['GET' => 0], null, true, false, null]],
            '/specialty/new' => [[['_route' => 'specialty_new', '_controller' => 'App\\Controller\\SpecialtyController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        ];
        $this->regexpList = [
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
                    .'|/professional/([^/]++)(?'
                        .'|(*:194)'
                        .'|/edit(*:207)'
                        .'|(*:215)'
                    .')'
                    .'|/specialty/([^/]++)(?'
                        .'|(*:246)'
                        .'|/(?'
                            .'|edit(*:262)'
                            .'|report(*:276)'
                        .')'
                        .'|(*:285)'
                    .')'
                .')/?$}sDu',
        ];
        $this->dynamicRoutes = [
            38 => [[['_route' => '_twig_error_test', '_controller' => 'twig.controller.preview_error::previewErrorPageAction', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
            57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
            102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
            116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
            136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception::showAction'], ['token'], null, null, false, false, null]],
            149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception::cssAction'], ['token'], null, null, false, false, null]],
            159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
            194 => [[['_route' => 'professional_show', '_controller' => 'App\\Controller\\ProfessionalController::show'], ['id'], ['GET' => 0], null, false, true, null]],
            207 => [[['_route' => 'professional_edit', '_controller' => 'App\\Controller\\ProfessionalController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
            215 => [[['_route' => 'professional_delete', '_controller' => 'App\\Controller\\ProfessionalController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
            246 => [[['_route' => 'specialty_show', '_controller' => 'App\\Controller\\SpecialtyController::show'], ['id'], ['GET' => 0], null, false, true, null]],
            262 => [[['_route' => 'specialty_edit', '_controller' => 'App\\Controller\\SpecialtyController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
            276 => [[['_route' => 'specialty_report', '_controller' => 'App\\Controller\\SpecialtyController::report'], ['id'], ['GET' => 0], null, false, false, null]],
            285 => [[['_route' => 'specialty_delete', '_controller' => 'App\\Controller\\SpecialtyController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        ];
    }
}
