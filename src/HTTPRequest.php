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
 * HTTPRequest
 * @package tic-tac-toe
 */
class HTTPRequest
{
    /**
     * @var array processed HTTP request holder
     */
    protected $processedReq= array ();

    /**
     * @var string controller name holder
     */
    protected $controller = NULL;

    /**
     * @var string method name holder
     */
    protected $method = NULL;

    /**
     * @var array parameters holder
     */
    protected $parameters = array();

    /**
     * Process the request URI and extract the /controller/method/parameters
     *
     * @param  string $requestURI  The HTTP request
     * @return object HTTPRequest object instance 
     * @throws \RuntimeException If no URI supplied
     */
    public function processURI($requestURI)
    {
        //return $this;
    }

    /**
     * Get the requested route
     *
     * @return array $processedReq
     */
    public function getReqRoute()
    {
        return $this->processedReq;
    }
}
