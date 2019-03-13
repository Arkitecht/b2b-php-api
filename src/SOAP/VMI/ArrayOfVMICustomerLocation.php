<?php

namespace Arkitecht\B2B\SOAP\VMI;

class ArrayOfVMICustomerLocation implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var VMICustomerLocation[] $VMICustomerLocation
     */
    protected $VMICustomerLocation = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return VMICustomerLocation[]
     */
    public function getVMICustomerLocation()
    {
      return $this->VMICustomerLocation;
    }

    /**
     * @param VMICustomerLocation[] $VMICustomerLocation
     * @return \B2B\SOAP\VMI\ArrayOfVMICustomerLocation
     */
    public function setVMICustomerLocation(array $VMICustomerLocation = null)
    {
      $this->VMICustomerLocation = $VMICustomerLocation;
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
      return isset($this->VMICustomerLocation[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return VMICustomerLocation
     */
    public function offsetGet($offset)
    {
      return $this->VMICustomerLocation[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param VMICustomerLocation $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->VMICustomerLocation[] = $value;
      } else {
        $this->VMICustomerLocation[$offset] = $value;
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
      unset($this->VMICustomerLocation[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return VMICustomerLocation Return the current element
     */
    public function current()
    {
      return current($this->VMICustomerLocation);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->VMICustomerLocation);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->VMICustomerLocation);
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
      reset($this->VMICustomerLocation);
    }

    /**
     * Countable implementation
     *
     * @return VMICustomerLocation Return count of elements
     */
    public function count()
    {
      return count($this->VMICustomerLocation);
    }

}
