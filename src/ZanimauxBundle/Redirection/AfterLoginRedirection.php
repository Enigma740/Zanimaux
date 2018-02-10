<?php
/**
 * Created by PhpStorm.
 * User: Bassem
 * Date: 30/01/2018
 * Time: 22:15
 */

namespace ZanimauxBundle\Redirection;


use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\RouterInterface;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Symfony\Component\Security\Http\Authentication\AuthenticationSuccessHandlerInterface;

class AfterLoginRedirection implements AuthenticationSuccessHandlerInterface
{


    private $router;

    /**
     * @param RouterInterface $router
     */
    public function __construct(RouterInterface $router)
    {
        $this->router = $router;
    }

    /**
     * This is called when an interactive authentication attempt succeeds. This
     * is called by authentication listeners inheriting from
     * AbstractAuthenticationListener.
     *
     * @return Response never null
     */
    public function onAuthenticationSuccess(Request $request, TokenInterface $token)
    {
        // Get list of roles for current user
        $roles = $token->getRoles();
        // Tranform this list in array
        $rolesTab = array_map(function ($role) {
            return $role->getRole();
        }, $roles);
        // If is a admin or super admin we redirect to the backoffice area
        if (in_array('ROLE_SUPER_ADMIN', $rolesTab, true))
            $redirection = new RedirectResponse($this->router->generate('loginadmin'));
        // otherwise, if is a commercial user we redirect to the crm area
        elseif (in_array('ROLE_CLIENT', $rolesTab, true))
            $redirection = new RedirectResponse($this->router->generate('redirect'));
        elseif (in_array('ROLE_DRESSEUR', $rolesTab, true))
            $redirection = new RedirectResponse($this->router->generate('petSitterpage'));
        elseif (in_array('ROLE_VETERINAIRE', $rolesTab, true))
            $redirection = new RedirectResponse($this->router->generate('redirect'));
        elseif (in_array('ROLE_PROPRIETAIRE_MAGASIN', $rolesTab, true))
            $redirection = new RedirectResponse($this->router->generate('redirect'));
        elseif (in_array('ROLE_PROPRIETAIRE_REFUGE', $rolesTab, true))
            $redirection = new RedirectResponse($this->router->generate('redirect'));
        // otherwise we redirect user to the member area
        else
            $redirection = new RedirectResponse($this->router->generate('fos_user_registration_register'));
        return $redirection;
    }
}
