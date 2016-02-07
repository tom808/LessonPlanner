<?php

namespace LessonPlanner\Page;

interface PageReader
{
    public function readBySlug($slug);
}