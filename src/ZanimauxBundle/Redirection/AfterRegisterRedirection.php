<?php
/**
 * Created by PhpStorm.
 * User: BelhassenLimam
 * Date: 07/02/2018
 * Time: 23:14
 */

namespace ZanimauxBundle\Redirection;

use FOS\UserBundle\Event\FilterUserResponseEvent;
use FOS\UserBundle\FOSUserEvents;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\Routing\Router;

class AfterRegisterRedirection implements EventSubscriberInterface
{ private $router;

    public function __construct(Router $router)
    {
        $this->router = $router;
    }

    public static function getSubscribedEvents()
    {
        return [FOSUserEvents::REGISTRATION_COMPLETED => 'onRegistrationConfirm'];
    }

    public function onRegistrationConfirm(FilterUserResponseEvent $event)
    {
        /** @var RedirectResponse $response */
        $response = $event->getResponse();
        $response->setTargetUrl($this->router->generate('affiche'));
    }

}