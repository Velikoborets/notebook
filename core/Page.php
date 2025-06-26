<?php

namespace Core;

class Page
{
    private string $layout;
    private string $title;
    private string $view;
    private string $data;

    public function __construct($layout, $title, $view, $data)
    {
        $this->layout = $layout;
        $this->title  = $title;
        $this->view   = $view;
        $this->data   = $data;
    }

    public function __get($property)
    {
        return $this->$property;
    }
}