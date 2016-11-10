<?php

namespace Lifeinabash\OAuth2ServerBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;


class DefaultController extends Controller
{

    public function indexAction(Request $request)
    {
        return new Response("Life In A Bash's OAuth2 Server Bundle index");
    }
}
