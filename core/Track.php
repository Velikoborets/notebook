<?php

namespace Core;

class Track
{
    private string $controller;
    private string $action;
    private string $params;

    public function __construct($controller, $action, $params)
    {
        $this->controller = $controller;
        $this->action = $action;
        $this->params = $params;
    }

    /**
     * Give a set of getters for a property in a class
     *
     * @return mixed depending on which value the property contains
     */
    public function __get($property)
    {
        return $this->$property;
    }
}