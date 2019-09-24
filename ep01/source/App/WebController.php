<?php

namespace Source\App;

class WebController
{
    public function home($data)
    {
        echo "home page temporary";
        var_dump($data);
    }

    public function contact($data)
    {
        echo "Método Contato";
        var_dump($data);
    }

    public function post($data)
    {
        echo "Método post";
        var_dump($data);
    }

    public function blog($data)
    {
        echo "Método Blog";
        var_dump($data);
    }

    public function artigo($data)
    {
        echo "Método Article";
        var_dump($data);
    }

    public function category($data)
    {
        echo "Método Category";
        var_dump($data);
    }

    public function error($data)
    {
        echo "<h1>Erro {$data["errcode"]}</h1>";
        var_dump($data);
    }
}
