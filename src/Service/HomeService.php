<?php

namespace App\Service;

class HomeService
{
    public function getNomUrl(): string 
    {
        //test si le paramètre get nom existe
        if (isset($_GET["nom"])) {
            return $_GET["nom"];
        }
        return "";
    }
}