<?php
// src/Blogger/BlogBundle/Controller/PageController.php

namespace Blogger\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class PageController extends Controller
{
    public function indexAction()
    {
        return $this->render('BloggerBundle:Page:index.html.twig');
    }

    public function aboutAction()
    {
        return $this->render('BloggerBundle:Page:about.html.twig');
    }

    public function themesAction()
    {
        return $this->render('BloggerBundle:Page:themes.html.twig');
    }

}
