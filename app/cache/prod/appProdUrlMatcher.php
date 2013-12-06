<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        // dvg_server_homepage
        if (0 === strpos($pathinfo, '/amazon') && preg_match('#^/amazon/(?P<keywords>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'dvg_server_homepage')), array (  '_controller' => 'Dvg\\ServerBundle\\Controller\\DefaultController::getAmazonProductAction',));
        }

        // dvg_server_accesbase
        if (0 === strpos($pathinfo, '/famille') && preg_match('#^/famille/(?P<pConcept>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'dvg_server_accesbase')), array (  '_controller' => 'Dvg\\ServerBundle\\Controller\\DefaultController::familleAction',));
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
