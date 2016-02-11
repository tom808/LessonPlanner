<?php

namespace LessonPlanner\Menu;

class ArrayMenuReader implements MenuReader
{
    public function readMenu()
    {
        return [
			    ['href' => '/', 'text' => 'Homepage'],
			    ['href' => '/calendar', 'text' => 'Calendar'],
        ];
    }
}