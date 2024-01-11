<?php

namespace Core\View;

class View
{
    public static function render($nomDeTemplate,$donnees)
    {
        echo "View : render($nomDeTemplate)";
        echo "<br>";
        ob_start();
        extract($donnees);

        require_once "../templates/$nomDeTemplate.html.php";

        $content = ob_get_clean();
        var_dump($content);

        if(!isset($pageTitle)){$pageTitle= "Pas de titre";}

        ob_start();
        require_once "../templates/base.html.php";
        $test = ob_get_clean();
        var_dump($test);



    }
}
