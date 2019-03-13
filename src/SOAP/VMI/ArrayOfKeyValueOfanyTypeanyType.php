<?php

namespace Arkitecht\B2B\SOAP\VMI;

class ArrayOfKeyValueOfanyTypeanyType implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var KeyValueOfanyTypeanyType[] $KeyValueOfanyTypeanyType
     */
    protected $KeyValueOfanyTypeanyType = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return KeyValueOfanyTypeanyType[]
     */
    public function getKeyValueOfanyTypeanyType()
    {
      return $this->KeyValueOfanyTypeanyType;
    }

    /**
     * @param KeyValueOfanyTypeanyType[] $KeyValueOfanyTypeanyType
     * @return \B2B\SOAP\VMI\ArrayOfKeyValueOfanyTypeanyType
     */
    public function setKeyValueOfanyTypeanyType(array $KeyValueOfanyTypeanyType = null)
    {
      $this->KeyValueOfanyTypeanyType = $KeyValueOfanyTypeanyType;
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
      return isset($this->KeyValueOfanyTypeanyType[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return KeyValueOfanyTypeanyType
     */
    public function offsetGet($offset)
    {
      return $this->KeyValueOfanyTypeanyType[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param KeyValueOfanyTypeanyType $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->KeyValueOfanyTypeanyType[] = $value;
      } else {
        $this->KeyValueOfanyTypeanyType[$offset] = $value;
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
      unset($this->KeyValueOfanyTypeanyType[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return KeyValueOfanyTypeanyType Return the current element
     */
    public function current()
    {
      return current($this->KeyValueOfanyTypeanyType);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->KeyValueOfanyTypeanyType);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->KeyValueOfanyTypeanyType);
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
      reset($this->KeyValueOfanyTypeanyType);
    }

    /**
     * Countable implementation
     *
     * @return KeyValueOfanyTypeanyType Return count of elements
     */
    public function count()
    {
      return count($this->KeyValueOfanyTypeanyType);
    }

}
