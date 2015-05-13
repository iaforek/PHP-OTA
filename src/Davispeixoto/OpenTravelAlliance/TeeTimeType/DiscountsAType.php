<?php

namespace Davispeixoto\OpenTravelAlliance\TeeTimeType;

use Davispeixoto\OpenTravelAlliance\RateQualifierType;

/**
 * Class representing DiscountsAType
 */
class DiscountsAType extends RateQualifierType
{

    /**
     * A reference to a unique golfer defined in Golfer/@RPH.
     *
     * @property string $golferRPH
     */
    private $golferRPH = null;

    /**
     * Gets as golferRPH
     *
     * A reference to a unique golfer defined in Golfer/@RPH.
     *
     * @return string
     */
    public function getGolferRPH()
    {
        return $this->golferRPH;
    }

    /**
     * Sets a new golferRPH
     *
     * A reference to a unique golfer defined in Golfer/@RPH.
     *
     * @param string $golferRPH
     * @return self
     */
    public function setGolferRPH($golferRPH)
    {
        $this->golferRPH = $golferRPH;

        return $this;
    }


}
