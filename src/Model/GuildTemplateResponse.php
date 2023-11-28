<?php
/**
 * GuildTemplateResponse
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
 * GuildTemplateResponse Class Doc Comment
 *
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements ArrayAccess<string, mixed>
 */
class GuildTemplateResponse implements ModelInterface, ArrayAccess, JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'GuildTemplateResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var array<string, string>
      */
    protected static array $openAPITypes = [
        'code' => 'string',
        'name' => 'string',
        'description' => 'string',
        'usage_count' => 'int',
        'creator_id' => 'string',
        'creator' => '\OpenAPI\Client\Model\UserResponse',
        'created_at' => '\DateTime',
        'updated_at' => '\DateTime',
        'source_guild_id' => 'string',
        'serialized_source_guild' => '\OpenAPI\Client\Model\GuildTemplateSnapshotResponse',
        'is_dirty' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'code' => null,
        'name' => null,
        'description' => null,
        'usage_count' => 'int32',
        'creator_id' => 'snowflake',
        'creator' => null,
        'created_at' => 'date-time',
        'updated_at' => 'date-time',
        'source_guild_id' => 'snowflake',
        'serialized_source_guild' => null,
        'is_dirty' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var array<string, bool>
      */
    protected static array $openAPINullables = [
        'code' => false,
		'name' => false,
		'description' => true,
		'usage_count' => false,
		'creator_id' => false,
		'creator' => true,
		'created_at' => false,
		'updated_at' => false,
		'source_guild_id' => false,
		'serialized_source_guild' => false,
		'is_dirty' => true
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
        'code' => 'code',
        'name' => 'name',
        'description' => 'description',
        'usage_count' => 'usage_count',
        'creator_id' => 'creator_id',
        'creator' => 'creator',
        'created_at' => 'created_at',
        'updated_at' => 'updated_at',
        'source_guild_id' => 'source_guild_id',
        'serialized_source_guild' => 'serialized_source_guild',
        'is_dirty' => 'is_dirty'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var array<string, string>
     */
    protected static array $setters = [
        'code' => 'setCode',
        'name' => 'setName',
        'description' => 'setDescription',
        'usage_count' => 'setUsageCount',
        'creator_id' => 'setCreatorId',
        'creator' => 'setCreator',
        'created_at' => 'setCreatedAt',
        'updated_at' => 'setUpdatedAt',
        'source_guild_id' => 'setSourceGuildId',
        'serialized_source_guild' => 'setSerializedSourceGuild',
        'is_dirty' => 'setIsDirty'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var array<string, string>
     */
    protected static array $getters = [
        'code' => 'getCode',
        'name' => 'getName',
        'description' => 'getDescription',
        'usage_count' => 'getUsageCount',
        'creator_id' => 'getCreatorId',
        'creator' => 'getCreator',
        'created_at' => 'getCreatedAt',
        'updated_at' => 'getUpdatedAt',
        'source_guild_id' => 'getSourceGuildId',
        'serialized_source_guild' => 'getSerializedSourceGuild',
        'is_dirty' => 'getIsDirty'
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
        $this->setIfExists('code', $data ?? [], null);
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('description', $data ?? [], null);
        $this->setIfExists('usage_count', $data ?? [], null);
        $this->setIfExists('creator_id', $data ?? [], null);
        $this->setIfExists('creator', $data ?? [], null);
        $this->setIfExists('created_at', $data ?? [], null);
        $this->setIfExists('updated_at', $data ?? [], null);
        $this->setIfExists('source_guild_id', $data ?? [], null);
        $this->setIfExists('serialized_source_guild', $data ?? [], null);
        $this->setIfExists('is_dirty', $data ?? [], null);
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

        if ($this->container['code'] === null) {
            $invalidProperties[] = "'code' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['usage_count'] === null) {
            $invalidProperties[] = "'usage_count' can't be null";
        }
        if ($this->container['creator_id'] === null) {
            $invalidProperties[] = "'creator_id' can't be null";
        }
        if (!preg_match("/^(0|[1-9][0-9]*)$/", $this->container['creator_id'])) {
            $invalidProperties[] = "invalid value for 'creator_id', must be conform to the pattern /^(0|[1-9][0-9]*)$/.";
        }

        if ($this->container['created_at'] === null) {
            $invalidProperties[] = "'created_at' can't be null";
        }
        if ($this->container['updated_at'] === null) {
            $invalidProperties[] = "'updated_at' can't be null";
        }
        if ($this->container['source_guild_id'] === null) {
            $invalidProperties[] = "'source_guild_id' can't be null";
        }
        if (!preg_match("/^(0|[1-9][0-9]*)$/", $this->container['source_guild_id'])) {
            $invalidProperties[] = "invalid value for 'source_guild_id', must be conform to the pattern /^(0|[1-9][0-9]*)$/.";
        }

        if ($this->container['serialized_source_guild'] === null) {
            $invalidProperties[] = "'serialized_source_guild' can't be null";
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
     * Gets code
     *
     * @return string
     */
    public function getCode(): string
    {
        return $this->container['code'];
    }

    /**
     * Sets code
     *
     * @param string $code code
     *
     * @return $this
     */
    public function setCode(string $code): static
    {
        if (is_null($code)) {
            throw new InvalidArgumentException('non-nullable code cannot be null');
        }
        $this->container['code'] = $code;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name name
     *
     * @return $this
     */
    public function setName(string $name): static
    {
        if (is_null($name)) {
            throw new InvalidArgumentException('non-nullable name cannot be null');
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
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets usage_count
     *
     * @return int
     */
    public function getUsageCount(): int
    {
        return $this->container['usage_count'];
    }

    /**
     * Sets usage_count
     *
     * @param int $usage_count usage_count
     *
     * @return $this
     */
    public function setUsageCount(int $usage_count): static
    {
        if (is_null($usage_count)) {
            throw new InvalidArgumentException('non-nullable usage_count cannot be null');
        }
        $this->container['usage_count'] = $usage_count;

        return $this;
    }

    /**
     * Gets creator_id
     *
     * @return string
     */
    public function getCreatorId(): string
    {
        return $this->container['creator_id'];
    }

    /**
     * Sets creator_id
     *
     * @param string $creator_id creator_id
     *
     * @return $this
     */
    public function setCreatorId(string $creator_id): static
    {
        if (is_null($creator_id)) {
            throw new InvalidArgumentException('non-nullable creator_id cannot be null');
        }

        if ((!preg_match("/^(0|[1-9][0-9]*)$/", ObjectSerializer::toString($creator_id)))) {
            throw new InvalidArgumentException("invalid value for \$creator_id when calling GuildTemplateResponse., must conform to the pattern /^(0|[1-9][0-9]*)$/.");
        }

        $this->container['creator_id'] = $creator_id;

        return $this;
    }

    /**
     * Gets creator
     *
     * @return \OpenAPI\Client\Model\UserResponse|null
     */
    public function getCreator(): ?\OpenAPI\Client\Model\UserResponse
    {
        return $this->container['creator'];
    }

    /**
     * Sets creator
     *
     * @param \OpenAPI\Client\Model\UserResponse|null $creator creator
     *
     * @return $this
     */
    public function setCreator(?\OpenAPI\Client\Model\UserResponse $creator): static
    {
        if (is_null($creator)) {
            array_push($this->openAPINullablesSetToNull, 'creator');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('creator', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['creator'] = $creator;

        return $this;
    }

    /**
     * Gets created_at
     *
     * @return \DateTime
     */
    public function getCreatedAt(): \DateTime
    {
        return $this->container['created_at'];
    }

    /**
     * Sets created_at
     *
     * @param \DateTime $created_at created_at
     *
     * @return $this
     */
    public function setCreatedAt(\DateTime $created_at): static
    {
        if (is_null($created_at)) {
            throw new InvalidArgumentException('non-nullable created_at cannot be null');
        }
        $this->container['created_at'] = $created_at;

        return $this;
    }

    /**
     * Gets updated_at
     *
     * @return \DateTime
     */
    public function getUpdatedAt(): \DateTime
    {
        return $this->container['updated_at'];
    }

    /**
     * Sets updated_at
     *
     * @param \DateTime $updated_at updated_at
     *
     * @return $this
     */
    public function setUpdatedAt(\DateTime $updated_at): static
    {
        if (is_null($updated_at)) {
            throw new InvalidArgumentException('non-nullable updated_at cannot be null');
        }
        $this->container['updated_at'] = $updated_at;

        return $this;
    }

    /**
     * Gets source_guild_id
     *
     * @return string
     */
    public function getSourceGuildId(): string
    {
        return $this->container['source_guild_id'];
    }

    /**
     * Sets source_guild_id
     *
     * @param string $source_guild_id source_guild_id
     *
     * @return $this
     */
    public function setSourceGuildId(string $source_guild_id): static
    {
        if (is_null($source_guild_id)) {
            throw new InvalidArgumentException('non-nullable source_guild_id cannot be null');
        }

        if ((!preg_match("/^(0|[1-9][0-9]*)$/", ObjectSerializer::toString($source_guild_id)))) {
            throw new InvalidArgumentException("invalid value for \$source_guild_id when calling GuildTemplateResponse., must conform to the pattern /^(0|[1-9][0-9]*)$/.");
        }

        $this->container['source_guild_id'] = $source_guild_id;

        return $this;
    }

    /**
     * Gets serialized_source_guild
     *
     * @return \OpenAPI\Client\Model\GuildTemplateSnapshotResponse
     */
    public function getSerializedSourceGuild(): \OpenAPI\Client\Model\GuildTemplateSnapshotResponse
    {
        return $this->container['serialized_source_guild'];
    }

    /**
     * Sets serialized_source_guild
     *
     * @param \OpenAPI\Client\Model\GuildTemplateSnapshotResponse $serialized_source_guild serialized_source_guild
     *
     * @return $this
     */
    public function setSerializedSourceGuild(\OpenAPI\Client\Model\GuildTemplateSnapshotResponse $serialized_source_guild): static
    {
        if (is_null($serialized_source_guild)) {
            throw new InvalidArgumentException('non-nullable serialized_source_guild cannot be null');
        }
        $this->container['serialized_source_guild'] = $serialized_source_guild;

        return $this;
    }

    /**
     * Gets is_dirty
     *
     * @return bool|null
     */
    public function getIsDirty(): ?bool
    {
        return $this->container['is_dirty'];
    }

    /**
     * Sets is_dirty
     *
     * @param bool|null $is_dirty is_dirty
     *
     * @return $this
     */
    public function setIsDirty(?bool $is_dirty): static
    {
        if (is_null($is_dirty)) {
            array_push($this->openAPINullablesSetToNull, 'is_dirty');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('is_dirty', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['is_dirty'] = $is_dirty;

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


