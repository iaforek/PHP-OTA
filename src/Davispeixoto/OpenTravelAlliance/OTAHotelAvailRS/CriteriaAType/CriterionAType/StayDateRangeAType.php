<?php

namespace Davispeixoto\OpenTravelAlliance\OTAHotelAvailRS\CriteriaAType\CriterionAType;

/**
 * Class representing StayDateRangeAType
 */
class StayDateRangeAType
{

    /**
     * Start MUST specify the arrival date for the availability request.
     *
     * @property \Davispeixoto\OpenTravelAlliance\DateOrTimeOrDateTimeType $start
     */
    private $start = null;

    /**
     * End MUST specify the departure date for the availability request.
     *
     * @property \Davispeixoto\OpenTravelAlliance\DateOrTimeOrDateTimeType $end
     */
    private $end = null;

    /**
     * Gets as start
     *
     * Start MUST specify the arrival date for the availability request.
     *
     * @return \Davispeixoto\OpenTravelAlliance\DateOrTimeOrDateTimeType
     */
    public function getStart()
    {
        return $this->start;
    }

    /**
     * Sets a new start
     *
     * Start MUST specify the arrival date for the availability request.
     *
     * @param \Davispeixoto\OpenTravelAlliance\DateOrTimeOrDateTimeType $start
     * @return self
     */
    public function setStart(\Davispeixoto\OpenTravelAlliance\DateOrTimeOrDateTimeType $start)
    {
        $this->start = $start;

        return $this;
    }

    /**
     * Gets as end
     *
     * End MUST specify the departure date for the availability request.
     *
     * @return \Davispeixoto\OpenTravelAlliance\DateOrTimeOrDateTimeType
     */
    public function getEnd()
    {
        return $this->end;
    }

    /**
     * Sets a new end
     *
     * End MUST specify the departure date for the availability request.
     *
     * @param \Davispeixoto\OpenTravelAlliance\DateOrTimeOrDateTimeType $end
     * @return self
     */
    public function setEnd(\Davispeixoto\OpenTravelAlliance\DateOrTimeOrDateTimeType $end)
    {
        $this->end = $end;

        return $this;
    }


}
