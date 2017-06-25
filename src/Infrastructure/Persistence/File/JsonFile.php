<?php
namespace Infrastructure\Persistence\File;

class JsonFile implements File
{
    /**
     * @var string
     */
    protected $fileName;

    /**
     * JsonFile constructor.
     * @param $fileName
     */
    public function __construct($fileName)
    {
        $this->fileName = $fileName;
    }

    /**
     * TODO - improve error handling
     * @return array
     */
    public function getContent()
    {
        return json_decode(file_get_contents($this->fileName), true);
    }
}