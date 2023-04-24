<?php

/**
 * This code was generated by
 * \ / _    _  _|   _  _
 * | (_)\/(_)(_|\/| |(/_  v1.0.0
 * /       /
 */

namespace Twilio\Rest\Messaging\V1\Service;

use Twilio\Exceptions\TwilioException;
use Twilio\ListResource;
use Twilio\Serialize;
use Twilio\Stream;
use Twilio\Values;
use Twilio\Version;

/**
 * PLEASE NOTE that this class contains beta products that are subject to change. Use them with caution.
 */
class UsAppToPersonList extends ListResource {
    /**
     * Construct the UsAppToPersonList
     *
     * @param Version $version Version that contains the resource
     * @param string $messagingServiceSid The SID of the Messaging Service the
     *                                    resource is associated with
     */
    public function __construct(Version $version, string $messagingServiceSid) {
        parent::__construct($version);

        // Path Solution
        $this->solution = ['messagingServiceSid' => $messagingServiceSid, ];

        $this->uri = '/Services/' . \rawurlencode($messagingServiceSid) . '/Compliance/Usa2p';
    }

    /**
     * Create the UsAppToPersonInstance
     *
     * @param string $brandRegistrationSid A2P Brand Registration SID
     * @param string $description A short description of what this SMS campaign does
     * @param string[] $messageSamples Message samples
     * @param string $usAppToPersonUsecase A2P Campaign Use Case.
     * @param bool $hasEmbeddedLinks Indicates that this SMS campaign will send
     *                               messages that contain links
     * @param bool $hasEmbeddedPhone Indicates that this SMS campaign will send
     *                               messages that contain phone numbers
     * @return UsAppToPersonInstance Created UsAppToPersonInstance
     * @throws TwilioException When an HTTP error occurs.
     */
    public function create(string $brandRegistrationSid, string $description, array $messageSamples, string $usAppToPersonUsecase, bool $hasEmbeddedLinks, bool $hasEmbeddedPhone): UsAppToPersonInstance {
        $data = Values::of([
            'BrandRegistrationSid' => $brandRegistrationSid,
            'Description' => $description,
            'MessageSamples' => Serialize::map($messageSamples, function($e) { return $e; }),
            'UsAppToPersonUsecase' => $usAppToPersonUsecase,
            'HasEmbeddedLinks' => Serialize::booleanToString($hasEmbeddedLinks),
            'HasEmbeddedPhone' => Serialize::booleanToString($hasEmbeddedPhone),
        ]);

        $payload = $this->version->create('POST', $this->uri, [], $data);

        return new UsAppToPersonInstance($this->version, $payload, $this->solution['messagingServiceSid']);
    }

    /**
     * Streams UsAppToPersonInstance records from the API as a generator stream.
     * This operation lazily loads records as efficiently as possible until the
     * limit
     * is reached.
     * The results are returned as a generator, so this operation is memory
     * efficient.
     *
     * @param int $limit Upper limit for the number of records to return. stream()
     *                   guarantees to never return more than limit.  Default is no
     *                   limit
     * @param mixed $pageSize Number of records to fetch per request, when not set
     *                        will use the default value of 50 records.  If no
     *                        page_size is defined but a limit is defined, stream()
     *                        will attempt to read the limit with the most
     *                        efficient page size, i.e. min(limit, 1000)
     * @return Stream stream of results
     */
    public function stream(int $limit = null, $pageSize = null): Stream {
        $limits = $this->version->readLimits($limit, $pageSize);

        $page = $this->page($limits['pageSize']);

        return $this->version->stream($page, $limits['limit'], $limits['pageLimit']);
    }

    /**
     * Reads UsAppToPersonInstance records from the API as a list.
     * Unlike stream(), this operation is eager and will load `limit` records into
     * memory before returning.
     *
     * @param int $limit Upper limit for the number of records to return. read()
     *                   guarantees to never return more than limit.  Default is no
     *                   limit
     * @param mixed $pageSize Number of records to fetch per request, when not set
     *                        will use the default value of 50 records.  If no
     *                        page_size is defined but a limit is defined, read()
     *                        will attempt to read the limit with the most
     *                        efficient page size, i.e. min(limit, 1000)
     * @return UsAppToPersonInstance[] Array of results
     */
    public function read(int $limit = null, $pageSize = null): array {
        return \iterator_to_array($this->stream($limit, $pageSize), false);
    }

    /**
     * Retrieve a single page of UsAppToPersonInstance records from the API.
     * Request is executed immediately
     *
     * @param mixed $pageSize Number of records to return, defaults to 50
     * @param string $pageToken PageToken provided by the API
     * @param mixed $pageNumber Page Number, this value is simply for client state
     * @return UsAppToPersonPage Page of UsAppToPersonInstance
     */
    public function page($pageSize = Values::NONE, string $pageToken = Values::NONE, $pageNumber = Values::NONE): UsAppToPersonPage {
        $params = Values::of(['PageToken' => $pageToken, 'Page' => $pageNumber, 'PageSize' => $pageSize, ]);

        $response = $this->version->page('GET', $this->uri, $params);

        return new UsAppToPersonPage($this->version, $response, $this->solution);
    }

    /**
     * Retrieve a specific page of UsAppToPersonInstance records from the API.
     * Request is executed immediately
     *
     * @param string $targetUrl API-generated URL for the requested results page
     * @return UsAppToPersonPage Page of UsAppToPersonInstance
     */
    public function getPage(string $targetUrl): UsAppToPersonPage {
        $response = $this->version->getDomain()->getClient()->request(
            'GET',
            $targetUrl
        );

        return new UsAppToPersonPage($this->version, $response, $this->solution);
    }

    /**
     * Constructs a UsAppToPersonContext
     *
     * @param string $sid The SID that identifies the US A2P Compliance resource to
     *                    fetch
     */
    public function getContext(string $sid): UsAppToPersonContext {
        return new UsAppToPersonContext($this->version, $this->solution['messagingServiceSid'], $sid);
    }

    /**
     * Provide a friendly representation
     *
     * @return string Machine friendly representation
     */
    public function __toString(): string {
        return '[Twilio.Messaging.V1.UsAppToPersonList]';
    }
}