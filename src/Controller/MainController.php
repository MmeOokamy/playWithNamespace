<?php


namespace PWN\Controller;

use PWN\Core\MotherAbstractView;
use PWN\View\MainView;

class MainController
{
/**
 * Homepage
 */
public function home(): MotherAbstractView
{
    //renvoie une nouvelle vue contenant la page d'accueil
    return new MainView(['main/home']);
}

}