<?php

$injector = new \Auryn\Injector;

$injector->alias('Http\Request', 'Http\HttpRequest');
$injector->share('Http\HttpRequest');
$injector->define('Http\HttpRequest', [
    ':get' => $_GET,
    ':post' => $_POST,
    ':cookies' => $_COOKIE,
    ':files' => $_FILES,
    ':server' => $_SERVER,
]);

$injector->alias('Http\Response', 'Http\HttpResponse');
$injector->share('Http\HttpResponse');

$injector->alias('LessonPlanner\Template\Renderer', 'LessonPlanner\Template\TwigRenderer');
$injector->define('Mustache_Engine', [
    ':options' => [
        'loader' => new Mustache_Loader_FilesystemLoader(dirname(__DIR__) . '/templates', [
            'extension' => '.html',
        ]),
    ],
]);

$injector->define('LessonPlanner\Page\FilePageReader', [
    ':pageFolder' => __DIR__ . '/../pages',
]);

$injector->alias('LessonPlanner\Page\PageReader', 'LessonPlanner\Page\FilePageReader');
$injector->share('LessonPlanner\Page\FilePageReader');

$injector->delegate('Twig_Environment', function() use ($injector) {
    $loader = new Twig_Loader_Filesystem(dirname(__DIR__) . '/templates');
    $twig = new Twig_Environment($loader);
    return $twig;
});

$injector->alias('LessonPlanner\Template\FrontendRenderer', 'LessonPlanner\Template\FrontendTwigRenderer');

$injector->alias('LessonPlanner\Menu\MenuReader', 'LessonPlanner\Menu\ArrayMenuReader');
$injector->share('LessonPlanner\Menu\ArrayMenuReader');

return $injector;