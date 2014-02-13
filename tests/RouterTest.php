<?php
class RouterTest.php extends PHPUnit_Framework_TestCase
{
    public function testGetRoute()
    {
        $router = new \Tic-Tac-Toe\Router;
        $route  = $router->route('GET route');
        
        $this->assertNotEmpty($route);
    }
}
