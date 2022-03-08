<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
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
                .'|/admin/([^/]++)(?'
                    .'|/edit(*:30)'
                    .'|(*:37)'
                .')'
                .'|/c(?'
                    .'|andidate/(?'
                        .'|([^/]++)(?'
                            .'|(*:73)'
                            .'|/edit(*:85)'
                            .'|(*:92)'
                        .')'
                        .'|job/([^/]++)/edit(*:117)'
                    .')'
                    .'|onsultant(?'
                        .'|/([^/]++)(?'
                            .'|/edit(?'
                                .'|/([^/]++)(*:167)'
                                .'|(*:175)'
                            .')'
                            .'|(*:184)'
                        .')'
                        .'|jobs/([^/]++)/edit(*:211)'
                    .')'
                .')'
                .'|/recruiter/(?'
                    .'|job/([^/]++)(?'
                        .'|(*:250)'
                        .'|/edit(*:263)'
                        .'|(*:271)'
                    .')'
                    .'|([^/]++)(?'
                        .'|/edit(*:296)'
                        .'|(*:304)'
                    .')'
                    .'|to\\-apply(*:322)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        30 => [[['_route' => 'consultant_edit', '_controller' => 'App\\Controller\\ADMIN\\ConsultantController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        37 => [[['_route' => 'consultant_delete', '_controller' => 'App\\Controller\\ADMIN\\ConsultantController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        73 => [[['_route' => 'candidate_show', '_controller' => 'App\\Controller\\CANDIDATE\\CandidateController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        85 => [[['_route' => 'candidate_edit', '_controller' => 'App\\Controller\\CANDIDATE\\CandidateController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        92 => [[['_route' => 'candidate_delete', '_controller' => 'App\\Controller\\CANDIDATE\\CandidateController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        117 => [[['_route' => 'candidate_job_edit', '_controller' => 'App\\Controller\\CANDIDATE\\CandidateJobController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        167 => [[['_route' => 'approving_candidate_job_edit', '_controller' => 'App\\Controller\\CONSULTANT\\JobsCandidatesController::Approving'], ['id', 'cid'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        175 => [[['_route' => 'user_edit', '_controller' => 'App\\Controller\\CONSULTANT\\UserController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        184 => [
            [['_route' => 'user_show', '_controller' => 'App\\Controller\\CONSULTANT\\UserController::show'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => 'user_delete', '_controller' => 'App\\Controller\\CONSULTANT\\UserController::delete'], ['id'], ['POST' => 0], null, false, true, null],
        ],
        211 => [[['_route' => 'job_edit_consultant', '_controller' => 'App\\Controller\\CONSULTANT\\UserController::editJobs'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        250 => [[['_route' => 'job_show', '_controller' => 'App\\Controller\\JOB\\JobController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        263 => [[['_route' => 'job_edit', '_controller' => 'App\\Controller\\JOB\\JobController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        271 => [[['_route' => 'job_delete', '_controller' => 'App\\Controller\\JOB\\JobController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        296 => [[['_route' => 'recruiter_edit', '_controller' => 'App\\Controller\\RECRUITEUR\\RecruiterController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        304 => [[['_route' => 'recruiter_delete', '_controller' => 'App\\Controller\\RECRUITEUR\\RecruiterController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        322 => [
            [['_route' => 'to_apply_recruiter', '_controller' => 'App\\Controller\\RECRUITEUR\\RecruiterController::toApplyRecruiter'], [], null, null, false, false, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
