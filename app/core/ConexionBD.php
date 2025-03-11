<?php

namespace App\Core;

class ConexionBD
{
    function __construct()
    {
        if(!($link=mysqli_connect("localhost","root","", "hermonia")))
        {
            echo "error conectando a la base de datos";
            exit();
        }
        return $link;
    }
}

?>