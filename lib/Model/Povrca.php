<?php

namespace Model;

class Povrca
{
    private $id;
    private $price;
    private $name;

//    public function __construct($id,$name,$price)
//    {
//        $this->name = $name;
//        $this->price = $price;
//        $this->id = $id;
//    }
    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getPrice()
    {
        return $this->price;    }

    /**
     * @param mixed $price
     */
    public function setPrice($price)
    {
        $this->price = $price;
    }

    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }
//    public function __toString()
//    {
//        return $this->getName();
//    }

}