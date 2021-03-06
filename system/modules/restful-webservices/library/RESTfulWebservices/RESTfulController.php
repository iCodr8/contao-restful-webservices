<?php

/**
 * Extension for Contao Open Source CMS
 *
 * Copyright (c) 2014 Daniel Kiesel
 *
 * @package RESTfulWebservices
 * @link    https://github.com/craffft/contao-restful-webservices
 * @license http://www.gnu.org/licenses/lgpl-3.0.html LGPL
 */

/**
 * Namespace
 */
namespace RESTfulWebservices;

/**
 * Class RESTfulController
 *
 * @copyright  Daniel Kiesel 2014
 * @author     Daniel Kiesel <daniel@craffft.de>
 */
abstract class RESTfulController extends \Controller
{
    /**
     * Is called on a GET request.
     *
     * @access public
     * @return void
     */
    public function get()
    {
        $response = new JsonResponse();
        $response->sendError(404);
    }

    /**
     * Is called on a PUT request.
     *
     * @access public
     * @return void
     */
    public function put()
    {
        $response = new JsonResponse();
        $response->sendError(404);
    }

    /**
     * Is called on a POST request.
     *
     * @access public
     * @return void
     */
    public function post()
    {
        $response = new JsonResponse();
        $response->sendError(404);
    }

    /**
     * Is called on a DELETE request.
     *
     * @access public
     * @return void
     */
    public function delete()
    {
        $response = new JsonResponse();
        $response->sendError(404);
    }
}
