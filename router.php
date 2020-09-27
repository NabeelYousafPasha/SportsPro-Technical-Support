<?php

class Router
{

    static public function parse($url, $request)
    {
        $url = trim($url);

        $explode_url = explode('/', $url);
        $explode_url = array_slice($explode_url, 2);

        $request->controller = $explode_url[0] ?: "Home";
        $request->action = isset($explode_url[1]) ? $explode_url[1] : "index";
        $request->params = array_slice($explode_url, 2) ?: [];

    }
}
?>