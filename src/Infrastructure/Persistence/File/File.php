<?php

namespace Infrastructure\Persistence\File;

interface File
{
    /**
     * @return array
     */
    public function getContent();
}