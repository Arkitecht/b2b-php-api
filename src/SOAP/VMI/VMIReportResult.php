<?php

namespace Arkitecht\B2B\SOAP\VMI;

class VMIReportResult implements \JsonSerializable
{

    /**
     * @var ResultCode $Code
     */
    public $Code = null;

    /**
     * @var ArrayOfVMIReportEntity $Data
     */
    public $Data = null;

    /**
     * @var string $Description
     */
    public $Description = null;


    public function __construct()
    {

    }

    /**
     * @return ResultCode
     */
    public function getCode()
    {
        return $this->Code;
    }

    /**
     * @param ResultCode $Code
     *
     * @return VMIReportResult
     */
    public function setCode($Code)
    {
        $this->Code = $Code;

        return $this;
    }

    /**
     * @return ArrayOfVMIReportEntity
     */
    public function getData()
    {
        return $this->Data;
    }

    /**
     * @param ArrayOfVMIReportEntity $Data
     *
     * @return VMIReportResult
     */
    public function setData($Data)
    {
        $this->Data = $Data;

        return $this;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->Description;
    }

    /**
     * @param string $Description
     *
     * @return VMIReportResult
     */
    public function setDescription($Description)
    {
        $this->Description = $Description;

        return $this;
    }

    public function jsonSerialize()
    {
        $responseData = $this->getData();
        if (!$responseData || !$responseData->count()) {
            $data = [];
        } else {
            $data = $responseData->getVMIReportEntity();
        }

        return [
            'code'        => $this->getCode(),
            'description' => $this->getDescription(),
            'data'        => $data,
        ];
    }

    public function fromJson()
    {
        return json_decode(json_encode($this));
    }


}
