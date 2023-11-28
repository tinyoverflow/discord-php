<?php
/**
 * DefaultKeywordListUpsertRequestPartial
 *
 * PHP version 8.1
 *
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Discord HTTP API (Preview)
 *
 * Preview of the Discord v10 HTTP API specification. See https://discord.com/developers/docs for more details.
 *
 * The version of the OpenAPI document: 10
 * @generated Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 7.2.0-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace OpenAPI\Client\Model;

use ArrayAccess;
use JsonSerializable;
use InvalidArgumentException;
use ReturnTypeWillChange;
use OpenAPI\Client\ObjectSerializer;

/**
 * DefaultKeywordListUpsertRequestPartial Class Doc Comment
 *
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements ArrayAccess<string, mixed>
 */
class DefaultKeywordListUpsertRequestPartial implements ModelInterface, ArrayAccess, JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'DefaultKeywordListUpsertRequestPartial';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var array<string, string>
      */
    protected static array $openAPITypes = [
        'name' => 'string',
        'event_type' => '\OpenAPI\Client\Model\AutomodEventType',
        'actions' => '\OpenAPI\Client\Model\DefaultKeywordListUpsertRequestActionsInner[]',
        'enabled' => 'bool',
        'exempt_roles' => 'string[]',
        'exempt_channels' => 'string[]',
        'trigger_type' => '\OpenAPI\Client\Model\AutomodTriggerType',
        'trigger_metadata' => '\OpenAPI\Client\Model\DefaultKeywordListTriggerMetadata'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'name' => null,
        'event_type' => null,
        'actions' => null,
        'enabled' => null,
        'exempt_roles' => 'snowflake',
        'exempt_channels' => 'snowflake',
        'trigger_type' => null,
        'trigger_metadata' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var array<string, bool>
      */
    protected static array $openAPINullables = [
        'name' => false,
		'event_type' => true,
		'actions' => false,
		'enabled' => true,
		'exempt_roles' => false,
		'exempt_channels' => false,
		'trigger_type' => true,
		'trigger_metadata' => false
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var array<string, bool>
      */
    protected array $openAPINullablesSetToNull = [];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array<string, string>
     */
    public static function openAPITypes(): array
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array<string, string>
     */
    public static function openAPIFormats(): array
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of nullable properties
     *
     * @return array<string, bool>
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables;
    }

    /**
     * Array of nullable field names deliberately set to null
     *
     * @return array<string, bool>
     */
    private function getOpenAPINullablesSetToNull(): array
    {
        return $this->openAPINullablesSetToNull;
    }

    /**
     * Setter - Array of nullable field names deliberately set to null
     *
     * @param array<string, bool> $openAPINullablesSetToNull
     */
    private function setOpenAPINullablesSetToNull(array $openAPINullablesSetToNull): void
    {
        $this->openAPINullablesSetToNull = $openAPINullablesSetToNull;
    }

    /**
     * Checks if a property is nullable
     *
     * @param string $property
     * @return bool
     */
    public static function isNullable(string $property): bool
    {
        return self::openAPINullables()[$property] ?? false;
    }

    /**
     * Checks if a nullable property is set to null.
     *
     * @param string $property
     * @return bool
     */
    public function isNullableSetToNull(string $property): bool
    {
        return in_array($property, $this->getOpenAPINullablesSetToNull(), true);
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var array<string, string>
     */
    protected static array $attributeMap = [
        'name' => 'name',
        'event_type' => 'event_type',
        'actions' => 'actions',
        'enabled' => 'enabled',
        'exempt_roles' => 'exempt_roles',
        'exempt_channels' => 'exempt_channels',
        'trigger_type' => 'trigger_type',
        'trigger_metadata' => 'trigger_metadata'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var array<string, string>
     */
    protected static array $setters = [
        'name' => 'setName',
        'event_type' => 'setEventType',
        'actions' => 'setActions',
        'enabled' => 'setEnabled',
        'exempt_roles' => 'setExemptRoles',
        'exempt_channels' => 'setExemptChannels',
        'trigger_type' => 'setTriggerType',
        'trigger_metadata' => 'setTriggerMetadata'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var array<string, string>
     */
    protected static array $getters = [
        'name' => 'getName',
        'event_type' => 'getEventType',
        'actions' => 'getActions',
        'enabled' => 'getEnabled',
        'exempt_roles' => 'getExemptRoles',
        'exempt_channels' => 'getExemptChannels',
        'trigger_type' => 'getTriggerType',
        'trigger_metadata' => 'getTriggerMetadata'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array<string, string>
     */
    public static function attributeMap(): array
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array<string, string>
     */
    public static function setters(): array
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array<string, string>
     */
    public static function getters(): array
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName(): string
    {
        return self::$openAPIModelName;
    }


    /**
     * Associative array for storing property values
     *
     * @var array
     */
    protected array $container = [];

    /**
     * Constructor
     *
     * @param array $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('event_type', $data ?? [], null);
        $this->setIfExists('actions', $data ?? [], null);
        $this->setIfExists('enabled', $data ?? [], null);
        $this->setIfExists('exempt_roles', $data ?? [], null);
        $this->setIfExists('exempt_channels', $data ?? [], null);
        $this->setIfExists('trigger_type', $data ?? [], null);
        $this->setIfExists('trigger_metadata', $data ?? [], null);
    }

    /**
    * Sets $this->container[$variableName] to the given data or to the given default Value; if $variableName
    * is nullable and its value is set to null in the $fields array, then mark it as "set to null" in the
    * $this->openAPINullablesSetToNull array
    *
    * @param string $variableName
    * @param array  $fields
    * @param mixed  $defaultValue
    */
    private function setIfExists(string $variableName, array $fields, mixed $defaultValue): void
    {
        if (self::isNullable($variableName) && array_key_exists($variableName, $fields) && is_null($fields[$variableName])) {
            $this->openAPINullablesSetToNull[] = $variableName;
        }

        $this->container[$variableName] = $fields[$variableName] ?? $defaultValue;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return string[] invalid properties with reasons
     */
    public function listInvalidProperties(): array
    {
        $invalidProperties = [];

        if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 100)) {
            $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 100.";
        }

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid(): bool
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets name
     *
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string|null $name name
     *
     * @return $this
     */
    public function setName(?string $name): static
    {
        if (is_null($name)) {
            throw new InvalidArgumentException('non-nullable name cannot be null');
        }
        if ((mb_strlen($name) > 100)) {
            throw new InvalidArgumentException('invalid length for $name when calling DefaultKeywordListUpsertRequestPartial., must be smaller than or equal to 100.');
        }

        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets event_type
     *
     * @return \OpenAPI\Client\Model\AutomodEventType|null
     */
    public function getEventType(): ?\OpenAPI\Client\Model\AutomodEventType
    {
        return $this->container['event_type'];
    }

    /**
     * Sets event_type
     *
     * @param \OpenAPI\Client\Model\AutomodEventType|null $event_type event_type
     *
     * @return $this
     */
    public function setEventType(?\OpenAPI\Client\Model\AutomodEventType $event_type): static
    {
        if (is_null($event_type)) {
            array_push($this->openAPINullablesSetToNull, 'event_type');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('event_type', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['event_type'] = $event_type;

        return $this;
    }

    /**
     * Gets actions
     *
     * @return \OpenAPI\Client\Model\DefaultKeywordListUpsertRequestActionsInner[]|null
     */
    public function getActions(): ?array
    {
        return $this->container['actions'];
    }

    /**
     * Sets actions
     *
     * @param \OpenAPI\Client\Model\DefaultKeywordListUpsertRequestActionsInner[]|null $actions actions
     *
     * @return $this
     */
    public function setActions(?array $actions): static
    {
        if (is_null($actions)) {
            throw new InvalidArgumentException('non-nullable actions cannot be null');
        }
        $this->container['actions'] = $actions;

        return $this;
    }

    /**
     * Gets enabled
     *
     * @return bool|null
     */
    public function getEnabled(): ?bool
    {
        return $this->container['enabled'];
    }

    /**
     * Sets enabled
     *
     * @param bool|null $enabled enabled
     *
     * @return $this
     */
    public function setEnabled(?bool $enabled): static
    {
        if (is_null($enabled)) {
            array_push($this->openAPINullablesSetToNull, 'enabled');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('enabled', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['enabled'] = $enabled;

        return $this;
    }

    /**
     * Gets exempt_roles
     *
     * @return string[]|null
     */
    public function getExemptRoles(): ?array
    {
        return $this->container['exempt_roles'];
    }

    /**
     * Sets exempt_roles
     *
     * @param string[]|null $exempt_roles exempt_roles
     *
     * @return $this
     */
    public function setExemptRoles(?array $exempt_roles): static
    {
        if (is_null($exempt_roles)) {
            throw new InvalidArgumentException('non-nullable exempt_roles cannot be null');
        }
        $this->container['exempt_roles'] = $exempt_roles;

        return $this;
    }

    /**
     * Gets exempt_channels
     *
     * @return string[]|null
     */
    public function getExemptChannels(): ?array
    {
        return $this->container['exempt_channels'];
    }

    /**
     * Sets exempt_channels
     *
     * @param string[]|null $exempt_channels exempt_channels
     *
     * @return $this
     */
    public function setExemptChannels(?array $exempt_channels): static
    {
        if (is_null($exempt_channels)) {
            throw new InvalidArgumentException('non-nullable exempt_channels cannot be null');
        }
        $this->container['exempt_channels'] = $exempt_channels;

        return $this;
    }

    /**
     * Gets trigger_type
     *
     * @return \OpenAPI\Client\Model\AutomodTriggerType|null
     */
    public function getTriggerType(): ?\OpenAPI\Client\Model\AutomodTriggerType
    {
        return $this->container['trigger_type'];
    }

    /**
     * Sets trigger_type
     *
     * @param \OpenAPI\Client\Model\AutomodTriggerType|null $trigger_type trigger_type
     *
     * @return $this
     */
    public function setTriggerType(?\OpenAPI\Client\Model\AutomodTriggerType $trigger_type): static
    {
        if (is_null($trigger_type)) {
            array_push($this->openAPINullablesSetToNull, 'trigger_type');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('trigger_type', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['trigger_type'] = $trigger_type;

        return $this;
    }

    /**
     * Gets trigger_metadata
     *
     * @return \OpenAPI\Client\Model\DefaultKeywordListTriggerMetadata|null
     */
    public function getTriggerMetadata(): ?\OpenAPI\Client\Model\DefaultKeywordListTriggerMetadata
    {
        return $this->container['trigger_metadata'];
    }

    /**
     * Sets trigger_metadata
     *
     * @param \OpenAPI\Client\Model\DefaultKeywordListTriggerMetadata|null $trigger_metadata trigger_metadata
     *
     * @return $this
     */
    public function setTriggerMetadata(?\OpenAPI\Client\Model\DefaultKeywordListTriggerMetadata $trigger_metadata): static
    {
        if (is_null($trigger_metadata)) {
            throw new InvalidArgumentException('non-nullable trigger_metadata cannot be null');
        }
        $this->container['trigger_metadata'] = $trigger_metadata;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists(mixed $offset): bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    #[ReturnTypeWillChange]
    public function offsetGet(mixed $offset): mixed
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet(mixed $offset, mixed $value): void
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset(mixed $offset): void
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    #[ReturnTypeWillChange]
    public function jsonSerialize(): mixed
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString(): string
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue(): string
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


