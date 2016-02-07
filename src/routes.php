<?php

return [
    ['GET', '/', ['LessonPlanner\Controllers\Homepage', 'show']],
    ['GET', '/{slug}', ['LessonPlanner\Controllers\Page', 'show']]
];