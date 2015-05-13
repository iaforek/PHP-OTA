<?php

namespace Davispeixoto\OpenTravelAlliance\OTATourActivitySearchRQ\SearchCriteriaAType;

/**
 * Class representing DateTimePrefAType
 */
class DateTimePrefAType
{

    /**
     * The starting value of the time span.
     *
     * @property \Davispeixoto\OpenTravelAlliance\DateOrTimeOrDateTimeType $start
     */
    private $start = null;

    /**
     * The duration datatype represents a combination of year, month, day and time
     * values representing a single duration of time, encoded as a single string.
     *
     * @property \Davispeixoto\OpenTravelAlliance\DurationType $duration
     */
    private $duration = null;

    /**
     * The ending value of the time span.
     *
     * @property \Davispeixoto\OpenTravelAlliance\DateOrTimeOrDateTimeType $end
     */
    private $end = null;

    /**
     * When true, apply to Monday.
     *
     * @property boolean $mon
     */
    private $mon = null;

    /**
     * When true, apply to Tuesday.
     *
     * @property boolean $tue
     */
    private $tue = null;

    /**
     * When true, apply to Wednesday.
     *
     * @property boolean $weds
     */
    private $weds = null;

    /**
     * When true, apply to Thursday.
     *
     * @property boolean $thur
     */
    private $thur = null;

    /**
     * When true, apply to Friday.
     *
     * @property boolean $fri
     */
    private $fri = null;

    /**
     * When true, apply to Saturday.
     *
     * @property boolean $sat
     */
    private $sat = null;

    /**
     * When true, apply to Sunday.
     *
     * @property boolean $sun
     */
    private $sun = null;

    /**
     * The earliest and latest dates acceptable for the start date.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTATourActivitySearchRQ\SearchCriteriaAType\DateTimePrefAType\StartDateWindowAType
     * $startDateWindow
     */
    private $startDateWindow = null;

    /**
     * The earliest and latest dates acceptable for the end date.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTATourActivitySearchRQ\SearchCriteriaAType\DateTimePrefAType\EndDateWindowAType
     * $endDateWindow
     */
    private $endDateWindow = null;

    /**
     * Gets as start
     *
     * The starting value of the time span.
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
     * The starting value of the time span.
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
     * Gets as duration
     *
     * The duration datatype represents a combination of year, month, day and time
     * values representing a single duration of time, encoded as a single string.
     *
     * @return \Davispeixoto\OpenTravelAlliance\DurationType
     */
    public function getDuration()
    {
        return $this->duration;
    }

    /**
     * Sets a new duration
     *
     * The duration datatype represents a combination of year, month, day and time
     * values representing a single duration of time, encoded as a single string.
     *
     * @param \Davispeixoto\OpenTravelAlliance\DurationType $duration
     * @return self
     */
    public function setDuration(\Davispeixoto\OpenTravelAlliance\DurationType $duration)
    {
        $this->duration = $duration;

        return $this;
    }

    /**
     * Gets as end
     *
     * The ending value of the time span.
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
     * The ending value of the time span.
     *
     * @param \Davispeixoto\OpenTravelAlliance\DateOrTimeOrDateTimeType $end
     * @return self
     */
    public function setEnd(\Davispeixoto\OpenTravelAlliance\DateOrTimeOrDateTimeType $end)
    {
        $this->end = $end;

        return $this;
    }

    /**
     * Gets as mon
     *
     * When true, apply to Monday.
     *
     * @return boolean
     */
    public function getMon()
    {
        return $this->mon;
    }

    /**
     * Sets a new mon
     *
     * When true, apply to Monday.
     *
     * @param boolean $mon
     * @return self
     */
    public function setMon($mon)
    {
        $this->mon = $mon;

        return $this;
    }

    /**
     * Gets as tue
     *
     * When true, apply to Tuesday.
     *
     * @return boolean
     */
    public function getTue()
    {
        return $this->tue;
    }

    /**
     * Sets a new tue
     *
     * When true, apply to Tuesday.
     *
     * @param boolean $tue
     * @return self
     */
    public function setTue($tue)
    {
        $this->tue = $tue;

        return $this;
    }

    /**
     * Gets as weds
     *
     * When true, apply to Wednesday.
     *
     * @return boolean
     */
    public function getWeds()
    {
        return $this->weds;
    }

    /**
     * Sets a new weds
     *
     * When true, apply to Wednesday.
     *
     * @param boolean $weds
     * @return self
     */
    public function setWeds($weds)
    {
        $this->weds = $weds;

        return $this;
    }

    /**
     * Gets as thur
     *
     * When true, apply to Thursday.
     *
     * @return boolean
     */
    public function getThur()
    {
        return $this->thur;
    }

    /**
     * Sets a new thur
     *
     * When true, apply to Thursday.
     *
     * @param boolean $thur
     * @return self
     */
    public function setThur($thur)
    {
        $this->thur = $thur;

        return $this;
    }

    /**
     * Gets as fri
     *
     * When true, apply to Friday.
     *
     * @return boolean
     */
    public function getFri()
    {
        return $this->fri;
    }

    /**
     * Sets a new fri
     *
     * When true, apply to Friday.
     *
     * @param boolean $fri
     * @return self
     */
    public function setFri($fri)
    {
        $this->fri = $fri;

        return $this;
    }

    /**
     * Gets as sat
     *
     * When true, apply to Saturday.
     *
     * @return boolean
     */
    public function getSat()
    {
        return $this->sat;
    }

    /**
     * Sets a new sat
     *
     * When true, apply to Saturday.
     *
     * @param boolean $sat
     * @return self
     */
    public function setSat($sat)
    {
        $this->sat = $sat;

        return $this;
    }

    /**
     * Gets as sun
     *
     * When true, apply to Sunday.
     *
     * @return boolean
     */
    public function getSun()
    {
        return $this->sun;
    }

    /**
     * Sets a new sun
     *
     * When true, apply to Sunday.
     *
     * @param boolean $sun
     * @return self
     */
    public function setSun($sun)
    {
        $this->sun = $sun;

        return $this;
    }

    /**
     * Gets as startDateWindow
     *
     * The earliest and latest dates acceptable for the start date.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTATourActivitySearchRQ\SearchCriteriaAType\DateTimePrefAType\StartDateWindowAType
     */
    public function getStartDateWindow()
    {
        return $this->startDateWindow;
    }

    /**
     * Sets a new startDateWindow
     *
     * The earliest and latest dates acceptable for the start date.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTATourActivitySearchRQ\SearchCriteriaAType\DateTimePrefAType\StartDateWindowAType
     * $startDateWindow
     * @return self
     */
    public function setStartDateWindow(
        \Davispeixoto\OpenTravelAlliance\OTATourActivitySearchRQ\SearchCriteriaAType\DateTimePrefAType\StartDateWindowAType $startDateWindow
    ) {
        $this->startDateWindow = $startDateWindow;

        return $this;
    }

    /**
     * Gets as endDateWindow
     *
     * The earliest and latest dates acceptable for the end date.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTATourActivitySearchRQ\SearchCriteriaAType\DateTimePrefAType\EndDateWindowAType
     */
    public function getEndDateWindow()
    {
        return $this->endDateWindow;
    }

    /**
     * Sets a new endDateWindow
     *
     * The earliest and latest dates acceptable for the end date.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTATourActivitySearchRQ\SearchCriteriaAType\DateTimePrefAType\EndDateWindowAType
     * $endDateWindow
     * @return self
     */
    public function setEndDateWindow(
        \Davispeixoto\OpenTravelAlliance\OTATourActivitySearchRQ\SearchCriteriaAType\DateTimePrefAType\EndDateWindowAType $endDateWindow
    ) {
        $this->endDateWindow = $endDateWindow;

        return $this;
    }


}
