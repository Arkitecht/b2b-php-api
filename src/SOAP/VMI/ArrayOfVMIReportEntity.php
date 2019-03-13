<?php

namespace Arkitecht\B2B\SOAP\VMI;

class ArrayOfVMIReportEntity implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var VMIReportEntity[] $VMIReportEntity
     */
    public $VMIReportEntity = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return VMIReportEntity[]
     */
    public function getVMIReportEntity()
    {
      return $this->VMIReportEntity;
    }

    /**
     * @param VMIReportEntity[] $VMIReportEntity
     * @return ArrayOfVMIReportEntity
     */
    public function setVMIReportEntity(array $VMIReportEntity = null)
    {
      $this->VMIReportEntity = $VMIReportEntity;
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
      return isset($this->VMIReportEntity[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return VMIReportEntity
     */
    public function offsetGet($offset)
    {
      return $this->VMIReportEntity[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param VMIReportEntity $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->VMIReportEntity[] = $value;
      } else {
        $this->VMIReportEntity[$offset] = $value;
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
      unset($this->VMIReportEntity[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return VMIReportEntity Return the current element
     */
    public function current()
    {
      return current($this->VMIReportEntity);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->VMIReportEntity);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->VMIReportEntity);
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
      reset($this->VMIReportEntity);
    }

    /**
     * Countable implementation
     *
     * @return VMIReportEntity Return count of elements
     */
    public function count()
    {
      return count($this->VMIReportEntity);
    }

}
