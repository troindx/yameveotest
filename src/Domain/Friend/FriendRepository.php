<?php
namespace Domain\Friend;

interface FriendRepository
{
    public function findAll($limit=null, $offset=null);
}