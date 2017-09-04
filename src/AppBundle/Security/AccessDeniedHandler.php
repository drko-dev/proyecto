<?php

namespace AppBundle\Security;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;
use Symfony\Component\Security\Http\Authorization\AccessDeniedHandlerInterface;
//use Symfony\Component\Translation\Translator;

class AccessDeniedHandler implements AccessDeniedHandlerInterface
{
    public function handle(Request $request, AccessDeniedException $accessDeniedException)
    {
        // ...
        //$translate = new Translator($request->getLocale());
    	//$content = $translate->trans('access-denied');
    	$content = 'area restringida';
        return new Response($content, 403);
    }
}