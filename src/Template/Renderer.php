<?php

namespace LessonPlanner\Template;

interface Renderer
{
    public function render($template, $data = []);
}