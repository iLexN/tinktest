<?php

namespace Tink\Controller;

use Slim\Http\Request;
use Slim\Http\Response;

abstract class AbstractController
{
    /**
     * @var \Slim\Container
     */
    protected $container;
    
    const JSON_RESPONSE = 'Json Out Put';
    const REDIRECT_RESPONSE = 'Redirect';
    
    public function __construct(\Slim\Container $container)
    {
        $this->container = $container;
    }
    
    public function __invoke(Request $request, Response $response, array $args)
    {
        $result = $this->action($request, $args);

        return $this->getResponse($response, $result);
    }
    
    private function getResponse(Response $response, ControllerResult $result)
    {
        switch ($result->getStatus()) {
            case self::JSON_RESPONSE:
                $response->getBody()->write(\json_encode($result->getOutput()));
                return $response;
        }
    }
    
    abstract protected function action(Request $request, array $args);
}
