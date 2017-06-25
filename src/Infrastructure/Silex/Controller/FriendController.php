<?php

namespace Infrastructure\Silex\Controller;

use Application\UseCase\FriendsUseCase;
use Application\Twig\TwigTemplating;
//use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;




class FriendController
{
    /**
     * @var FriendsUseCase
     */
    protected $friendsUseCase;
    protected $twig;

    public function __construct(FriendsUseCase $friendsUseCase)
    {
        $this->friendsUseCase = $friendsUseCase;
        $this->twig = new TwigTemplating("friends");
    }

    public function indexAction(Request $request)
    {  
        $this->twig->vars->limit = (is_numeric($request->get('limit'))) ? $request->get('limit') : 5;
        $this->twig->vars->offset = (is_numeric($request->get('offset'))) ? $request->get('offset') : 0;
        $friends = $this->friendsUseCase->execute(
            $this->twig->vars->limit,
            $this->twig->vars->offset
        );
        $this->twig->vars->friends = $friends;
        return $this->twig->render();
        //return new JsonResponse($friends);
    }
}