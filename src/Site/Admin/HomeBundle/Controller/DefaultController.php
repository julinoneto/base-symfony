<?php

namespace Site\Admin\HomeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('SiteAdminHomeBundle:Default:index.html.twig', array());
    }
}
