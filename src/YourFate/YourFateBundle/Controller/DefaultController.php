<?php

namespace YourFate\YourFateBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('YourFateYourFateBundle:Default:index.html.twig', array('name' => $name));
    }
}
