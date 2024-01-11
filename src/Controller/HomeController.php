<?php
namespace App\Controller;



use Core\Controller\Controller;
use Core\Http\Response;

class HomeController extends Controller
{
    public function index():Response
    {
        echo "HomeController : index()";
        echo "<br>";
        return $this->render("home/index",["pageTitle"=>"Welcome to the framework"]);
    }
}
