<?php
namespace Domain\Friend;

class Friend
{
    protected $name;
    protected $age;
    protected $city;
    protected $country;
    protected $status;
    protected $image;

    public function __construct($name, $age, $city, $country, $status, $image)
    {
        $this->name = $name;
        $this->age = $age;
        $this->city = $city;
        $this->country = $country;
        $this->status = $status;
        $this->image = $image;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return mixed
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * @return mixed
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * @return mixed
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * @return mixed
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @return mixed
     */
    public function getImage()
    {
        return $this->image;
    }
}