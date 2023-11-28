<?php
/**
 * ListChannelInvites200ResponseInner
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
 * ListChannelInvites200ResponseInner Class Doc Comment
 *
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements ArrayAccess<string, mixed>
 */
class ListChannelInvites200ResponseInner implements ModelInterface, ArrayAccess, JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'list_channel_invites_200_response_inner';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var array<string, string>
      */
    protected static array $openAPITypes = [
        'type' => 'OneOf',
        'code' => 'mixed',
        'inviter' => '\OpenAPI\Client\Model\UserResponse',
        'max_age' => 'mixed',
        'created_at' => 'mixed',
        'expires_at' => 'mixed',
        'friends_count' => 'mixed',
        'channel' => '\OpenAPI\Client\Model\InviteChannelResponse',
        'is_contact' => 'mixed',
        'uses' => 'mixed',
        'max_uses' => 'mixed',
        'flags' => 'mixed',
        'approximate_member_count' => 'mixed',
        'guild' => '\OpenAPI\Client\Model\InviteGuildResponse',
        'guild_id' => 'mixed',
        'stage_instance' => '\OpenAPI\Client\Model\InviteStageInstanceResponse',
        'target_type' => '\OpenAPI\Client\Model\InviteTargetTypes',
        'target_user' => '\OpenAPI\Client\Model\UserResponse',
        'target_application' => '\OpenAPI\Client\Model\InviteApplicationResponse',
        'guild_scheduled_event' => '\OpenAPI\Client\Model\ScheduledEventResponse',
        'temporary' => 'mixed',
        'approximate_presence_count' => 'mixed'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'type' => null,
        'code' => null,
        'inviter' => null,
        'max_age' => 'int32',
        'created_at' => 'date-time',
        'expires_at' => 'date-time',
        'friends_count' => 'int32',
        'channel' => null,
        'is_contact' => null,
        'uses' => 'int32',
        'max_uses' => 'int32',
        'flags' => 'int32',
        'approximate_member_count' => 'int32',
        'guild' => null,
        'guild_id' => 'snowflake',
        'stage_instance' => null,
        'target_type' => null,
        'target_user' => null,
        'target_application' => null,
        'guild_scheduled_event' => null,
        'temporary' => null,
        'approximate_presence_count' => 'int32'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var array<string, bool>
      */
    protected static array $openAPINullables = [
        'type' => true,
		'code' => true,
		'inviter' => false,
		'max_age' => true,
		'created_at' => true,
		'expires_at' => true,
		'friends_count' => true,
		'channel' => false,
		'is_contact' => true,
		'uses' => true,
		'max_uses' => true,
		'flags' => true,
		'approximate_member_count' => true,
		'guild' => false,
		'guild_id' => true,
		'stage_instance' => false,
		'target_type' => true,
		'target_user' => false,
		'target_application' => false,
		'guild_scheduled_event' => false,
		'temporary' => true,
		'approximate_presence_count' => true
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
        'type' => 'type',
        'code' => 'code',
        'inviter' => 'inviter',
        'max_age' => 'max_age',
        'created_at' => 'created_at',
        'expires_at' => 'expires_at',
        'friends_count' => 'friends_count',
        'channel' => 'channel',
        'is_contact' => 'is_contact',
        'uses' => 'uses',
        'max_uses' => 'max_uses',
        'flags' => 'flags',
        'approximate_member_count' => 'approximate_member_count',
        'guild' => 'guild',
        'guild_id' => 'guild_id',
        'stage_instance' => 'stage_instance',
        'target_type' => 'target_type',
        'target_user' => 'target_user',
        'target_application' => 'target_application',
        'guild_scheduled_event' => 'guild_scheduled_event',
        'temporary' => 'temporary',
        'approximate_presence_count' => 'approximate_presence_count'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var array<string, string>
     */
    protected static array $setters = [
        'type' => 'setType',
        'code' => 'setCode',
        'inviter' => 'setInviter',
        'max_age' => 'setMaxAge',
        'created_at' => 'setCreatedAt',
        'expires_at' => 'setExpiresAt',
        'friends_count' => 'setFriendsCount',
        'channel' => 'setChannel',
        'is_contact' => 'setIsContact',
        'uses' => 'setUses',
        'max_uses' => 'setMaxUses',
        'flags' => 'setFlags',
        'approximate_member_count' => 'setApproximateMemberCount',
        'guild' => 'setGuild',
        'guild_id' => 'setGuildId',
        'stage_instance' => 'setStageInstance',
        'target_type' => 'setTargetType',
        'target_user' => 'setTargetUser',
        'target_application' => 'setTargetApplication',
        'guild_scheduled_event' => 'setGuildScheduledEvent',
        'temporary' => 'setTemporary',
        'approximate_presence_count' => 'setApproximatePresenceCount'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var array<string, string>
     */
    protected static array $getters = [
        'type' => 'getType',
        'code' => 'getCode',
        'inviter' => 'getInviter',
        'max_age' => 'getMaxAge',
        'created_at' => 'getCreatedAt',
        'expires_at' => 'getExpiresAt',
        'friends_count' => 'getFriendsCount',
        'channel' => 'getChannel',
        'is_contact' => 'getIsContact',
        'uses' => 'getUses',
        'max_uses' => 'getMaxUses',
        'flags' => 'getFlags',
        'approximate_member_count' => 'getApproximateMemberCount',
        'guild' => 'getGuild',
        'guild_id' => 'getGuildId',
        'stage_instance' => 'getStageInstance',
        'target_type' => 'getTargetType',
        'target_user' => 'getTargetUser',
        'target_application' => 'getTargetApplication',
        'guild_scheduled_event' => 'getGuildScheduledEvent',
        'temporary' => 'getTemporary',
        'approximate_presence_count' => 'getApproximatePresenceCount'
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
        $this->setIfExists('type', $data ?? [], null);
        $this->setIfExists('code', $data ?? [], null);
        $this->setIfExists('inviter', $data ?? [], null);
        $this->setIfExists('max_age', $data ?? [], null);
        $this->setIfExists('created_at', $data ?? [], null);
        $this->setIfExists('expires_at', $data ?? [], null);
        $this->setIfExists('friends_count', $data ?? [], null);
        $this->setIfExists('channel', $data ?? [], null);
        $this->setIfExists('is_contact', $data ?? [], null);
        $this->setIfExists('uses', $data ?? [], null);
        $this->setIfExists('max_uses', $data ?? [], null);
        $this->setIfExists('flags', $data ?? [], null);
        $this->setIfExists('approximate_member_count', $data ?? [], null);
        $this->setIfExists('guild', $data ?? [], null);
        $this->setIfExists('guild_id', $data ?? [], null);
        $this->setIfExists('stage_instance', $data ?? [], null);
        $this->setIfExists('target_type', $data ?? [], null);
        $this->setIfExists('target_user', $data ?? [], null);
        $this->setIfExists('target_application', $data ?? [], null);
        $this->setIfExists('guild_scheduled_event', $data ?? [], null);
        $this->setIfExists('temporary', $data ?? [], null);
        $this->setIfExists('approximate_presence_count', $data ?? [], null);
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
        if (!is_null($this->container['guild_id']) && !preg_match("^(0|[1-9][0-9]*)$", $this->container['guild_id'])) {
            $invalidProperties[] = "invalid value for 'guild_id', must be conform to the pattern ^(0|[1-9][0-9]*)$.";
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
     * Gets type
     *
     * @return OneOf|null
     */
    public function getType(): ?OneOf
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param OneOf|null $type type
     *
     * @return $this
     */
    public function setType(?OneOf $type): static
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
     * Gets code
     *
     * @return mixed
     */
    public function getCode(): mixed
    {
        return $this->container['code'];
    }

    /**
     * Sets code
     *
     * @param mixed $code code
     *
     * @return $this
     */
    public function setCode(mixed $code): static
    {
        if (is_null($code)) {
            array_push($this->openAPINullablesSetToNull, 'code');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('code', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['code'] = $code;

        return $this;
    }

    /**
     * Gets inviter
     *
     * @return \OpenAPI\Client\Model\UserResponse|null
     */
    public function getInviter(): ?\OpenAPI\Client\Model\UserResponse
    {
        return $this->container['inviter'];
    }

    /**
     * Sets inviter
     *
     * @param \OpenAPI\Client\Model\UserResponse|null $inviter inviter
     *
     * @return $this
     */
    public function setInviter(?\OpenAPI\Client\Model\UserResponse $inviter): static
    {
        if (is_null($inviter)) {
            throw new InvalidArgumentException('non-nullable inviter cannot be null');
        }
        $this->container['inviter'] = $inviter;

        return $this;
    }

    /**
     * Gets max_age
     *
     * @return mixed|null
     */
    public function getMaxAge(): mixed
    {
        return $this->container['max_age'];
    }

    /**
     * Sets max_age
     *
     * @param mixed|null $max_age max_age
     *
     * @return $this
     */
    public function setMaxAge(mixed $max_age): static
    {
        if (is_null($max_age)) {
            array_push($this->openAPINullablesSetToNull, 'max_age');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('max_age', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['max_age'] = $max_age;

        return $this;
    }

    /**
     * Gets created_at
     *
     * @return mixed|null
     */
    public function getCreatedAt(): mixed
    {
        return $this->container['created_at'];
    }

    /**
     * Sets created_at
     *
     * @param mixed|null $created_at created_at
     *
     * @return $this
     */
    public function setCreatedAt(mixed $created_at): static
    {
        if (is_null($created_at)) {
            array_push($this->openAPINullablesSetToNull, 'created_at');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('created_at', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['created_at'] = $created_at;

        return $this;
    }

    /**
     * Gets expires_at
     *
     * @return mixed|null
     */
    public function getExpiresAt(): mixed
    {
        return $this->container['expires_at'];
    }

    /**
     * Sets expires_at
     *
     * @param mixed|null $expires_at expires_at
     *
     * @return $this
     */
    public function setExpiresAt(mixed $expires_at): static
    {
        if (is_null($expires_at)) {
            array_push($this->openAPINullablesSetToNull, 'expires_at');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('expires_at', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['expires_at'] = $expires_at;

        return $this;
    }

    /**
     * Gets friends_count
     *
     * @return mixed|null
     */
    public function getFriendsCount(): mixed
    {
        return $this->container['friends_count'];
    }

    /**
     * Sets friends_count
     *
     * @param mixed|null $friends_count friends_count
     *
     * @return $this
     */
    public function setFriendsCount(mixed $friends_count): static
    {
        if (is_null($friends_count)) {
            array_push($this->openAPINullablesSetToNull, 'friends_count');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('friends_count', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['friends_count'] = $friends_count;

        return $this;
    }

    /**
     * Gets channel
     *
     * @return \OpenAPI\Client\Model\InviteChannelResponse|null
     */
    public function getChannel(): ?\OpenAPI\Client\Model\InviteChannelResponse
    {
        return $this->container['channel'];
    }

    /**
     * Sets channel
     *
     * @param \OpenAPI\Client\Model\InviteChannelResponse|null $channel channel
     *
     * @return $this
     */
    public function setChannel(?\OpenAPI\Client\Model\InviteChannelResponse $channel): static
    {
        if (is_null($channel)) {
            throw new InvalidArgumentException('non-nullable channel cannot be null');
        }
        $this->container['channel'] = $channel;

        return $this;
    }

    /**
     * Gets is_contact
     *
     * @return mixed|null
     */
    public function getIsContact(): mixed
    {
        return $this->container['is_contact'];
    }

    /**
     * Sets is_contact
     *
     * @param mixed|null $is_contact is_contact
     *
     * @return $this
     */
    public function setIsContact(mixed $is_contact): static
    {
        if (is_null($is_contact)) {
            array_push($this->openAPINullablesSetToNull, 'is_contact');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('is_contact', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['is_contact'] = $is_contact;

        return $this;
    }

    /**
     * Gets uses
     *
     * @return mixed|null
     */
    public function getUses(): mixed
    {
        return $this->container['uses'];
    }

    /**
     * Sets uses
     *
     * @param mixed|null $uses uses
     *
     * @return $this
     */
    public function setUses(mixed $uses): static
    {
        if (is_null($uses)) {
            array_push($this->openAPINullablesSetToNull, 'uses');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('uses', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['uses'] = $uses;

        return $this;
    }

    /**
     * Gets max_uses
     *
     * @return mixed|null
     */
    public function getMaxUses(): mixed
    {
        return $this->container['max_uses'];
    }

    /**
     * Sets max_uses
     *
     * @param mixed|null $max_uses max_uses
     *
     * @return $this
     */
    public function setMaxUses(mixed $max_uses): static
    {
        if (is_null($max_uses)) {
            array_push($this->openAPINullablesSetToNull, 'max_uses');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('max_uses', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['max_uses'] = $max_uses;

        return $this;
    }

    /**
     * Gets flags
     *
     * @return mixed|null
     */
    public function getFlags(): mixed
    {
        return $this->container['flags'];
    }

    /**
     * Sets flags
     *
     * @param mixed|null $flags flags
     *
     * @return $this
     */
    public function setFlags(mixed $flags): static
    {
        if (is_null($flags)) {
            array_push($this->openAPINullablesSetToNull, 'flags');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('flags', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['flags'] = $flags;

        return $this;
    }

    /**
     * Gets approximate_member_count
     *
     * @return mixed|null
     */
    public function getApproximateMemberCount(): mixed
    {
        return $this->container['approximate_member_count'];
    }

    /**
     * Sets approximate_member_count
     *
     * @param mixed|null $approximate_member_count approximate_member_count
     *
     * @return $this
     */
    public function setApproximateMemberCount(mixed $approximate_member_count): static
    {
        if (is_null($approximate_member_count)) {
            array_push($this->openAPINullablesSetToNull, 'approximate_member_count');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('approximate_member_count', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['approximate_member_count'] = $approximate_member_count;

        return $this;
    }

    /**
     * Gets guild
     *
     * @return \OpenAPI\Client\Model\InviteGuildResponse|null
     */
    public function getGuild(): ?\OpenAPI\Client\Model\InviteGuildResponse
    {
        return $this->container['guild'];
    }

    /**
     * Sets guild
     *
     * @param \OpenAPI\Client\Model\InviteGuildResponse|null $guild guild
     *
     * @return $this
     */
    public function setGuild(?\OpenAPI\Client\Model\InviteGuildResponse $guild): static
    {
        if (is_null($guild)) {
            throw new InvalidArgumentException('non-nullable guild cannot be null');
        }
        $this->container['guild'] = $guild;

        return $this;
    }

    /**
     * Gets guild_id
     *
     * @return mixed|null
     */
    public function getGuildId(): mixed
    {
        return $this->container['guild_id'];
    }

    /**
     * Sets guild_id
     *
     * @param mixed|null $guild_id guild_id
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
            throw new InvalidArgumentException("invalid value for \$guild_id when calling ListChannelInvites200ResponseInner., must conform to the pattern ^(0|[1-9][0-9]*)$.");
        }

        $this->container['guild_id'] = $guild_id;

        return $this;
    }

    /**
     * Gets stage_instance
     *
     * @return \OpenAPI\Client\Model\InviteStageInstanceResponse|null
     */
    public function getStageInstance(): ?\OpenAPI\Client\Model\InviteStageInstanceResponse
    {
        return $this->container['stage_instance'];
    }

    /**
     * Sets stage_instance
     *
     * @param \OpenAPI\Client\Model\InviteStageInstanceResponse|null $stage_instance stage_instance
     *
     * @return $this
     */
    public function setStageInstance(?\OpenAPI\Client\Model\InviteStageInstanceResponse $stage_instance): static
    {
        if (is_null($stage_instance)) {
            throw new InvalidArgumentException('non-nullable stage_instance cannot be null');
        }
        $this->container['stage_instance'] = $stage_instance;

        return $this;
    }

    /**
     * Gets target_type
     *
     * @return \OpenAPI\Client\Model\InviteTargetTypes|null
     */
    public function getTargetType(): ?\OpenAPI\Client\Model\InviteTargetTypes
    {
        return $this->container['target_type'];
    }

    /**
     * Sets target_type
     *
     * @param \OpenAPI\Client\Model\InviteTargetTypes|null $target_type target_type
     *
     * @return $this
     */
    public function setTargetType(?\OpenAPI\Client\Model\InviteTargetTypes $target_type): static
    {
        if (is_null($target_type)) {
            array_push($this->openAPINullablesSetToNull, 'target_type');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('target_type', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['target_type'] = $target_type;

        return $this;
    }

    /**
     * Gets target_user
     *
     * @return \OpenAPI\Client\Model\UserResponse|null
     */
    public function getTargetUser(): ?\OpenAPI\Client\Model\UserResponse
    {
        return $this->container['target_user'];
    }

    /**
     * Sets target_user
     *
     * @param \OpenAPI\Client\Model\UserResponse|null $target_user target_user
     *
     * @return $this
     */
    public function setTargetUser(?\OpenAPI\Client\Model\UserResponse $target_user): static
    {
        if (is_null($target_user)) {
            throw new InvalidArgumentException('non-nullable target_user cannot be null');
        }
        $this->container['target_user'] = $target_user;

        return $this;
    }

    /**
     * Gets target_application
     *
     * @return \OpenAPI\Client\Model\InviteApplicationResponse|null
     */
    public function getTargetApplication(): ?\OpenAPI\Client\Model\InviteApplicationResponse
    {
        return $this->container['target_application'];
    }

    /**
     * Sets target_application
     *
     * @param \OpenAPI\Client\Model\InviteApplicationResponse|null $target_application target_application
     *
     * @return $this
     */
    public function setTargetApplication(?\OpenAPI\Client\Model\InviteApplicationResponse $target_application): static
    {
        if (is_null($target_application)) {
            throw new InvalidArgumentException('non-nullable target_application cannot be null');
        }
        $this->container['target_application'] = $target_application;

        return $this;
    }

    /**
     * Gets guild_scheduled_event
     *
     * @return \OpenAPI\Client\Model\ScheduledEventResponse|null
     */
    public function getGuildScheduledEvent(): ?\OpenAPI\Client\Model\ScheduledEventResponse
    {
        return $this->container['guild_scheduled_event'];
    }

    /**
     * Sets guild_scheduled_event
     *
     * @param \OpenAPI\Client\Model\ScheduledEventResponse|null $guild_scheduled_event guild_scheduled_event
     *
     * @return $this
     */
    public function setGuildScheduledEvent(?\OpenAPI\Client\Model\ScheduledEventResponse $guild_scheduled_event): static
    {
        if (is_null($guild_scheduled_event)) {
            throw new InvalidArgumentException('non-nullable guild_scheduled_event cannot be null');
        }
        $this->container['guild_scheduled_event'] = $guild_scheduled_event;

        return $this;
    }

    /**
     * Gets temporary
     *
     * @return mixed|null
     */
    public function getTemporary(): mixed
    {
        return $this->container['temporary'];
    }

    /**
     * Sets temporary
     *
     * @param mixed|null $temporary temporary
     *
     * @return $this
     */
    public function setTemporary(mixed $temporary): static
    {
        if (is_null($temporary)) {
            array_push($this->openAPINullablesSetToNull, 'temporary');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('temporary', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['temporary'] = $temporary;

        return $this;
    }

    /**
     * Gets approximate_presence_count
     *
     * @return mixed|null
     */
    public function getApproximatePresenceCount(): mixed
    {
        return $this->container['approximate_presence_count'];
    }

    /**
     * Sets approximate_presence_count
     *
     * @param mixed|null $approximate_presence_count approximate_presence_count
     *
     * @return $this
     */
    public function setApproximatePresenceCount(mixed $approximate_presence_count): static
    {
        if (is_null($approximate_presence_count)) {
            array_push($this->openAPINullablesSetToNull, 'approximate_presence_count');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('approximate_presence_count', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['approximate_presence_count'] = $approximate_presence_count;

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

