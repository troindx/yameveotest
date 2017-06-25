<?php
namespace Application\UseCase;

use Domain\Friend\FriendRepository;
class FriendsUseCase
{
    /**
     * @var FriendRepository
     */
    protected $friendRepository;

    /**
     * FriendsUseCase constructor.
     * @param FriendRepository $friendRepository
     */
    public function __construct(
        FriendRepository $friendRepository
    )
    {
        $this->friendRepository = $friendRepository;
    }

    /**
     * @param $limit
     * @param $offset
     */
    public function execute($limit=null, $offset=null)
    {
        return $this->friendRepository->findAll($limit, $offset);
    }
}