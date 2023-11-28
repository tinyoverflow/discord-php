<?php
/**
 * GetAutoModerationRule200Response
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
 * GetAutoModerationRule200Response Class Doc Comment
 *
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements ArrayAccess<string, mixed>
 */
class GetAutoModerationRule200Response implements ModelInterface, ArrayAccess, JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'get_auto_moderation_rule_200_response';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var array<string, string>
      */
    protected static array $openAPITypes = [
        'id' => 'mixed',
        'guild_id' => 'mixed',
        'creator_id' => 'mixed',
        'name' => 'mixed',
        'event_type' => '\OpenAPI\Client\Model\AutomodEventType',
        'actions' => 'mixed',
        'trigger_type' => '\OpenAPI\Client\Model\AutomodTriggerType',
        'enabled' => 'mixed',
        'exempt_roles' => 'mixed',
        'exempt_channels' => 'mixed',
        'trigger_metadata' => 'mixed'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'id' => 'snowflake',
        'guild_id' => 'snowflake',
        'creator_id' => 'snowflake',
        'name' => null,
        'event_type' => null,
        'actions' => null,
        'trigger_type' => null,
        'enabled' => null,
        'exempt_roles' => null,
        'exempt_channels' => null,
        'trigger_metadata' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var array<string, bool>
      */
    protected static array $openAPINullables = [
        'id' => true,
		'guild_id' => true,
		'creator_id' => true,
		'name' => true,
		'event_type' => true,
		'actions' => true,
		'trigger_type' => true,
		'enabled' => true,
		'exempt_roles' => true,
		'exempt_channels' => true,
		'trigger_metadata' => true
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
        'id' => 'id',
        'guild_id' => 'guild_id',
        'creator_id' => 'creator_id',
        'name' => 'name',
        'event_type' => 'event_type',
        'actions' => 'actions',
        'trigger_type' => 'trigger_type',
        'enabled' => 'enabled',
        'exempt_roles' => 'exempt_roles',
        'exempt_channels' => 'exempt_channels',
        'trigger_metadata' => 'trigger_metadata'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var array<string, string>
     */
    protected static array $setters = [
        'id' => 'setId',
        'guild_id' => 'setGuildId',
        'creator_id' => 'setCreatorId',
        'name' => 'setName',
        'event_type' => 'setEventType',
        'actions' => 'setActions',
        'trigger_type' => 'setTriggerType',
        'enabled' => 'setEnabled',
        'exempt_roles' => 'setExemptRoles',
        'exempt_channels' => 'setExemptChannels',
        'trigger_metadata' => 'setTriggerMetadata'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var array<string, string>
     */
    protected static array $getters = [
        'id' => 'getId',
        'guild_id' => 'getGuildId',
        'creator_id' => 'getCreatorId',
        'name' => 'getName',
        'event_type' => 'getEventType',
        'actions' => 'getActions',
        'trigger_type' => 'getTriggerType',
        'enabled' => 'getEnabled',
        'exempt_roles' => 'getExemptRoles',
        'exempt_channels' => 'getExemptChannels',
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
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('guild_id', $data ?? [], null);
        $this->setIfExists('creator_id', $data ?? [], null);
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('event_type', $data ?? [], null);
        $this->setIfExists('actions', $data ?? [], null);
        $this->setIfExists('trigger_type', $data ?? [], null);
        $this->setIfExists('enabled', $data ?? [], null);
        $this->setIfExists('exempt_roles', $data ?? [], null);
        $this->setIfExists('exempt_channels', $data ?? [], null);
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

        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if (!preg_match("^(0|[1-9][0-9]*)$", $this->container['id'])) {
            $invalidProperties[] = "invalid value for 'id', must be conform to the pattern ^(0|[1-9][0-9]*)$.";
        }

        if ($this->container['guild_id'] === null) {
            $invalidProperties[] = "'guild_id' can't be null";
        }
        if (!preg_match("^(0|[1-9][0-9]*)$", $this->container['guild_id'])) {
            $invalidProperties[] = "invalid value for 'guild_id', must be conform to the pattern ^(0|[1-9][0-9]*)$.";
        }

        if ($this->container['creator_id'] === null) {
            $invalidProperties[] = "'creator_id' can't be null";
        }
        if (!preg_match("^(0|[1-9][0-9]*)$", $this->container['creator_id'])) {
            $invalidProperties[] = "invalid value for 'creator_id', must be conform to the pattern ^(0|[1-9][0-9]*)$.";
        }

        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['event_type'] === null) {
            $invalidProperties[] = "'event_type' can't be null";
        }
        if ($this->container['actions'] === null) {
            $invalidProperties[] = "'actions' can't be null";
        }
        if ($this->container['trigger_type'] === null) {
            $invalidProperties[] = "'trigger_type' can't be null";
        }
        if ($this->container['trigger_metadata'] === null) {
            $invalidProperties[] = "'trigger_metadata' can't be null";
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
     * Gets id
     *
     * @return mixed
     */
    public function getId(): mixed
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param mixed $id id
     *
     * @return $this
     */
    public function setId(mixed $id): static
    {
        if (is_null($id)) {
            array_push($this->openAPINullablesSetToNull, 'id');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('id', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        if (!is_null($id) && (!preg_match("^(0|[1-9][0-9]*)$", ObjectSerializer::toString($id)))) {
            throw new InvalidArgumentException("invalid value for \$id when calling GetAutoModerationRule200Response., must conform to the pattern ^(0|[1-9][0-9]*)$.");
        }

        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets guild_id
     *
     * @return mixed
     */
    public function getGuildId(): mixed
    {
        return $this->container['guild_id'];
    }

    /**
     * Sets guild_id
     *
     * @param mixed $guild_id guild_id
     *
     * @return $this
     */
    public function setGuildId(mixed $guild_id): static
    {
        if (is_null($guild_id)) {
            array_push($this->openAPINullablesSetToNull, 'guild_id');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('guild_id', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        if (!is_null($guild_id) && (!preg_match("^(0|[1-9][0-9]*)$", ObjectSerializer::toString($guild_id)))) {
            throw new InvalidArgumentException("invalid value for \$guild_id when calling GetAutoModerationRule200Response., must conform to the pattern ^(0|[1-9][0-9]*)$.");
        }

        $this->container['guild_id'] = $guild_id;

        return $this;
    }

    /**
     * Gets creator_id
     *
     * @return mixed
     */
    public function getCreatorId(): mixed
    {
        return $this->container['creator_id'];
    }

    /**
     * Sets creator_id
     *
     * @param mixed $creator_id creator_id
     *
     * @return $this
     */
    public function setCreatorId(mixed $creator_id): static
    {
        if (is_null($creator_id)) {
            array_push($this->openAPINullablesSetToNull, 'creator_id');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('creator_id', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        if (!is_null($creator_id) && (!preg_match("^(0|[1-9][0-9]*)$", ObjectSerializer::toString($creator_id)))) {
            throw new InvalidArgumentException("invalid value for \$creator_id when calling GetAutoModerationRule200Response., must conform to the pattern ^(0|[1-9][0-9]*)$.");
        }

        $this->container['creator_id'] = $creator_id;

        return $this;
    }

    /**
     * Gets name
     *
     * @return mixed
     */
    public function getName(): mixed
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param mixed $name name
     *
     * @return $this
     */
    public function setName(mixed $name): static
    {
        if (is_null($name)) {
            array_push($this->openAPINullablesSetToNull, 'name');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('name', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets event_type
     *
     * @return \OpenAPI\Client\Model\AutomodEventType
     */
    public function getEventType(): ?\OpenAPI\Client\Model\AutomodEventType
    {
        return $this->container['event_type'];
    }

    /**
     * Sets event_type
     *
     * @param \OpenAPI\Client\Model\AutomodEventType $event_type event_type
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
     * @return mixed
     */
    public function getActions(): mixed
    {
        return $this->container['actions'];
    }

    /**
     * Sets actions
     *
     * @param mixed $actions actions
     *
     * @return $this
     */
    public function setActions(mixed $actions): static
    {
        if (is_null($actions)) {
            array_push($this->openAPINullablesSetToNull, 'actions');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('actions', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['actions'] = $actions;

        return $this;
    }

    /**
     * Gets trigger_type
     *
     * @return \OpenAPI\Client\Model\AutomodTriggerType
     */
    public function getTriggerType(): ?\OpenAPI\Client\Model\AutomodTriggerType
    {
        return $this->container['trigger_type'];
    }

    /**
     * Sets trigger_type
     *
     * @param \OpenAPI\Client\Model\AutomodTriggerType $trigger_type trigger_type
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
     * Gets enabled
     *
     * @return mixed|null
     */
    public function getEnabled(): mixed
    {
        return $this->container['enabled'];
    }

    /**
     * Sets enabled
     *
     * @param mixed|null $enabled enabled
     *
     * @return $this
     */
    public function setEnabled(mixed $enabled): static
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
     * @return mixed|null
     */
    public function getExemptRoles(): mixed
    {
        return $this->container['exempt_roles'];
    }

    /**
     * Sets exempt_roles
     *
     * @param mixed|null $exempt_roles exempt_roles
     *
     * @return $this
     */
    public function setExemptRoles(mixed $exempt_roles): static
    {
        if (is_null($exempt_roles)) {
            array_push($this->openAPINullablesSetToNull, 'exempt_roles');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('exempt_roles', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['exempt_roles'] = $exempt_roles;

        return $this;
    }

    /**
     * Gets exempt_channels
     *
     * @return mixed|null
     */
    public function getExemptChannels(): mixed
    {
        return $this->container['exempt_channels'];
    }

    /**
     * Sets exempt_channels
     *
     * @param mixed|null $exempt_channels exempt_channels
     *
     * @return $this
     */
    public function setExemptChannels(mixed $exempt_channels): static
    {
        if (is_null($exempt_channels)) {
            array_push($this->openAPINullablesSetToNull, 'exempt_channels');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('exempt_channels', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['exempt_channels'] = $exempt_channels;

        return $this;
    }

    /**
     * Gets trigger_metadata
     *
     * @return mixed
     */
    public function getTriggerMetadata(): mixed
    {
        return $this->container['trigger_metadata'];
    }

    /**
     * Sets trigger_metadata
     *
     * @param mixed $trigger_metadata trigger_metadata
     *
     * @return $this
     */
    public function setTriggerMetadata(mixed $trigger_metadata): static
    {
        if (is_null($trigger_metadata)) {
            array_push($this->openAPINullablesSetToNull, 'trigger_metadata');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('trigger_metadata', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
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


