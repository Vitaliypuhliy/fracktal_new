<?php

namespace IKTO\Fracktal\ManagerBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\Security\Core\Authorization\AuthorizationCheckerInterface;

class LoginController extends Controller
{

    public function indexAction()
    {
        /** @var AuthorizationCheckerInterface $authenticationChecker */
        $authenticationChecker = $this->get('security.authorization_checker');

        if ($authenticationChecker->isGranted('ROLE_USER')) {
            return new RedirectResponse($this->generateUrl('client.tests'));
        }

        $authenticationUtils = $this->get('security.authentication_utils');

        // get the login error if there is one
        $error = $authenticationUtils->getLastAuthenticationError();

        // last username entered by the user
        $lastUsername = $authenticationUtils->getLastUsername();

        return $this->render('IktoFracktalManagerBundle:Login:index.html.twig', [
          'last_username' => $lastUsername,
          'error'         => $error,
        ]);
    }
}
