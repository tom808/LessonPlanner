<?php

namespace LessonPlanner\Controllers;

use Http\Request;
use Http\Response;
use LessonPlanner\Template\FrontendRenderer;

class Calendar
{
    private $request;
    private $response;
    private $renderer;

    public function __construct(Request $request, Response $response, FrontendRenderer $renderer)
    {
        $this->request = $request;
        $this->response = $response;
        $this->renderer = $renderer;

    }

    public function show()
    {
        //TODO this data needs to comes from an actual source
        $data = [
            'name' => $this->request->getParameter('name', 'stranger')
        ];
        $html = $this->renderer->render('Calendar', $data);
        $this->response->setContent($html);
    }
}