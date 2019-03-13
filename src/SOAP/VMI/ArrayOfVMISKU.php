<?php

namespace Arkitecht\B2B\SOAP\VMI;

class ArrayOfVMISKU implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var VMISKU[] $VMISKU
     */
    protected $VMISKU = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return VMISKU[]
     */
    public function getVMISKU()
    {
      return $this->VMISKU;
    }

    /**
     * @param VMISKU[] $VMISKU
     * @return \B2B\SOAP\VMI\ArrayOfVMISKU
     */
    public function setVMISKU(array $VMISKU = null)
    {
      $this->VMISKU = $VMISKU;
      return $this;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset An offset to check for
     * @return boolean true on success or false on failure
     */
    public function offsetExists($offset)
    {
      return isset($this->VMISKU[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return VMISKU
     */
    public function offsetGet($offset)
    {
      return $this->VMISKU[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param VMISKU $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->VMISKU[] = $value;
      } else {
        $this->VMISKU[$offset] = $value;
      }
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->VMISKU[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return VMISKU Return the current element
     */
    public function current()
    {
      return current($this->VMISKU);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->VMISKU);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->VMISKU);
    }

    /**
     * Iterator implementation
     *
     * @return boolean Return the validity of the current position
     */
    public function valid()
    {
      return $this->key() !== null;
    }

    /**
     * Iterator implementation
     * Rewind the Iterator to the first element
     *
     * @return void
     */
    public function rewind()
    {
      reset($this->VMISKU);
    }

    /**
     * Countable implementation
     *
     * @return VMISKU Return count of elements
     */
    public function count()
    {
      return count($this->VMISKU);
    }

}
