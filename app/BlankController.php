<?php

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class BlankController extends Controller
{
    public function indexAction()
    {
        return $this->render('blank.html.twig');
    }
}
