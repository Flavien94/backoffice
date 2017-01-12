<?php

namespace MyApp\CoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('MyAppCoreBundle:Default:index.html.twig');
    }
}
