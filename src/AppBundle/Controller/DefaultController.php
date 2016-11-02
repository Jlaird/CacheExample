<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {

        // replace this example code with whatever you need
        $response = $this->render('default/index.html.twig', [
            'base_dir' => time()
        ]);

        $response->setSharedMaxAge(30);
        //$response->setEtag(34);
        $response->setETag(md5($response->getContent()));
        $response->setMaxAge(10);
        //$response->isNotModified($request);
        $response->setPublic();
        //$response->headers->addCacheControlDirective('must-revalidate', true);
        //$response->mustRevalidate();
        //sleep(8);

        return $response;
    }
}
