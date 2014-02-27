<?php
namespace HTTPRequestTest;
require_once "../src/HTTPRequest.php";

class HTTPRequest extends \PHPUnit_Framework_TestCase
{
    public function testProcessURI()
    {
        $httpRequest = new \tictactoe\HTTPRequest();
        $result = $httpRequest->processURI('http://example.com/foo?bar=baz');

        $this->assertEquals($httpRequest, $result);
    }

    public function testGetRequestedRoute()
    {
        $httpRequest = new \tictactoe\HTTPRequest();
        $route = $httpRequest->getReqRoute();

        $this->assertEquals(3, count($route));
    }

    /**
     * @expectedException RuntimeException
     */
    public function testException()
    {
        $this->setExpectedException('\RuntimeException');

        $httpRequest = new \tictactoe\HTTPRequest();
        $result = $httpRequest->processURI('!'); // <-- Invalid URI
    }
}
