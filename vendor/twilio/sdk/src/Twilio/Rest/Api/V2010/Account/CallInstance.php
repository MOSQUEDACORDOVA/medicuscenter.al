<?php

/**
 * This code was generated by
 * \ / _    _  _|   _  _
 * | (_)\/(_)(_|\/| |(/_  v1.0.0
 * /       /
 */

namespace Twilio\Rest\Api\V2010\Account;

use Twilio\Deserialize;
use Twilio\Exceptions\TwilioException;
use Twilio\InstanceResource;
use Twilio\Options;
use Twilio\Rest\Api\V2010\Account\Call\EventList;
use Twilio\Rest\Api\V2010\Account\Call\FeedbackList;
use Twilio\Rest\Api\V2010\Account\Call\NotificationList;
use Twilio\Rest\Api\V2010\Account\Call\PaymentList;
use Twilio\Rest\Api\V2010\Account\Call\RecordingList;
use Twilio\Values;
use Twilio\Version;

/**
 * @property string $sid
 * @property \DateTime $dateCreated
 * @property \DateTime $dateUpdated
 * @property string $parentCallSid
 * @property string $accountSid
 * @property string $to
 * @property string $toFormatted
 * @property string $from
 * @property string $fromFormatted
 * @property string $phoneNumberSid
 * @property string $status
 * @property \DateTime $startTime
 * @property \DateTime $endTime
 * @property string $duration
 * @property string $price
 * @property string $priceUnit
 * @property string $direction
 * @property string $answeredBy
 * @property string $annotation
 * @property string $apiVersion
 * @property string $forwardedFrom
 * @property string $groupSid
 * @property string $callerName
 * @property string $queueTime
 * @property string $trunkSid
 * @property string $uri
 * @property array $subresourceUris
 */
class CallInstance extends InstanceResource {
    protected $_recordings;
    protected $_notifications;
    protected $_feedback;
    protected $_events;
    protected $_payments;

    /**
     * Initialize the CallInstance
     *
     * @param Version $version Version that contains the resource
     * @param mixed[] $payload The response payload
     * @param string $accountSid The SID of the Account that created this resource
     * @param string $sid The SID of the Call resource to fetch
     */
    public function __construct(Version $version, array $payload, string $accountSid, string $sid = null) {
        parent::__construct($version);

        // Marshaled Properties
        $this->properties = [
            'sid' => Values::array_get($payload, 'sid'),
            'dateCreated' => Deserialize::dateTime(Values::array_get($payload, 'date_created')),
            'dateUpdated' => Deserialize::dateTime(Values::array_get($payload, 'date_updated')),
            'parentCallSid' => Values::array_get($payload, 'parent_call_sid'),
            'accountSid' => Values::array_get($payload, 'account_sid'),
            'to' => Values::array_get($payload, 'to'),
            'toFormatted' => Values::array_get($payload, 'to_formatted'),
            'from' => Values::array_get($payload, 'from'),
            'fromFormatted' => Values::array_get($payload, 'from_formatted'),
            'phoneNumberSid' => Values::array_get($payload, 'phone_number_sid'),
            'status' => Values::array_get($payload, 'status'),
            'startTime' => Deserialize::dateTime(Values::array_get($payload, 'start_time')),
            'endTime' => Deserialize::dateTime(Values::array_get($payload, 'end_time')),
            'duration' => Values::array_get($payload, 'duration'),
            'price' => Values::array_get($payload, 'price'),
            'priceUnit' => Values::array_get($payload, 'price_unit'),
            'direction' => Values::array_get($payload, 'direction'),
            'answeredBy' => Values::array_get($payload, 'answered_by'),
            'annotation' => Values::array_get($payload, 'annotation'),
            'apiVersion' => Values::array_get($payload, 'api_version'),
            'forwardedFrom' => Values::array_get($payload, 'forwarded_from'),
            'groupSid' => Values::array_get($payload, 'group_sid'),
            'callerName' => Values::array_get($payload, 'caller_name'),
            'queueTime' => Values::array_get($payload, 'queue_time'),
            'trunkSid' => Values::array_get($payload, 'trunk_sid'),
            'uri' => Values::array_get($payload, 'uri'),
            'subresourceUris' => Values::array_get($payload, 'subresource_uris'),
        ];

        $this->solution = ['accountSid' => $accountSid, 'sid' => $sid ?: $this->properties['sid'], ];
    }

    /**
     * Generate an instance context for the instance, the context is capable of
     * performing various actions.  All instance actions are proxied to the context
     *
     * @return CallContext Context for this CallInstance
     */
    protected function proxy(): CallContext {
        if (!$this->context) {
            $this->context = new CallContext(
                $this->version,
                $this->solution['accountSid'],
                $this->solution['sid']
            );
        }

        return $this->context;
    }

    /**
     * Delete the CallInstance
     *
     * @return bool True if delete succeeds, false otherwise
     * @throws TwilioException When an HTTP error occurs.
     */
    public function delete(): bool {
        return $this->proxy()->delete();
    }

    /**
     * Fetch the CallInstance
     *
     * @return CallInstance Fetched CallInstance
     * @throws TwilioException When an HTTP error occurs.
     */
    public function fetch(): CallInstance {
        return $this->proxy()->fetch();
    }

    /**
     * Update the CallInstance
     *
     * @param array|Options $options Optional Arguments
     * @return CallInstance Updated CallInstance
     * @throws TwilioException When an HTTP error occurs.
     */
    public function update(array $options = []): CallInstance {
        return $this->proxy()->update($options);
    }

    /**
     * Access the recordings
     */
    protected function getRecordings(): RecordingList {
        return $this->proxy()->recordings;
    }

    /**
     * Access the notifications
     */
    protected function getNotifications(): NotificationList {
        return $this->proxy()->notifications;
    }

    /**
     * Access the feedback
     */
    protected function getFeedback(): FeedbackList {
        return $this->proxy()->feedback;
    }

    /**
     * Access the events
     */
    protected function getEvents(): EventList {
        return $this->proxy()->events;
    }

    /**
     * Access the payments
     */
    protected function getPayments(): PaymentList {
        return $this->proxy()->payments;
    }

    /**
     * Magic getter to access properties
     *
     * @param string $name Property to access
     * @return mixed The requested property
     * @throws TwilioException For unknown properties
     */
    public function __get(string $name) {
        if (\array_key_exists($name, $this->properties)) {
            return $this->properties[$name];
        }

        if (\property_exists($this, '_' . $name)) {
            $method = 'get' . \ucfirst($name);
            return $this->$method();
        }

        throw new TwilioException('Unknown property: ' . $name);
    }

    /**
     * Provide a friendly representation
     *
     * @return string Machine friendly representation
     */
    public function __toString(): string {
        $context = [];
        foreach ($this->solution as $key => $value) {
            $context[] = "$key=$value";
        }
        return '[Twilio.Api.V2010.CallInstance ' . \implode(' ', $context) . ']';
    }
}