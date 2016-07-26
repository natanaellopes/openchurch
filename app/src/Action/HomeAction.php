<?php

namespace App\Action;

use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use Slim\Views\Twig;

class HomeAction
{

    protected $view;

    public function __construct(Twig $view)
    {
        $this->view = $view;
    }

    public function __invoke(RequestInterface $request, ResponseInterface $response, $args)
    {
        $data = array(
            'title' => "OpenChurch",
            'text' => 'Manage your church easily with us'
        );

        return $this->view->render($response, 'home.twig', $data);
    }

}