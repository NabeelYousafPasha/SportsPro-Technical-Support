<?php

class Controller
{
    var $vars = [];
    var $layout = "index";

    public function set($data)
    {
        $this->vars = array_merge($this->vars, $data);
    }

    // viewname
    public function render($filename)
    {
        extract($this->vars);
        ob_start();
        require(ROOT . "Views/" . lcfirst(str_replace('Controller', '', get_class($this))) . '/' . $filename . '.php');
        $content_for_layout = ob_get_clean();

        if ($this->layout == false)
        {
            $content_for_layout;
        }
        else
        {
            require(ROOT . "Views/layouts/" . $this->layout . '.php');
        }
    }


    public function redirect($controller = '')
    {
        if ($controller) {
            header("Location: " . WEBROOT . $controller);
        }

        header("Location: ".WEBROOT);
    }


    public function logout() {
        session_destroy();

        // redirect
        $this->redirect();
    }


    private function secure_input($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    protected function secure_form($form)
    {
        foreach ($form as $key => $value)
        {
            $form[$key] = $this->secure_input($value);
        }
    }

}