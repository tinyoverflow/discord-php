<?php
/**
 * ApplicationIncomingWebhookResponse
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
 * ApplicationIncomingWebhookResponse Class Doc Comment
 *
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements ArrayAccess<string, mixed>
 */
class ApplicationIncomingWebhookResponse implements ModelInterface, ArrayAccess, JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'ApplicationIncomingWebhookResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var array<string, string>
      */
    protected static array $openAPITypes = [
        'application_id' => 'string',
        'avatar' => 'string',
        'channel_id' => 'string',
        'guild_id' => 'string',
        'id' => 'string',
        'name' => 'string',
        'type' => '\OpenAPI\Client\Model\WebhookTypes',
        'user' => '\OpenAPI\Client\Model\UserResponse'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'application_id' => 'snowflake',
        'avatar' => null,
        'channel_id' => 'snowflake',
        'guild_id' => 'snowflake',
        'id' => 'snowflake',
        'name' => null,
        'type' => null,
        'user' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var array<string, bool>
      */
    protected static array $openAPINullables = [
        'application_id' => false,
		'avatar' => true,
		'channel_id' => false,
		'guild_id' => false,
		'id' => false,
		'name' => false,
		'type' => true,
		'user' => true
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
        'application_id' => 'application_id',
        'avatar' => 'avatar',
        'channel_id' => 'channel_id',
        'guild_id' => 'guild_id',
        'id' => 'id',
        'name' => 'name',
        'type' => 'type',
        'user' => 'user'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var array<string, string>
     */
    protected static array $setters = [
        'application_id' => 'setApplicationId',
        'avatar' => 'setAvatar',
        'channel_id' => 'setChannelId',
        'guild_id' => 'setGuildId',
        'id' => 'setId',
        'name' => 'setName',
        'type' => 'setType',
        'user' => 'setUser'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var array<string, string>
     */
    protected static array $getters = [
        'application_id' => 'getApplicationId',
        'avatar' => 'getAvatar',
        'channel_id' => 'getChannelId',
        'guild_id' => 'getGuildId',
        'id' => 'getId',
        'name' => 'getName',
        'type' => 'getType',
        'user' => 'getUser'
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
        $this->setIfExists('application_id', $data ?? [], null);
        $this->setIfExists('avatar', $data ?? [], null);
        $this->setIfExists('channel_id', $data ?? [], null);
        $this->setIfExists('guild_id', $data ?? [], null);
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('type', $data ?? [], null);
        $this->setIfExists('user', $data ?? [], null);
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

        if (!is_null($this->container['application_id']) && !preg_match("/^(0|[1-9][0-9]*)$/", $this->container['application_id'])) {
            $invalidProperties[] = "invalid value for 'application_id', must be conform to the pattern /^(0|[1-9][0-9]*)$/.";
        }

        if (!is_null($this->container['channel_id']) && !preg_match("/^(0|[1-9][0-9]*)$/", $this->container['channel_id'])) {
            $invalidProperties[] = "invalid value for 'channel_id', must be conform to the pattern /^(0|[1-9][0-9]*)$/.";
        }

        if (!is_null($this->container['guild_id']) && !preg_match("/^(0|[1-9][0-9]*)$/", $this->container['guild_id'])) {
            $invalidProperties[] = "invalid value for 'guild_id', must be conform to the pattern /^(0|[1-9][0-9]*)$/.";
        }

        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if (!preg_match("/^(0|[1-9][0-9]*)$/", $this->container['id'])) {
            $invalidProperties[] = "invalid value for 'id', must be conform to the pattern /^(0|[1-9][0-9]*)$/.";
        }

        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
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
     * Gets application_id
     *
     * @return string|null
     */
    public function getApplicationId(): ?string
    {
        return $this->container['application_id'];
    }

    /**
     * Sets application_id
     *
     * @param string|null $application_id application_id
     *
     * @return $this
     */
    public function setApplicationId(?string $application_id): static
    {
        if (is_null($application_id)) {
            throw new InvalidArgumentException('non-nullable application_id cannot be null');
        }

        if ((!preg_match("/^(0|[1-9][0-9]*)$/", ObjectSerializer::toString($application_id)))) {
            throw new InvalidArgumentException("invalid value for \$application_id when calling ApplicationIncomingWebhookResponse., must conform to the pattern /^(0|[1-9][0-9]*)$/.");
        }

        $this->container['application_id'] = $application_id;

        return $this;
    }

    /**
     * Gets avatar
     *
     * @return string|null
     */
    public function getAvatar(): ?string
    {
        return $this->container['avatar'];
    }

    /**
     * Sets avatar
     *
     * @param string|null $avatar avatar
     *
     * @return $this
     */
    public function setAvatar(?string $avatar): static
    {
        if (is_null($avatar)) {
            array_push($this->openAPINullablesSetToNull, 'avatar');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('avatar', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['avatar'] = $avatar;

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
            throw new InvalidArgumentException("invalid value for \$channel_id when calling ApplicationIncomingWebhookResponse., must conform to the pattern /^(0|[1-9][0-9]*)$/.");
        }

        $this->container['channel_id'] = $channel_id;

        return $this;
    }

    /**
     * Gets guild_id
     *
     * @return string|null
     */
    public function getGuildId(): ?string
    {
        return $this->container['guild_id'];
    }

    /**
     * Sets guild_id
     *
     * @param string|null $guild_id guild_id
     *
     * @return $this
     */
    public function setGuildId(?string $guild_id): static
    {
        if (is_null($guild_id)) {
            throw new InvalidArgumentException('non-nullable guild_id cannot be null');
        }

        if ((!preg_match("/^(0|[1-9][0-9]*)$/", ObjectSerializer::toString($guild_id)))) {
            throw new InvalidArgumentException("invalid value for \$guild_id when calling ApplicationIncomingWebhookResponse., must conform to the pattern /^(0|[1-9][0-9]*)$/.");
        }

        $this->container['guild_id'] = $guild_id;

        return $this;
    }

    /**
     * Gets id
     *
     * @return string
     */
    public function getId(): string
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string $id id
     *
     * @return $this
     */
    public function setId(string $id): static
    {
        if (is_null($id)) {
            throw new InvalidArgumentException('non-nullable id cannot be null');
        }

        if ((!preg_match("/^(0|[1-9][0-9]*)$/", ObjectSerializer::toString($id)))) {
            throw new InvalidArgumentException("invalid value for \$id when calling ApplicationIncomingWebhookResponse., must conform to the pattern /^(0|[1-9][0-9]*)$/.");
        }

        $this->container['id'] = $id;

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
     * Gets type
     *
     * @return \OpenAPI\Client\Model\WebhookTypes
     */
    public function getType(): ?\OpenAPI\Client\Model\WebhookTypes
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param \OpenAPI\Client\Model\WebhookTypes $type type
     *
     * @return $this
     */
    public function setType(?\OpenAPI\Client\Model\WebhookTypes $type): static
    {
        if (is_null($type)) {
            array_push($this->openAPINullablesSetToNull, 'type');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('type', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets user
     *
     * @return \OpenAPI\Client\Model\UserResponse|null
     */
    public function getUser(): ?\OpenAPI\Client\Model\UserResponse
    {
        return $this->container['user'];
    }

    /**
     * Sets user
     *
     * @param \OpenAPI\Client\Model\UserResponse|null $user user
     *
     * @return $this
     */
    public function setUser(?\OpenAPI\Client\Model\UserResponse $user): static
    {
        if (is_null($user)) {
            array_push($this->openAPINullablesSetToNull, 'user');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('user', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['user'] = $user;

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


