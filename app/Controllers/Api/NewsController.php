<?php

namespace App\Controllers\Api;

use App\Controllers\Controller;
use Psr\Http\Message\{
    ServerRequestInterface as Request,
    ResponseInterface as Response
};

class NewsController extends Controller
{
    public function show(Request $request, Response $response, $args)
    {
        return $response->withJson(
            $this->c->services->get($args['service'])
        );
    }
}
