<?php

namespace Site\Admin\TemaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('SiteAdminTemaBundle:Default:index.html.twig', array('name' => $name));
    }
}
