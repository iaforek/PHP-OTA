<?php

namespace Davispeixoto\OpenTravelAlliance\OTAVehExchangeRS\VehicleAType;

use Davispeixoto\OpenTravelAlliance\VehicleRentalDetailsType;

/**
 * Class representing VehRentalDetailsAType
 */
class VehRentalDetailsAType extends VehicleRentalDetailsType
{

    /**
     * Used to identify the context of the element and whether the content applies to
     * data at the time of CheckOut or CheckIn.
     *
     * @property string $checkOutCheckInCode
     */
    private $checkOutCheckInCode = null;

    /**
     * Gets as checkOutCheckInCode
     *
     * Used to identify the context of the element and whether the content applies to
     * data at the time of CheckOut or CheckIn.
     *
     * @return string
     */
    public function getCheckOutCheckInCode()
    {
        return $this->checkOutCheckInCode;
    }

    /**
     * Sets a new checkOutCheckInCode
     *
     * Used to identify the context of the element and whether the content applies to
     * data at the time of CheckOut or CheckIn.
     *
     * @param string $checkOutCheckInCode
     * @return self
     */
    public function setCheckOutCheckInCode($checkOutCheckInCode)
    {
        $this->checkOutCheckInCode = $checkOutCheckInCode;

        return $this;
    }


}
