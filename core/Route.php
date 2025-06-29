<?php

namespace Core;

class Route
{
    private string $path;
    private string $controller;
    private string $action;

    public function __construct($path, $controller, $action)
    {
        $this->path = $path;
        $this->controller = $controller;
        $this->action = $action;
    }

    /**
     * Give a set of getters for a property in a class
     *
     * @return mixed depending on which value the property contains
     */
    public function __get(string $propertyName)
    {
        return $this->$propertyName;
    }
}