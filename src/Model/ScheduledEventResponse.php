<?php
/**
 * ScheduledEventResponse
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
 * ScheduledEventResponse Class Doc Comment
 *
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements ArrayAccess<string, mixed>
 */
class ScheduledEventResponse implements ModelInterface, ArrayAccess, JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'ScheduledEventResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var array<string, string>
      */
    protected static array $openAPITypes = [
        'id' => 'string',
        'guild_id' => 'string',
        'name' => 'string',
        'description' => 'string',
        'channel_id' => 'string',
        'creator_id' => 'string',
        'creator' => '\OpenAPI\Client\Model\UserResponse',
        'image' => 'string',
        'scheduled_start_time' => '\DateTime',
        'scheduled_end_time' => '\DateTime',
        'status' => '\OpenAPI\Client\Model\GuildScheduledEventStatuses',
        'entity_type' => '\OpenAPI\Client\Model\GuildScheduledEventEntityTypes',
        'entity_id' => 'string',
        'user_count' => 'int',
        'privacy_level' => '\OpenAPI\Client\Model\GuildScheduledEventPrivacyLevels',
        'user_rsvp' => '\OpenAPI\Client\Model\ScheduledEventUserResponse',
        'auto_start' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'id' => 'snowflake',
        'guild_id' => 'snowflake',
        'name' => null,
        'description' => null,
        'channel_id' => 'snowflake',
        'creator_id' => 'snowflake',
        'creator' => null,
        'image' => null,
        'scheduled_start_time' => 'date-time',
        'scheduled_end_time' => 'date-time',
        'status' => null,
        'entity_type' => null,
        'entity_id' => 'snowflake',
        'user_count' => 'int32',
        'privacy_level' => null,
        'user_rsvp' => null,
        'auto_start' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var array<string, bool>
      */
    protected static array $openAPINullables = [
        'id' => false,
		'guild_id' => false,
		'name' => false,
		'description' => true,
		'channel_id' => false,
		'creator_id' => false,
		'creator' => true,
		'image' => true,
		'scheduled_start_time' => false,
		'scheduled_end_time' => true,
		'status' => true,
		'entity_type' => true,
		'entity_id' => false,
		'user_count' => true,
		'privacy_level' => true,
		'user_rsvp' => true,
		'auto_start' => false
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
        'name' => 'name',
        'description' => 'description',
        'channel_id' => 'channel_id',
        'creator_id' => 'creator_id',
        'creator' => 'creator',
        'image' => 'image',
        'scheduled_start_time' => 'scheduled_start_time',
        'scheduled_end_time' => 'scheduled_end_time',
        'status' => 'status',
        'entity_type' => 'entity_type',
        'entity_id' => 'entity_id',
        'user_count' => 'user_count',
        'privacy_level' => 'privacy_level',
        'user_rsvp' => 'user_rsvp',
        'auto_start' => 'auto_start'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var array<string, string>
     */
    protected static array $setters = [
        'id' => 'setId',
        'guild_id' => 'setGuildId',
        'name' => 'setName',
        'description' => 'setDescription',
        'channel_id' => 'setChannelId',
        'creator_id' => 'setCreatorId',
        'creator' => 'setCreator',
        'image' => 'setImage',
        'scheduled_start_time' => 'setScheduledStartTime',
        'scheduled_end_time' => 'setScheduledEndTime',
        'status' => 'setStatus',
        'entity_type' => 'setEntityType',
        'entity_id' => 'setEntityId',
        'user_count' => 'setUserCount',
        'privacy_level' => 'setPrivacyLevel',
        'user_rsvp' => 'setUserRsvp',
        'auto_start' => 'setAutoStart'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var array<string, string>
     */
    protected static array $getters = [
        'id' => 'getId',
        'guild_id' => 'getGuildId',
        'name' => 'getName',
        'description' => 'getDescription',
        'channel_id' => 'getChannelId',
        'creator_id' => 'getCreatorId',
        'creator' => 'getCreator',
        'image' => 'getImage',
        'scheduled_start_time' => 'getScheduledStartTime',
        'scheduled_end_time' => 'getScheduledEndTime',
        'status' => 'getStatus',
        'entity_type' => 'getEntityType',
        'entity_id' => 'getEntityId',
        'user_count' => 'getUserCount',
        'privacy_level' => 'getPrivacyLevel',
        'user_rsvp' => 'getUserRsvp',
        'auto_start' => 'getAutoStart'
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
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('description', $data ?? [], null);
        $this->setIfExists('channel_id', $data ?? [], null);
        $this->setIfExists('creator_id', $data ?? [], null);
        $this->setIfExists('creator', $data ?? [], null);
        $this->setIfExists('image', $data ?? [], null);
        $this->setIfExists('scheduled_start_time', $data ?? [], null);
        $this->setIfExists('scheduled_end_time', $data ?? [], null);
        $this->setIfExists('status', $data ?? [], null);
        $this->setIfExists('entity_type', $data ?? [], null);
        $this->setIfExists('entity_id', $data ?? [], null);
        $this->setIfExists('user_count', $data ?? [], null);
        $this->setIfExists('privacy_level', $data ?? [], null);
        $this->setIfExists('user_rsvp', $data ?? [], null);
        $this->setIfExists('auto_start', $data ?? [], null);
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
        if (!preg_match("/^(0|[1-9][0-9]*)$/", $this->container['id'])) {
            $invalidProperties[] = "invalid value for 'id', must be conform to the pattern /^(0|[1-9][0-9]*)$/.";
        }

        if ($this->container['guild_id'] === null) {
            $invalidProperties[] = "'guild_id' can't be null";
        }
        if (!preg_match("/^(0|[1-9][0-9]*)$/", $this->container['guild_id'])) {
            $invalidProperties[] = "invalid value for 'guild_id', must be conform to the pattern /^(0|[1-9][0-9]*)$/.";
        }

        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if (!is_null($this->container['channel_id']) && !preg_match("/^(0|[1-9][0-9]*)$/", $this->container['channel_id'])) {
            $invalidProperties[] = "invalid value for 'channel_id', must be conform to the pattern /^(0|[1-9][0-9]*)$/.";
        }

        if (!is_null($this->container['creator_id']) && !preg_match("/^(0|[1-9][0-9]*)$/", $this->container['creator_id'])) {
            $invalidProperties[] = "invalid value for 'creator_id', must be conform to the pattern /^(0|[1-9][0-9]*)$/.";
        }

        if ($this->container['scheduled_start_time'] === null) {
            $invalidProperties[] = "'scheduled_start_time' can't be null";
        }
        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
        }
        if ($this->container['entity_type'] === null) {
            $invalidProperties[] = "'entity_type' can't be null";
        }
        if (!is_null($this->container['entity_id']) && !preg_match("/^(0|[1-9][0-9]*)$/", $this->container['entity_id'])) {
            $invalidProperties[] = "invalid value for 'entity_id', must be conform to the pattern /^(0|[1-9][0-9]*)$/.";
        }

        if ($this->container['privacy_level'] === null) {
            $invalidProperties[] = "'privacy_level' can't be null";
        }
        if ($this->container['auto_start'] === null) {
            $invalidProperties[] = "'auto_start' can't be null";
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
            throw new InvalidArgumentException("invalid value for \$id when calling ScheduledEventResponse., must conform to the pattern /^(0|[1-9][0-9]*)$/.");
        }

        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets guild_id
     *
     * @return string
     */
    public function getGuildId(): string
    {
        return $this->container['guild_id'];
    }

    /**
     * Sets guild_id
     *
     * @param string $guild_id guild_id
     *
     * @return $this
     */
    public function setGuildId(string $guild_id): static
    {
        if (is_null($guild_id)) {
            throw new InvalidArgumentException('non-nullable guild_id cannot be null');
        }

        if ((!preg_match("/^(0|[1-9][0-9]*)$/", ObjectSerializer::toString($guild_id)))) {
            throw new InvalidArgumentException("invalid value for \$guild_id when calling ScheduledEventResponse., must conform to the pattern /^(0|[1-9][0-9]*)$/.");
        }

        $this->container['guild_id'] = $guild_id;

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
            throw new InvalidArgumentException("invalid value for \$channel_id when calling ScheduledEventResponse., must conform to the pattern /^(0|[1-9][0-9]*)$/.");
        }

        $this->container['channel_id'] = $channel_id;

        return $this;
    }

    /**
     * Gets creator_id
     *
     * @return string|null
     */
    public function getCreatorId(): ?string
    {
        return $this->container['creator_id'];
    }

    /**
     * Sets creator_id
     *
     * @param string|null $creator_id creator_id
     *
     * @return $this
     */
    public function setCreatorId(?string $creator_id): static
    {
        if (is_null($creator_id)) {
            throw new InvalidArgumentException('non-nullable creator_id cannot be null');
        }

        if ((!preg_match("/^(0|[1-9][0-9]*)$/", ObjectSerializer::toString($creator_id)))) {
            throw new InvalidArgumentException("invalid value for \$creator_id when calling ScheduledEventResponse., must conform to the pattern /^(0|[1-9][0-9]*)$/.");
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
     * @return \DateTime
     */
    public function getScheduledStartTime(): \DateTime
    {
        return $this->container['scheduled_start_time'];
    }

    /**
     * Sets scheduled_start_time
     *
     * @param \DateTime $scheduled_start_time scheduled_start_time
     *
     * @return $this
     */
    public function setScheduledStartTime(\DateTime $scheduled_start_time): static
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
     * Gets status
     *
     * @return \OpenAPI\Client\Model\GuildScheduledEventStatuses
     */
    public function getStatus(): ?\OpenAPI\Client\Model\GuildScheduledEventStatuses
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param \OpenAPI\Client\Model\GuildScheduledEventStatuses $status status
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
     * Gets entity_type
     *
     * @return \OpenAPI\Client\Model\GuildScheduledEventEntityTypes
     */
    public function getEntityType(): ?\OpenAPI\Client\Model\GuildScheduledEventEntityTypes
    {
        return $this->container['entity_type'];
    }

    /**
     * Sets entity_type
     *
     * @param \OpenAPI\Client\Model\GuildScheduledEventEntityTypes $entity_type entity_type
     *
     * @return $this
     */
    public function setEntityType(?\OpenAPI\Client\Model\GuildScheduledEventEntityTypes $entity_type): static
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
     * Gets entity_id
     *
     * @return string|null
     */
    public function getEntityId(): ?string
    {
        return $this->container['entity_id'];
    }

    /**
     * Sets entity_id
     *
     * @param string|null $entity_id entity_id
     *
     * @return $this
     */
    public function setEntityId(?string $entity_id): static
    {
        if (is_null($entity_id)) {
            throw new InvalidArgumentException('non-nullable entity_id cannot be null');
        }

        if ((!preg_match("/^(0|[1-9][0-9]*)$/", ObjectSerializer::toString($entity_id)))) {
            throw new InvalidArgumentException("invalid value for \$entity_id when calling ScheduledEventResponse., must conform to the pattern /^(0|[1-9][0-9]*)$/.");
        }

        $this->container['entity_id'] = $entity_id;

        return $this;
    }

    /**
     * Gets user_count
     *
     * @return int|null
     */
    public function getUserCount(): ?int
    {
        return $this->container['user_count'];
    }

    /**
     * Sets user_count
     *
     * @param int|null $user_count user_count
     *
     * @return $this
     */
    public function setUserCount(?int $user_count): static
    {
        if (is_null($user_count)) {
            array_push($this->openAPINullablesSetToNull, 'user_count');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('user_count', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['user_count'] = $user_count;

        return $this;
    }

    /**
     * Gets privacy_level
     *
     * @return \OpenAPI\Client\Model\GuildScheduledEventPrivacyLevels
     */
    public function getPrivacyLevel(): ?\OpenAPI\Client\Model\GuildScheduledEventPrivacyLevels
    {
        return $this->container['privacy_level'];
    }

    /**
     * Sets privacy_level
     *
     * @param \OpenAPI\Client\Model\GuildScheduledEventPrivacyLevels $privacy_level privacy_level
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
     * Gets user_rsvp
     *
     * @return \OpenAPI\Client\Model\ScheduledEventUserResponse|null
     */
    public function getUserRsvp(): ?\OpenAPI\Client\Model\ScheduledEventUserResponse
    {
        return $this->container['user_rsvp'];
    }

    /**
     * Sets user_rsvp
     *
     * @param \OpenAPI\Client\Model\ScheduledEventUserResponse|null $user_rsvp user_rsvp
     *
     * @return $this
     */
    public function setUserRsvp(?\OpenAPI\Client\Model\ScheduledEventUserResponse $user_rsvp): static
    {
        if (is_null($user_rsvp)) {
            array_push($this->openAPINullablesSetToNull, 'user_rsvp');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('user_rsvp', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['user_rsvp'] = $user_rsvp;

        return $this;
    }

    /**
     * Gets auto_start
     *
     * @return bool
     */
    public function getAutoStart(): bool
    {
        return $this->container['auto_start'];
    }

    /**
     * Sets auto_start
     *
     * @param bool $auto_start auto_start
     *
     * @return $this
     */
    public function setAutoStart(bool $auto_start): static
    {
        if (is_null($auto_start)) {
            throw new InvalidArgumentException('non-nullable auto_start cannot be null');
        }
        $this->container['auto_start'] = $auto_start;

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

