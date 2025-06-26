<?php

namespace Core;

class Controller
{
    protected string $layout = 'default';
    protected string $title = 'default title';

    /**
     * Renders the view with the specified data
     *
     * @return Page object contains data for rendering the view
     */
    protected function render(string $view, $data): Page
    {
        return new Page($this->layout, $this->title, $view, $data);
    }
}