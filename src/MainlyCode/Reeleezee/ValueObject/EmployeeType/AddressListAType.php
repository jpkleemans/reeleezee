<?php

namespace MainlyCode\Reeleezee\ValueObject\EmployeeType;

/**
 * Class representing AddressListAType
 */
class AddressListAType
{

    /**
     * @property
     * \MainlyCode\Reeleezee\ValueObject\EmployeeType\AddressListAType\AddressAType[]
     * $address
     */
    private $address = null;

    /**
     * Adds as address
     *
     * @return self
     * @param
     * \MainlyCode\Reeleezee\ValueObject\EmployeeType\AddressListAType\AddressAType
     * $address
     */
    public function addToAddress(\MainlyCode\Reeleezee\ValueObject\EmployeeType\AddressListAType\AddressAType $address)
    {
        $this->address[] = $address;
        return $this;
    }

    /**
     * isset address
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetAddress($index)
    {
        return isset($this->address[$index]);
    }

    /**
     * unset address
     *
     * @param scalar $index
     * @return void
     */
    public function unsetAddress($index)
    {
        unset($this->address[$index]);
    }

    /**
     * Gets as address
     *
     * @return
     * \MainlyCode\Reeleezee\ValueObject\EmployeeType\AddressListAType\AddressAType[]
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Sets a new address
     *
     * @param
     * \MainlyCode\Reeleezee\ValueObject\EmployeeType\AddressListAType\AddressAType[]
     * $address
     * @return self
     */
    public function setAddress(array $address)
    {
        $this->address = $address;
        return $this;
    }


}

