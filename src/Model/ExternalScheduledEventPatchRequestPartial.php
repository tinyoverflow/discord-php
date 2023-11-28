<?php
/**
 * ExternalScheduledEventPatchRequestPartial
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
 * ExternalScheduledEventPatchRequestPartial Class Doc Comment
 *
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements ArrayAccess<string, mixed>
 */
class ExternalScheduledEventPatchRequestPartial implements ModelInterface, ArrayAccess, JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'ExternalScheduledEventPatchRequestPartial';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var array<string, string>
      */
    protected static array $openAPITypes = [
        'status' => '\OpenAPI\Client\Model\GuildScheduledEventStatuses',
        'name' => 'string',
        'description' => 'string',
        'image' => 'string',
        'scheduled_start_time' => '\DateTime',
        'scheduled_end_time' => '\DateTime',
        'entity_type' => 'OneOf',
        'privacy_level' => '\OpenAPI\Client\Model\GuildScheduledEventPrivacyLevels',
        'channel_id' => 'string',
        'entity_metadata' => '\OpenAPI\Client\Model\EntityMetadataExternal'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'status' => null,
        'name' => null,
        'description' => null,
        'image' => null,
        'scheduled_start_time' => 'date-time',
        'scheduled_end_time' => 'date-time',
        'entity_type' => null,
        'privacy_level' => null,
        'channel_id' => 'snowflake',
        'entity_metadata' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var array<string, bool>
      */
    protected static array $openAPINullables = [
        'status' => true,
		'name' => false,
		'description' => true,
		'image' => true,
		'scheduled_start_time' => false,
		'scheduled_end_time' => true,
		'entity_type' => true,
		'privacy_level' => true,
		'channel_id' => false,
		'entity_metadata' => false
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
        'status' => 'status',
        'name' => 'name',
        'description' => 'description',
        'image' => 'image',
        'scheduled_start_time' => 'scheduled_start_time',
        'scheduled_end_time' => 'scheduled_end_time',
        'entity_type' => 'entity_type',
        'privacy_level' => 'privacy_level',
        'channel_id' => 'channel_id',
        'entity_metadata' => 'entity_metadata'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var array<string, string>
     */
    protected static array $setters = [
        'status' => 'setStatus',
        'name' => 'setName',
        'description' => 'setDescription',
        'image' => 'setImage',
        'scheduled_start_time' => 'setScheduledStartTime',
        'scheduled_end_time' => 'setScheduledEndTime',
        'entity_type' => 'setEntityType',
        'privacy_level' => 'setPrivacyLevel',
        'channel_id' => 'setChannelId',
        'entity_metadata' => 'setEntityMetadata'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var array<string, string>
     */
    protected static array $getters = [
        'status' => 'getStatus',
        'name' => 'getName',
        'description' => 'getDescription',
        'image' => 'getImage',
        'scheduled_start_time' => 'getScheduledStartTime',
        'scheduled_end_time' => 'getScheduledEndTime',
        'entity_type' => 'getEntityType',
        'privacy_level' => 'getPrivacyLevel',
        'channel_id' => 'getChannelId',
        'entity_metadata' => 'getEntityMetadata'
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
        $this->setIfExists('status', $data ?? [], null);
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('description', $data ?? [], null);
        $this->setIfExists('image', $data ?? [], null);
        $this->setIfExists('scheduled_start_time', $data ?? [], null);
        $this->setIfExists('scheduled_end_time', $data ?? [], null);
        $this->setIfExists('entity_type', $data ?? [], null);
        $this->setIfExists('privacy_level', $data ?? [], null);
        $this->setIfExists('channel_id', $data ?? [], null);
        $this->setIfExists('entity_metadata', $data ?? [], null);
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

        if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 1000)) {
            $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 1000.";
        }

        if (!is_null($this->container['channel_id']) && !preg_match("/^(0|[1-9][0-9]*)$/", $this->container['channel_id'])) {
            $invalidProperties[] = "invalid value for 'channel_id', must be conform to the pattern /^(0|[1-9][0-9]*)$/.";
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
     * Gets status
     *
     * @return \OpenAPI\Client\Model\GuildScheduledEventStatuses|null
     */
    public function getStatus(): ?\OpenAPI\Client\Model\GuildScheduledEventStatuses
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param \OpenAPI\Client\Model\GuildScheduledEventStatuses|null $status status
     *
     * @return $this
     */
    public function setStatus(?\OpenAPI\Client\Model\GuildScheduledEventStatuses $status): static
    {
        if (is_null($status)) {
            array_push($this->openAPINullablesSetToNull, 'status');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('status', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['status'] = $status;

        return $this;
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
            throw new InvalidArgumentException('invalid length for $name when calling ExternalScheduledEventPatchRequestPartial., must be smaller than or equal to 100.');
        }

        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string|null
     */
    public function getDescription(): ?string
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string|null $description description
     *
     * @return $this
     */
    public function setDescription(?string $description): static
    {
        if (is_null($description)) {
            array_push($this->openAPINullablesSetToNull, 'description');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('description', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($description) && (mb_strlen($description) > 1000)) {
            throw new InvalidArgumentException('invalid length for $description when calling ExternalScheduledEventPatchRequestPartial., must be smaller than or equal to 1000.');
        }

        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets image
     *
     * @return string|null
     */
    public function getImage(): ?string
    {
        return $this->container['image'];
    }

    /**
     * Sets image
     *
     * @param string|null $image image
     *
     * @return $this
     */
    public function setImage(?string $image): static
    {
        if (is_null($image)) {
            array_push($this->openAPINullablesSetToNull, 'image');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('image', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['image'] = $image;

        return $this;
    }

    /**
     * Gets scheduled_start_time
     *
     * @return \DateTime|null
     */
    public function getScheduledStartTime(): ?\DateTime
    {
        return $this->container['scheduled_start_time'];
    }

    /**
     * Sets scheduled_start_time
     *
     * @param \DateTime|null $scheduled_start_time scheduled_start_time
     *
     * @return $this
     */
    public function setScheduledStartTime(?\DateTime $scheduled_start_time): static
    {
        if (is_null($scheduled_start_time)) {
            throw new InvalidArgumentException('non-nullable scheduled_start_time cannot be null');
        }
        $this->container['scheduled_start_time'] = $scheduled_start_time;

        return $this;
    }

    /**
     * Gets scheduled_end_time
     *
     * @return \DateTime|null
     */
    public function getScheduledEndTime(): ?\DateTime
    {
        return $this->container['scheduled_end_time'];
    }

    /**
     * Sets scheduled_end_time
     *
     * @param \DateTime|null $scheduled_end_time scheduled_end_time
     *
     * @return $this
     */
    public function setScheduledEndTime(?\DateTime $scheduled_end_time): static
    {
        if (is_null($scheduled_end_time)) {
            array_push($this->openAPINullablesSetToNull, 'scheduled_end_time');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('scheduled_end_time', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['scheduled_end_time'] = $scheduled_end_time;

        return $this;
    }

    /**
     * Gets entity_type
     *
     * @return OneOf|null
     */
    public function getEntityType(): ?OneOf
    {
        return $this->container['entity_type'];
    }

    /**
     * Sets entity_type
     *
     * @param OneOf|null $entity_type entity_type
     *
     * @return $this
     */
    public function setEntityType(?OneOf $entity_type): static
    {
        if (is_null($entity_type)) {
            array_push($this->openAPINullablesSetToNull, 'entity_type');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('entity_type', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['entity_type'] = $entity_type;

        return $this;
    }

    /**
     * Gets privacy_level
     *
     * @return \OpenAPI\Client\Model\GuildScheduledEventPrivacyLevels|null
     */
    public function getPrivacyLevel(): ?\OpenAPI\Client\Model\GuildScheduledEventPrivacyLevels
    {
        return $this->container['privacy_level'];
    }

    /**
     * Sets privacy_level
     *
     * @param \OpenAPI\Client\Model\GuildScheduledEventPrivacyLevels|null $privacy_level privacy_level
     *
     * @return $this
     */
    public function setPrivacyLevel(?\OpenAPI\Client\Model\GuildScheduledEventPrivacyLevels $privacy_level): static
    {
        if (is_null($privacy_level)) {
            array_push($this->openAPINullablesSetToNull, 'privacy_level');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('privacy_level', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['privacy_level'] = $privacy_level;

        return $this;
    }

    /**
     * Gets channel_id
     *
     * @return string|null
     */
    public function getChannelId(): ?string
    {
        return $this->container['channel_id'];
    }

    /**
     * Sets channel_id
     *
     * @param string|null $channel_id channel_id
     *
     * @return $this
     */
    public function setChannelId(?string $channel_id): static
    {
        if (is_null($channel_id)) {
            throw new InvalidArgumentException('non-nullable channel_id cannot be null');
        }

        if ((!preg_match("/^(0|[1-9][0-9]*)$/", ObjectSerializer::toString($channel_id)))) {
            throw new InvalidArgumentException("invalid value for \$channel_id when calling ExternalScheduledEventPatchRequestPartial., must conform to the pattern /^(0|[1-9][0-9]*)$/.");
        }

        $this->container['channel_id'] = $channel_id;

        return $this;
    }

    /**
     * Gets entity_metadata
     *
     * @return \OpenAPI\Client\Model\EntityMetadataExternal|null
     */
    public function getEntityMetadata(): ?\OpenAPI\Client\Model\EntityMetadataExternal
    {
        return $this->container['entity_metadata'];
    }

    /**
     * Sets entity_metadata
     *
     * @param \OpenAPI\Client\Model\EntityMetadataExternal|null $entity_metadata entity_metadata
     *
     * @return $this
     */
    public function setEntityMetadata(?\OpenAPI\Client\Model\EntityMetadataExternal $entity_metadata): static
    {
        if (is_null($entity_metadata)) {
            throw new InvalidArgumentException('non-nullable entity_metadata cannot be null');
        }
        $this->container['entity_metadata'] = $entity_metadata;

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

