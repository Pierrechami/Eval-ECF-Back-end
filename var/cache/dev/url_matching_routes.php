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
        '/' => [[['_route' => 'app', '_controller' => 'App\\Controller\\ACCUEIL\\HomePageController::index'], null, null, null, false, false, null]],
        '/search-results-accueil' => [[['_route' => 'search-accueil', '_controller' => 'App\\Controller\\ACCUEIL\\HomePageController::searchArticle'], null, null, null, false, false, null]],
        '/admin/register' => [[['_route' => 'adminregister_admin', '_controller' => 'App\\Controller\\ADMIN\\AdminController::register'], null, null, null, false, false, null]],
        '/admin/register/infos' => [[['_route' => 'adminregister_admin_infos', '_controller' => 'App\\Controller\\ADMIN\\AdminController::registerInfos'], null, null, null, false, false, null]],
        '/admin' => [[['_route' => 'consultant_index', '_controller' => 'App\\Controller\\ADMIN\\ConsultantController::index'], null, ['GET' => 0], null, true, false, null]],
        '/candidate' => [[['_route' => 'candidate_index', '_controller' => 'App\\Controller\\CANDIDATE\\CandidateController::index'], null, ['GET' => 0], null, true, false, null]],
        '/candidate/new' => [[['_route' => 'candidate_new', '_controller' => 'App\\Controller\\CANDIDATE\\CandidateController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/candidate/job/liste' => [[['_route' => 'candidate_job_index', '_controller' => 'App\\Controller\\CANDIDATE\\CandidateJobController::index'], null, ['GET' => 0], null, false, false, null]],
        '/candidate/job/search-results' => [[['_route' => 'search', '_controller' => 'App\\Controller\\CANDIDATE\\CandidateJobController::searchArticle'], null, null, null, false, false, null]],
        '/candidate/job/to-apply' => [[['_route' => 'to_apply', '_controller' => 'App\\Controller\\CANDIDATE\\CandidateJobController::toApply'], null, null, null, false, false, null]],
        '/consultant/to-apply-job-consultant' => [[['_route' => 'to_apply_job', '_controller' => 'App\\Controller\\CONSULTANT\\JobsCandidatesController::toApplyConsulant'], null, null, null, false, false, null]],
        '/consultant' => [[['_route' => 'user_index', '_controller' => 'App\\Controller\\CONSULTANT\\UserController::index'], null, ['GET' => 0], null, true, false, null]],
        '/consultant/new' => [[['_route' => 'user_new', '_controller' => 'App\\Controller\\CONSULTANT\\UserController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\ENREGISTREMENT\\RegistrationController::register'], null, null, null, false, false, null]],
        '/recruiter/job' => [[['_route' => 'job_index', '_controller' => 'App\\Controller\\JOB\\JobController::index'], null, ['GET' => 0], null, true, false, null]],
        '/recruiter/job/new' => [[['_route' => 'job_new', '_controller' => 'App\\Controller\\JOB\\JobController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/login' => [[['_route' => 'login', '_controller' => 'App\\Controller\\LOGIN\\LoginController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'logout', '_controller' => 'App\\Controller\\LOGIN\\LoginController::logout'], null, null, null, false, false, null]],
        '/recruiter' => [[['_route' => 'recruiter_index', '_controller' => 'App\\Controller\\RECRUITEUR\\RecruiterController::index'], null, ['GET' => 0], null, true, false, null]],
        '/recruiter/new' => [[['_route' => 'recruiter_new', '_controller' => 'App\\Controller\\RECRUITEUR\\RecruiterController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|wdt/([^/]++)(*:24)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:69)'
                            .'|router(*:82)'
                            .'|exception(?'
                                .'|(*:101)'
                                .'|\\.css(*:114)'
                            .')'
                        .')'
                        .'|(*:124)'
                    .')'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:159)'
                .')'
                .'|/admin/([^/]++)(?'
                    .'|/edit(*:191)'
                    .'|(*:199)'
                .')'
                .'|/c(?'
                    .'|andidate/(?'
                        .'|([^/]++)(?'
                            .'|(*:236)'
                            .'|/edit(*:249)'
                            .'|(*:257)'
                        .')'
                        .'|job/([^/]++)/edit(*:283)'
                    .')'
                    .'|onsultant(?'
                        .'|/([^/]++)(?'
                            .'|/edit(?'
                                .'|/([^/]++)(*:333)'
                                .'|(*:341)'
                            .')'
                            .'|(*:350)'
                        .')'
                        .'|jobs/([^/]++)/edit(*:377)'
                    .')'
                .')'
                .'|/recruiter/(?'
                    .'|job/([^/]++)(?'
                        .'|(*:416)'
                        .'|/edit(*:429)'
                        .'|(*:437)'
                    .')'
                    .'|([^/]++)(?'
                        .'|/edit(*:462)'
                        .'|(*:470)'
                    .')'
                    .'|to\\-apply(*:488)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        24 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        69 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        82 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        101 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        114 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        124 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        159 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        191 => [[['_route' => 'consultant_edit', '_controller' => 'App\\Controller\\ADMIN\\ConsultantController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        199 => [[['_route' => 'consultant_delete', '_controller' => 'App\\Controller\\ADMIN\\ConsultantController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        236 => [[['_route' => 'candidate_show', '_controller' => 'App\\Controller\\CANDIDATE\\CandidateController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        249 => [[['_route' => 'candidate_edit', '_controller' => 'App\\Controller\\CANDIDATE\\CandidateController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        257 => [[['_route' => 'candidate_delete', '_controller' => 'App\\Controller\\CANDIDATE\\CandidateController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        283 => [[['_route' => 'candidate_job_edit', '_controller' => 'App\\Controller\\CANDIDATE\\CandidateJobController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        333 => [[['_route' => 'approving_candidate_job_edit', '_controller' => 'App\\Controller\\CONSULTANT\\JobsCandidatesController::Approving'], ['id', 'cid'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        341 => [[['_route' => 'user_edit', '_controller' => 'App\\Controller\\CONSULTANT\\UserController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        350 => [
            [['_route' => 'user_show', '_controller' => 'App\\Controller\\CONSULTANT\\UserController::show'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => 'user_delete', '_controller' => 'App\\Controller\\CONSULTANT\\UserController::delete'], ['id'], ['POST' => 0], null, false, true, null],
        ],
        377 => [[['_route' => 'job_edit_consultant', '_controller' => 'App\\Controller\\CONSULTANT\\UserController::editJobs'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        416 => [[['_route' => 'job_show', '_controller' => 'App\\Controller\\JOB\\JobController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        429 => [[['_route' => 'job_edit', '_controller' => 'App\\Controller\\JOB\\JobController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        437 => [[['_route' => 'job_delete', '_controller' => 'App\\Controller\\JOB\\JobController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        462 => [[['_route' => 'recruiter_edit', '_controller' => 'App\\Controller\\RECRUITEUR\\RecruiterController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        470 => [[['_route' => 'recruiter_delete', '_controller' => 'App\\Controller\\RECRUITEUR\\RecruiterController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        488 => [
            [['_route' => 'to_apply_recruiter', '_controller' => 'App\\Controller\\RECRUITEUR\\RecruiterController::toApplyRecruiter'], [], null, null, false, false, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
