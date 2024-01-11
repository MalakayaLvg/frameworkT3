<?php
namespace Core\Controller;



use Core\Http\Response;

abstract class Controller
{
    private Response $response;

    public function __construct()
    {
        $this->response = new Response();
    }

    public function redirect(string $route = null)
    {
        return $this->response->redirect($route);
    }

    public function render($nomDeTemplate,$donnees)
    {
        echo "Controller : render()";
        echo "<br>";
        return $this->response->render($nomDeTemplate,$donnees);
    }
}
