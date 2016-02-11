<?php

return [
    ['GET', '/', ['LessonPlanner\Controllers\Homepage', 'show']],
    ['GET', '/calendar', ['LessonPlanner\Controllers\Calendar', 'show']],
    ['GET', '/{slug}', ['LessonPlanner\Controllers\Page', 'show']]
];