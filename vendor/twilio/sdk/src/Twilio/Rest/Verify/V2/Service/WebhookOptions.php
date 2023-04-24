<?php

/**
 * This code was generated by
 * \ / _    _  _|   _  _
 * | (_)\/(_)(_|\/| |(/_  v1.0.0
 * /       /
 */

namespace Twilio\Rest\Verify\V2\Service;

use Twilio\Options;
use Twilio\Values;

/**
 * PLEASE NOTE that this class contains beta products that are subject to change. Use them with caution.
 */
abstract class WebhookOptions {
    /**
     * @param string $status The webhook status
     * @param string $version The webhook version
     * @return CreateWebhookOptions Options builder
     */
    public static function create(string $status = Values::NONE, string $version = Values::NONE): CreateWebhookOptions {
        return new CreateWebhookOptions($status, $version);
    }

    /**
     * @param string $friendlyName The string that you assigned to describe the
     *                             webhook
     * @param string[] $eventTypes The array of events that this Webhook is
     *                             subscribed to.
     * @param string $webhookUrl The URL associated with this Webhook.
     * @param string $status The webhook status
     * @param string $version The webhook version
     * @return UpdateWebhookOptions Options builder
     */
    public static function update(string $friendlyName = Values::NONE, array $eventTypes = Values::ARRAY_NONE, string $webhookUrl = Values::NONE, string $status = Values::NONE, string $version = Values::NONE): UpdateWebhookOptions {
        return new UpdateWebhookOptions($friendlyName, $eventTypes, $webhookUrl, $status, $version);
    }
}

class CreateWebhookOptions extends Options {
    /**
     * @param string $status The webhook status
     * @param string $version The webhook version
     */
    public function __construct(string $status = Values::NONE, string $version = Values::NONE) {
        $this->options['status'] = $status;
        $this->options['version'] = $version;
    }

    /**
     * The webhook status. Default value is `enabled`. One of: `enabled` or `disabled`
     *
     * @param string $status The webhook status
     * @return $this Fluent Builder
     */
    public function setStatus(string $status): self {
        $this->options['status'] = $status;
        return $this;
    }

    /**
     * The webhook version. Default value is `v2` which includes all the latest fields. Version `v1` is legacy and may be removed in the future.
     *
     * @param string $version The webhook version
     * @return $this Fluent Builder
     */
    public function setVersion(string $version): self {
        $this->options['version'] = $version;
        return $this;
    }

    /**
     * Provide a friendly representation
     *
     * @return string Machine friendly representation
     */
    public function __toString(): string {
        $options = \http_build_query(Values::of($this->options), '', ' ');
        return '[Twilio.Verify.V2.CreateWebhookOptions ' . $options . ']';
    }
}

class UpdateWebhookOptions extends Options {
    /**
     * @param string $friendlyName The string that you assigned to describe the
     *                             webhook
     * @param string[] $eventTypes The array of events that this Webhook is
     *                             subscribed to.
     * @param string $webhookUrl The URL associated with this Webhook.
     * @param string $status The webhook status
     * @param string $version The webhook version
     */
    public function __construct(string $friendlyName = Values::NONE, array $eventTypes = Values::ARRAY_NONE, string $webhookUrl = Values::NONE, string $status = Values::NONE, string $version = Values::NONE) {
        $this->options['friendlyName'] = $friendlyName;
        $this->options['eventTypes'] = $eventTypes;
        $this->options['webhookUrl'] = $webhookUrl;
        $this->options['status'] = $status;
        $this->options['version'] = $version;
    }

    /**
     * The string that you assigned to describe the webhook. **This value should not contain PII.**
     *
     * @param string $friendlyName The string that you assigned to describe the
     *                             webhook
     * @return $this Fluent Builder
     */
    public function setFriendlyName(string $friendlyName): self {
        $this->options['friendlyName'] = $friendlyName;
        return $this;
    }

    /**
     * The array of events that this Webhook is subscribed to. Possible event types: `*, factor.deleted, factor.created, factor.verified, challenge.approved, challenge.denied`
     *
     * @param string[] $eventTypes The array of events that this Webhook is
     *                             subscribed to.
     * @return $this Fluent Builder
     */
    public function setEventTypes(array $eventTypes): self {
        $this->options['eventTypes'] = $eventTypes;
        return $this;
    }

    /**
     * The URL associated with this Webhook.
     *
     * @param string $webhookUrl The URL associated with this Webhook.
     * @return $this Fluent Builder
     */
    public function setWebhookUrl(string $webhookUrl): self {
        $this->options['webhookUrl'] = $webhookUrl;
        return $this;
    }

    /**
     * The webhook status. Default value is `enabled`. One of: `enabled` or `disabled`
     *
     * @param string $status The webhook status
     * @return $this Fluent Builder
     */
    public function setStatus(string $status): self {
        $this->options['status'] = $status;
        return $this;
    }

    /**
     * The webhook version. Default value is `v2` which includes all the latest fields. Version `v1` is legacy and may be removed in the future.
     *
     * @param string $version The webhook version
     * @return $this Fluent Builder
     */
    public function setVersion(string $version): self {
        $this->options['version'] = $version;
        return $this;
    }

    /**
     * Provide a friendly representation
     *
     * @return string Machine friendly representation
     */
    public function __toString(): string {
        $options = \http_build_query(Values::of($this->options), '', ' ');
        return '[Twilio.Verify.V2.UpdateWebhookOptions ' . $options . ']';
    }
}