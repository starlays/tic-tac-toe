<?php
/**
 * tic-tac-toe - PHP and MariaDB web based game
 *
 * @author      Florentin Lazar 
 * @copyright   2014 Florentin Lazar
 * @link        https://github.com/starlays/tic-tac-toe
 * @license     https://github.com/starlays/tic-tac-toe/LICENSE.txt
 * @version     0.1
 *
 * MIT LICENSE
 *
 * Permission is hereby granted, free of charge, to any person obtaining
 * a copy of this software and associated documentation files (the
 * "Software"), to deal in the Software without restriction, including
 * without limitation the rights to use, copy, modify, merge, publish,
 * distribute, sublicense, and/or sell copies of the Software, and to
 * permit persons to whom the Software is furnished to do so, subject to
 * the following conditions:
 *
 * The above copyright notice and this permission notice shall be
 * included in all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND,
 * EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF
 * MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND
 * NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE
 * LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION
 * OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION
 * WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
 */
namespace tictactoe;

/**
 * Router
 * @package tic-tac-toe
 */
class Router
{
    /**
     * @var array holder for the predifined routes stack
     */
    protected $routes = array();
    
    /**
     * Match the request with named Routes
     *
     * @param $routes the predefined array stack
     * @param \tictactoe\HTTPRequest object
     * @throws \RuntimeException  in case of unexpected error
     */
    public function MatchRoute(HTTPRequest $request, $routes = array())
    {
        //return $this;
    }

    /**
     * Dispatch the request
     * 
     * @param \tictactoe\HTTPRequest object
     * @throws \RuntimeException in case of error
     */
    protected function Dispatch()
    {
    }
}
