<?php

namespace Cosmos\Admin\TemaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('CosmosAdminTemaBundle:Default:index.html.twig', array('name' => $name));
    }
}
