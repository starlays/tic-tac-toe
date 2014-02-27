<?php
namespace RouterTest;
require_once "../src/Router.php";
require_once "../src/HTTPRequest.php";

class RouterTest extends \PHPUnit_Framework_TestCase
{
    public function testMathcRoute()
    {
        $router = new \tictactoe\Router();
        $httpRequest = new \tictactoe\HTTPRequest();
        
        $request = $httpRequest->processURI('http://example.com/foo?bar=baz');
        $routes  = array ('foo', 'controller'=>'foo', 'action'=>'bar', 'arg'=>'baz');

        $route  = $router->MatchRoute($request, $routes);
        $this->assertNotEmpty($route);
    }
}
