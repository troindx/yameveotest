<?php
/**
 * Created by PhpStorm.
 * User: yameveo
 * Date: 21/06/2017
 * Time: 11:03
 */

namespace Infrastructure\Persistence\File;

use Domain\Friend\FriendRepository;

class FileFriendRepository implements FriendRepository
{
    /**
     * @var array
     */
    protected $data;

    /**
     * FileFriend constructor.
     * @param File $file
     */
    public function __construct(File $file)
    {
        $this->data = $file->getContent();
    }

    public function findAll($limit=null, $offset=null)
    {
        return array_slice($this->data['friends'], $offset, $limit);
    }
}