<?php

/**
 * main app file
 */

class App
{
    protected $controller = "home";
    protected $method = "index";
    protected $params = array();

    public function __construct()
    {
        echo '<pre>';
        print_r($this->getURL());
    }

    private function getURL()
    {
        return explode("/", filter_var(trim($_GET['url'], "/")), FILTER_SANITIZE_URL);
    }
}