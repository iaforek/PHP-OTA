<?php

namespace Davispeixoto\OpenTravelAlliance;

/**
 * Class representing OTACruiseCategoryAvailRQ
 */
class OTACruiseCategoryAvailRQ
{

    /**
     * A reference for additional message identification, assigned by the requesting
     * host system.Implementer: A reference for additional message identification,
     * assigned by the requesting host system. When a request message includes an echo
     * token the corresponding response message MUST include an echo token with an
     * identical value.
     *
     * @property string $echoToken
     */
    private $echoToken = null;

    /**
     * ISO 8601 encoded timestamp indicating the creation date and time of the
     * message.http://www.iso.org/iso/support/faqs/faqs_widely_used_standards/widely_used_standards_other/date_and_time_format.htmYYYY-MM-DDThh:mm:ssZ
     * with time values using the 24 hour clock:
     * 20 November 2003, 1:59:38 pm UTC becomes 2003-11-20T13:59:38Z
     *
     * @property \DateTime $timeStamp
     */
    private $timeStamp = null;

    /**
     * Test or Production target system indicator.
     *
     * @property string $target
     */
    private $target = null;

    /**
     * The name of the Test or Production system.
     *
     * @property string $targetName
     */
    private $targetName = null;

    /**
     * The OpenTravel message version indicated by a decimal value.
     *
     * @property float $version
     */
    private $version = null;

    /**
     * Unique identifier to relate all messages within a transaction (e.g. this would
     * be sent in all request and response messages that are part of an on-going
     * transaction).
     *
     * @property string $transactionIdentifier
     */
    private $transactionIdentifier = null;

    /**
     * The sequence number of the transaction assigned by the sending system for
     * ordered message processing or message resynchronization.Implementer: Message
     * resynchronization typically is required if a system has been off-line and needs
     * to retrieve messages that were missed.
     *
     * @property integer $sequenceNmbr
     */
    private $sequenceNmbr = null;

    /**
     * This indicates where this message falls within a sequence of messages.
     *
     * @property string $transactionStatusCode
     */
    private $transactionStatusCode = null;

    /**
     * When true, indicates the message is being re-sent after a failure.Implementer:
     * It is recommended that this attribute is used (i.e., set to TRUE) only when a
     * message is retransmitted.
     *
     * @property boolean $retransmissionIndicator
     */
    private $retransmissionIndicator = null;

    /**
     * Allows end-to-end correlation of log messages with the corresponding Web service
     * message throughout the processing of the Web service message.
     *
     * @property string $correlationID
     */
    private $correlationID = null;

    /**
     * The primary language preference for the message encoded as ISO 639-3.ISO 639 (3)
     * character language codes: http://en.wikipedia.org/wiki/Lists_of_ISO_639_codes
     *
     * @property string $primaryLangID
     */
    private $primaryLangID = null;

    /**
     * The alternate language for a customer or message encoded as ISO 639-3.ISO 639
     * (3) character language codes:
     * http://en.wikipedia.org/wiki/Lists_of_ISO_639_codes
     *
     * @property string $altLangID
     */
    private $altLangID = null;

    /**
     * Point of sale
     * object.
     *
     * @property \Davispeixoto\OpenTravelAlliance\SourceType[] $pOS
     */
    private $pOS = null;

    /**
     * Specifies guest names and/or their transportation.
     *
     * @property \Davispeixoto\OpenTravelAlliance\GuestType[] $guest
     */
    private $guest = null;

    /**
     * Specifies guest quantity and guest types.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTACruiseCategoryAvailRQ\GuestCountsAType\GuestCountAType[]
     * $guestCounts
     */
    private $guestCounts = null;

    /**
     * Contains information related to the selected sailing. Typically the selected
     * sailing is one of the sailings returned in the previous sailing availability
     * response.
     *
     * @property \Davispeixoto\OpenTravelAlliance\SailingInfoType $sailingInfo
     */
    private $sailingInfo = null;

    /**
     * Used to further qualify the category availability search.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTACruiseCategoryAvailRQ\SearchQualifiersAType
     * $searchQualifiers
     */
    private $searchQualifiers = null;

    /**
     * Specifies the fare code and the group code.
     *
     * @property
     * \Davispeixoto\OpenTravelAlliance\OTACruiseCategoryAvailRQ\SelectedFareAType[]
     * $selectedFare
     */
    private $selectedFare = null;

    /**
     * @property \Davispeixoto\OpenTravelAlliance\TPAExtensions $tPAExtensions
     */
    private $tPAExtensions = null;

    /**
     * Gets as echoToken
     *
     * A reference for additional message identification, assigned by the requesting
     * host system.Implementer: A reference for additional message identification,
     * assigned by the requesting host system. When a request message includes an echo
     * token the corresponding response message MUST include an echo token with an
     * identical value.
     *
     * @return string
     */
    public function getEchoToken()
    {
        return $this->echoToken;
    }

    /**
     * Sets a new echoToken
     *
     * A reference for additional message identification, assigned by the requesting
     * host system.Implementer: A reference for additional message identification,
     * assigned by the requesting host system. When a request message includes an echo
     * token the corresponding response message MUST include an echo token with an
     * identical value.
     *
     * @param string $echoToken
     * @return self
     */
    public function setEchoToken($echoToken)
    {
        $this->echoToken = $echoToken;

        return $this;
    }

    /**
     * Gets as timeStamp
     *
     * ISO 8601 encoded timestamp indicating the creation date and time of the
     * message.http://www.iso.org/iso/support/faqs/faqs_widely_used_standards/widely_used_standards_other/date_and_time_format.htmYYYY-MM-DDThh:mm:ssZ
     * with time values using the 24 hour clock:
     * 20 November 2003, 1:59:38 pm UTC becomes 2003-11-20T13:59:38Z
     *
     * @return \DateTime
     */
    public function getTimeStamp()
    {
        return $this->timeStamp;
    }

    /**
     * Sets a new timeStamp
     *
     * ISO 8601 encoded timestamp indicating the creation date and time of the
     * message.http://www.iso.org/iso/support/faqs/faqs_widely_used_standards/widely_used_standards_other/date_and_time_format.htmYYYY-MM-DDThh:mm:ssZ
     * with time values using the 24 hour clock:
     * 20 November 2003, 1:59:38 pm UTC becomes 2003-11-20T13:59:38Z
     *
     * @param \DateTime $timeStamp
     * @return self
     */
    public function setTimeStamp(\DateTime $timeStamp)
    {
        $this->timeStamp = $timeStamp;

        return $this;
    }

    /**
     * Gets as target
     *
     * Test or Production target system indicator.
     *
     * @return string
     */
    public function getTarget()
    {
        return $this->target;
    }

    /**
     * Sets a new target
     *
     * Test or Production target system indicator.
     *
     * @param string $target
     * @return self
     */
    public function setTarget($target)
    {
        $this->target = $target;

        return $this;
    }

    /**
     * Gets as targetName
     *
     * The name of the Test or Production system.
     *
     * @return string
     */
    public function getTargetName()
    {
        return $this->targetName;
    }

    /**
     * Sets a new targetName
     *
     * The name of the Test or Production system.
     *
     * @param string $targetName
     * @return self
     */
    public function setTargetName($targetName)
    {
        $this->targetName = $targetName;

        return $this;
    }

    /**
     * Gets as version
     *
     * The OpenTravel message version indicated by a decimal value.
     *
     * @return float
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * Sets a new version
     *
     * The OpenTravel message version indicated by a decimal value.
     *
     * @param float $version
     * @return self
     */
    public function setVersion($version)
    {
        $this->version = $version;

        return $this;
    }

    /**
     * Gets as transactionIdentifier
     *
     * Unique identifier to relate all messages within a transaction (e.g. this would
     * be sent in all request and response messages that are part of an on-going
     * transaction).
     *
     * @return string
     */
    public function getTransactionIdentifier()
    {
        return $this->transactionIdentifier;
    }

    /**
     * Sets a new transactionIdentifier
     *
     * Unique identifier to relate all messages within a transaction (e.g. this would
     * be sent in all request and response messages that are part of an on-going
     * transaction).
     *
     * @param string $transactionIdentifier
     * @return self
     */
    public function setTransactionIdentifier($transactionIdentifier)
    {
        $this->transactionIdentifier = $transactionIdentifier;

        return $this;
    }

    /**
     * Gets as sequenceNmbr
     *
     * The sequence number of the transaction assigned by the sending system for
     * ordered message processing or message resynchronization.Implementer: Message
     * resynchronization typically is required if a system has been off-line and needs
     * to retrieve messages that were missed.
     *
     * @return integer
     */
    public function getSequenceNmbr()
    {
        return $this->sequenceNmbr;
    }

    /**
     * Sets a new sequenceNmbr
     *
     * The sequence number of the transaction assigned by the sending system for
     * ordered message processing or message resynchronization.Implementer: Message
     * resynchronization typically is required if a system has been off-line and needs
     * to retrieve messages that were missed.
     *
     * @param integer $sequenceNmbr
     * @return self
     */
    public function setSequenceNmbr($sequenceNmbr)
    {
        $this->sequenceNmbr = $sequenceNmbr;

        return $this;
    }

    /**
     * Gets as transactionStatusCode
     *
     * This indicates where this message falls within a sequence of messages.
     *
     * @return string
     */
    public function getTransactionStatusCode()
    {
        return $this->transactionStatusCode;
    }

    /**
     * Sets a new transactionStatusCode
     *
     * This indicates where this message falls within a sequence of messages.
     *
     * @param string $transactionStatusCode
     * @return self
     */
    public function setTransactionStatusCode($transactionStatusCode)
    {
        $this->transactionStatusCode = $transactionStatusCode;

        return $this;
    }

    /**
     * Gets as retransmissionIndicator
     *
     * When true, indicates the message is being re-sent after a failure.Implementer:
     * It is recommended that this attribute is used (i.e., set to TRUE) only when a
     * message is retransmitted.
     *
     * @return boolean
     */
    public function getRetransmissionIndicator()
    {
        return $this->retransmissionIndicator;
    }

    /**
     * Sets a new retransmissionIndicator
     *
     * When true, indicates the message is being re-sent after a failure.Implementer:
     * It is recommended that this attribute is used (i.e., set to TRUE) only when a
     * message is retransmitted.
     *
     * @param boolean $retransmissionIndicator
     * @return self
     */
    public function setRetransmissionIndicator($retransmissionIndicator)
    {
        $this->retransmissionIndicator = $retransmissionIndicator;

        return $this;
    }

    /**
     * Gets as correlationID
     *
     * Allows end-to-end correlation of log messages with the corresponding Web service
     * message throughout the processing of the Web service message.
     *
     * @return string
     */
    public function getCorrelationID()
    {
        return $this->correlationID;
    }

    /**
     * Sets a new correlationID
     *
     * Allows end-to-end correlation of log messages with the corresponding Web service
     * message throughout the processing of the Web service message.
     *
     * @param string $correlationID
     * @return self
     */
    public function setCorrelationID($correlationID)
    {
        $this->correlationID = $correlationID;

        return $this;
    }

    /**
     * Gets as primaryLangID
     *
     * The primary language preference for the message encoded as ISO 639-3.ISO 639 (3)
     * character language codes: http://en.wikipedia.org/wiki/Lists_of_ISO_639_codes
     *
     * @return string
     */
    public function getPrimaryLangID()
    {
        return $this->primaryLangID;
    }

    /**
     * Sets a new primaryLangID
     *
     * The primary language preference for the message encoded as ISO 639-3.ISO 639 (3)
     * character language codes: http://en.wikipedia.org/wiki/Lists_of_ISO_639_codes
     *
     * @param string $primaryLangID
     * @return self
     */
    public function setPrimaryLangID($primaryLangID)
    {
        $this->primaryLangID = $primaryLangID;

        return $this;
    }

    /**
     * Gets as altLangID
     *
     * The alternate language for a customer or message encoded as ISO 639-3.ISO 639
     * (3) character language codes:
     * http://en.wikipedia.org/wiki/Lists_of_ISO_639_codes
     *
     * @return string
     */
    public function getAltLangID()
    {
        return $this->altLangID;
    }

    /**
     * Sets a new altLangID
     *
     * The alternate language for a customer or message encoded as ISO 639-3.ISO 639
     * (3) character language codes:
     * http://en.wikipedia.org/wiki/Lists_of_ISO_639_codes
     *
     * @param string $altLangID
     * @return self
     */
    public function setAltLangID($altLangID)
    {
        $this->altLangID = $altLangID;

        return $this;
    }

    /**
     * Adds as source
     *
     * Point of sale
     * object.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\SourceType $source
     */
    public function addToPOS(\Davispeixoto\OpenTravelAlliance\SourceType $source)
    {
        $this->pOS[] = $source;

        return $this;
    }

    /**
     * isset pOS
     *
     * Point of sale
     * object.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetPOS($index)
    {
        return isset($this->pOS[$index]);
    }

    /**
     * unset pOS
     *
     * Point of sale
     * object.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetPOS($index)
    {
        unset($this->pOS[$index]);
    }

    /**
     * Gets as pOS
     *
     * Point of sale
     * object.
     *
     * @return \Davispeixoto\OpenTravelAlliance\SourceType[]
     */
    public function getPOS()
    {
        return $this->pOS;
    }

    /**
     * Sets a new pOS
     *
     * Point of sale
     * object.
     *
     * @param \Davispeixoto\OpenTravelAlliance\SourceType[] $pOS
     * @return self
     */
    public function setPOS(array $pOS)
    {
        $this->pOS = $pOS;

        return $this;
    }

    /**
     * Adds as guest
     *
     * Specifies guest names and/or their transportation.
     *
     * @return self
     * @param \Davispeixoto\OpenTravelAlliance\GuestType $guest
     */
    public function addToGuest(\Davispeixoto\OpenTravelAlliance\GuestType $guest)
    {
        $this->guest[] = $guest;

        return $this;
    }

    /**
     * isset guest
     *
     * Specifies guest names and/or their transportation.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetGuest($index)
    {
        return isset($this->guest[$index]);
    }

    /**
     * unset guest
     *
     * Specifies guest names and/or their transportation.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetGuest($index)
    {
        unset($this->guest[$index]);
    }

    /**
     * Gets as guest
     *
     * Specifies guest names and/or their transportation.
     *
     * @return \Davispeixoto\OpenTravelAlliance\GuestType[]
     */
    public function getGuest()
    {
        return $this->guest;
    }

    /**
     * Sets a new guest
     *
     * Specifies guest names and/or their transportation.
     *
     * @param \Davispeixoto\OpenTravelAlliance\GuestType[] $guest
     * @return self
     */
    public function setGuest(array $guest)
    {
        $this->guest = $guest;

        return $this;
    }

    /**
     * Adds as guestCount
     *
     * Specifies guest quantity and guest types.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTACruiseCategoryAvailRQ\GuestCountsAType\GuestCountAType
     * $guestCount
     */
    public function addToGuestCounts(
        \Davispeixoto\OpenTravelAlliance\OTACruiseCategoryAvailRQ\GuestCountsAType\GuestCountAType $guestCount
    ) {
        $this->guestCounts[] = $guestCount;

        return $this;
    }

    /**
     * isset guestCounts
     *
     * Specifies guest quantity and guest types.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetGuestCounts($index)
    {
        return isset($this->guestCounts[$index]);
    }

    /**
     * unset guestCounts
     *
     * Specifies guest quantity and guest types.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetGuestCounts($index)
    {
        unset($this->guestCounts[$index]);
    }

    /**
     * Gets as guestCounts
     *
     * Specifies guest quantity and guest types.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTACruiseCategoryAvailRQ\GuestCountsAType\GuestCountAType[]
     */
    public function getGuestCounts()
    {
        return $this->guestCounts;
    }

    /**
     * Sets a new guestCounts
     *
     * Specifies guest quantity and guest types.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTACruiseCategoryAvailRQ\GuestCountsAType\GuestCountAType[]
     * $guestCounts
     * @return self
     */
    public function setGuestCounts(array $guestCounts)
    {
        $this->guestCounts = $guestCounts;

        return $this;
    }

    /**
     * Gets as sailingInfo
     *
     * Contains information related to the selected sailing. Typically the selected
     * sailing is one of the sailings returned in the previous sailing availability
     * response.
     *
     * @return \Davispeixoto\OpenTravelAlliance\SailingInfoType
     */
    public function getSailingInfo()
    {
        return $this->sailingInfo;
    }

    /**
     * Sets a new sailingInfo
     *
     * Contains information related to the selected sailing. Typically the selected
     * sailing is one of the sailings returned in the previous sailing availability
     * response.
     *
     * @param \Davispeixoto\OpenTravelAlliance\SailingInfoType $sailingInfo
     * @return self
     */
    public function setSailingInfo(\Davispeixoto\OpenTravelAlliance\SailingInfoType $sailingInfo)
    {
        $this->sailingInfo = $sailingInfo;

        return $this;
    }

    /**
     * Gets as searchQualifiers
     *
     * Used to further qualify the category availability search.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTACruiseCategoryAvailRQ\SearchQualifiersAType
     */
    public function getSearchQualifiers()
    {
        return $this->searchQualifiers;
    }

    /**
     * Sets a new searchQualifiers
     *
     * Used to further qualify the category availability search.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTACruiseCategoryAvailRQ\SearchQualifiersAType
     * $searchQualifiers
     * @return self
     */
    public function setSearchQualifiers(
        \Davispeixoto\OpenTravelAlliance\OTACruiseCategoryAvailRQ\SearchQualifiersAType $searchQualifiers
    ) {
        $this->searchQualifiers = $searchQualifiers;

        return $this;
    }

    /**
     * Adds as selectedFare
     *
     * Specifies the fare code and the group code.
     *
     * @return self
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTACruiseCategoryAvailRQ\SelectedFareAType
     * $selectedFare
     */
    public function addToSelectedFare(
        \Davispeixoto\OpenTravelAlliance\OTACruiseCategoryAvailRQ\SelectedFareAType $selectedFare
    ) {
        $this->selectedFare[] = $selectedFare;

        return $this;
    }

    /**
     * isset selectedFare
     *
     * Specifies the fare code and the group code.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetSelectedFare($index)
    {
        return isset($this->selectedFare[$index]);
    }

    /**
     * unset selectedFare
     *
     * Specifies the fare code and the group code.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetSelectedFare($index)
    {
        unset($this->selectedFare[$index]);
    }

    /**
     * Gets as selectedFare
     *
     * Specifies the fare code and the group code.
     *
     * @return
     * \Davispeixoto\OpenTravelAlliance\OTACruiseCategoryAvailRQ\SelectedFareAType[]
     */
    public function getSelectedFare()
    {
        return $this->selectedFare;
    }

    /**
     * Sets a new selectedFare
     *
     * Specifies the fare code and the group code.
     *
     * @param
     * \Davispeixoto\OpenTravelAlliance\OTACruiseCategoryAvailRQ\SelectedFareAType[]
     * $selectedFare
     * @return self
     */
    public function setSelectedFare(array $selectedFare)
    {
        $this->selectedFare = $selectedFare;

        return $this;
    }

    /**
     * Gets as tPAExtensions
     *
     * @return \Davispeixoto\OpenTravelAlliance\TPAExtensions
     */
    public function getTPAExtensions()
    {
        return $this->tPAExtensions;
    }

    /**
     * Sets a new tPAExtensions
     *
     * @param \Davispeixoto\OpenTravelAlliance\TPAExtensions $tPAExtensions
     * @return self
     */
    public function setTPAExtensions(\Davispeixoto\OpenTravelAlliance\TPAExtensions $tPAExtensions)
    {
        $this->tPAExtensions = $tPAExtensions;

        return $this;
    }


}
