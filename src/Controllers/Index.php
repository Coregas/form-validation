<?php
namespace Emotion\Controllers;

class Index
{

    public function mainAction()
    {
        echo file_get_contents('src/Views/main.php');
    }
}