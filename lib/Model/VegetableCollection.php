<?php

namespace Model;

class VegetableCollection implements \ArrayAccess, \IteratorAggregate
{
    private $vegetables;

    /**
     * @param povrca
     */
    public function __construct(array $vegetables){
        $this->vegetables = $vegetables;
    }


    public function offsetExists($offset)
    {
        return array_key_exists($offset, $this->vegetables);
    }
    public function offsetGet($offset)
    {
        return $this->vegetables[$offset];
    }
    public function offsetSet($offset, $value)
    {
        $this->vegetables[$offset] = $value;
    }
    public function offsetUnset($offset)
    {
        unset($this->vegetables[$offset]);
    }
    public function getIterator()
    {
        return new \ArrayIterator($this->vegetables);
    }

}