<?php
/**
 * GuildCreateRequest
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
 * GuildCreateRequest Class Doc Comment
 *
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements ArrayAccess<string, mixed>
 */
class GuildCreateRequest implements ModelInterface, ArrayAccess, JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static string $openAPIModelName = 'GuildCreateRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var array<string, string>
      */
    protected static array $openAPITypes = [
        'name' => 'string',
        'description' => 'string',
        'region' => 'string',
        'icon' => 'string',
        'verification_level' => '\OpenAPI\Client\Model\VerificationLevels',
        'default_message_notifications' => '\OpenAPI\Client\Model\UserNotificationSettings',
        'explicit_content_filter' => '\OpenAPI\Client\Model\GuildExplicitContentFilterTypes',
        'preferred_locale' => '\OpenAPI\Client\Model\AvailableLocalesEnum',
        'afk_timeout' => '\OpenAPI\Client\Model\AfkTimeouts',
        'roles' => '\OpenAPI\Client\Model\CreateGuildRequestRoleItem[]',
        'channels' => '\OpenAPI\Client\Model\CreateGuildRequestChannelItem[]',
        'afk_channel_id' => 'string',
        'system_channel_id' => 'string',
        'system_channel_flags' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var array<string, string|null>
      */
    protected static array $openAPIFormats = [
        'name' => null,
        'description' => null,
        'region' => null,
        'icon' => null,
        'verification_level' => null,
        'default_message_notifications' => null,
        'explicit_content_filter' => null,
        'preferred_locale' => null,
        'afk_timeout' => null,
        'roles' => null,
        'channels' => null,
        'afk_channel_id' => 'snowflake',
        'system_channel_id' => 'snowflake',
        'system_channel_flags' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var array<string, bool>
      */
    protected static array $openAPINullables = [
        'name' => false,
		'description' => true,
		'region' => true,
		'icon' => true,
		'verification_level' => true,
		'default_message_notifications' => true,
		'explicit_content_filter' => true,
		'preferred_locale' => true,
		'afk_timeout' => true,
		'roles' => false,
		'channels' => false,
		'afk_channel_id' => false,
		'system_channel_id' => false,
		'system_channel_flags' => true
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
        'description' => 'description',
        'region' => 'region',
        'icon' => 'icon',
        'verification_level' => 'verification_level',
        'default_message_notifications' => 'default_message_notifications',
        'explicit_content_filter' => 'explicit_content_filter',
        'preferred_locale' => 'preferred_locale',
        'afk_timeout' => 'afk_timeout',
        'roles' => 'roles',
        'channels' => 'channels',
        'afk_channel_id' => 'afk_channel_id',
        'system_channel_id' => 'system_channel_id',
        'system_channel_flags' => 'system_channel_flags'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var array<string, string>
     */
    protected static array $setters = [
        'name' => 'setName',
        'description' => 'setDescription',
        'region' => 'setRegion',
        'icon' => 'setIcon',
        'verification_level' => 'setVerificationLevel',
        'default_message_notifications' => 'setDefaultMessageNotifications',
        'explicit_content_filter' => 'setExplicitContentFilter',
        'preferred_locale' => 'setPreferredLocale',
        'afk_timeout' => 'setAfkTimeout',
        'roles' => 'setRoles',
        'channels' => 'setChannels',
        'afk_channel_id' => 'setAfkChannelId',
        'system_channel_id' => 'setSystemChannelId',
        'system_channel_flags' => 'setSystemChannelFlags'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var array<string, string>
     */
    protected static array $getters = [
        'name' => 'getName',
        'description' => 'getDescription',
        'region' => 'getRegion',
        'icon' => 'getIcon',
        'verification_level' => 'getVerificationLevel',
        'default_message_notifications' => 'getDefaultMessageNotifications',
        'explicit_content_filter' => 'getExplicitContentFilter',
        'preferred_locale' => 'getPreferredLocale',
        'afk_timeout' => 'getAfkTimeout',
        'roles' => 'getRoles',
        'channels' => 'getChannels',
        'afk_channel_id' => 'getAfkChannelId',
        'system_channel_id' => 'getSystemChannelId',
        'system_channel_flags' => 'getSystemChannelFlags'
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
        $this->setIfExists('description', $data ?? [], null);
        $this->setIfExists('region', $data ?? [], null);
        $this->setIfExists('icon', $data ?? [], null);
        $this->setIfExists('verification_level', $data ?? [], null);
        $this->setIfExists('default_message_notifications', $data ?? [], null);
        $this->setIfExists('explicit_content_filter', $data ?? [], null);
        $this->setIfExists('preferred_locale', $data ?? [], null);
        $this->setIfExists('afk_timeout', $data ?? [], null);
        $this->setIfExists('roles', $data ?? [], null);
        $this->setIfExists('channels', $data ?? [], null);
        $this->setIfExists('afk_channel_id', $data ?? [], null);
        $this->setIfExists('system_channel_id', $data ?? [], null);
        $this->setIfExists('system_channel_flags', $data ?? [], null);
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

        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ((mb_strlen($this->container['name']) > 100)) {
            $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 100.";
        }

        if ((mb_strlen($this->container['name']) < 2)) {
            $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 2.";
        }

        if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 1024)) {
            $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 1024.";
        }

        if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) < 0)) {
            $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['afk_channel_id']) && !preg_match("/^(0|[1-9][0-9]*)$/", $this->container['afk_channel_id'])) {
            $invalidProperties[] = "invalid value for 'afk_channel_id', must be conform to the pattern /^(0|[1-9][0-9]*)$/.";
        }

        if (!is_null($this->container['system_channel_id']) && !preg_match("/^(0|[1-9][0-9]*)$/", $this->container['system_channel_id'])) {
            $invalidProperties[] = "invalid value for 'system_channel_id', must be conform to the pattern /^(0|[1-9][0-9]*)$/.";
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
        if ((mb_strlen($name) > 100)) {
            throw new InvalidArgumentException('invalid length for $name when calling GuildCreateRequest., must be smaller than or equal to 100.');
        }
        if ((mb_strlen($name) < 2)) {
            throw new InvalidArgumentException('invalid length for $name when calling GuildCreateRequest., must be bigger than or equal to 2.');
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
        if (!is_null($description) && (mb_strlen($description) > 1024)) {
            throw new InvalidArgumentException('invalid length for $description when calling GuildCreateRequest., must be smaller than or equal to 1024.');
        }
        if (!is_null($description) && (mb_strlen($description) < 0)) {
            throw new InvalidArgumentException('invalid length for $description when calling GuildCreateRequest., must be bigger than or equal to 0.');
        }

        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets region
     *
     * @return string|null
     */
    public function getRegion(): ?string
    {
        return $this->container['region'];
    }

    /**
     * Sets region
     *
     * @param string|null $region region
     *
     * @return $this
     */
    public function setRegion(?string $region): static
    {
        if (is_null($region)) {
            array_push($this->openAPINullablesSetToNull, 'region');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('region', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['region'] = $region;

        return $this;
    }

    /**
     * Gets icon
     *
     * @return string|null
     */
    public function getIcon(): ?string
    {
        return $this->container['icon'];
    }

    /**
     * Sets icon
     *
     * @param string|null $icon icon
     *
     * @return $this
     */
    public function setIcon(?string $icon): static
    {
        if (is_null($icon)) {
            array_push($this->openAPINullablesSetToNull, 'icon');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('icon', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['icon'] = $icon;

        return $this;
    }

    /**
     * Gets verification_level
     *
     * @return \OpenAPI\Client\Model\VerificationLevels|null
     */
    public function getVerificationLevel(): ?\OpenAPI\Client\Model\VerificationLevels
    {
        return $this->container['verification_level'];
    }

    /**
     * Sets verification_level
     *
     * @param \OpenAPI\Client\Model\VerificationLevels|null $verification_level verification_level
     *
     * @return $this
     */
    public function setVerificationLevel(?\OpenAPI\Client\Model\VerificationLevels $verification_level): static
    {
        if (is_null($verification_level)) {
            array_push($this->openAPINullablesSetToNull, 'verification_level');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('verification_level', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['verification_level'] = $verification_level;

        return $this;
    }

    /**
     * Gets default_message_notifications
     *
     * @return \OpenAPI\Client\Model\UserNotificationSettings|null
     */
    public function getDefaultMessageNotifications(): ?\OpenAPI\Client\Model\UserNotificationSettings
    {
        return $this->container['default_message_notifications'];
    }

    /**
     * Sets default_message_notifications
     *
     * @param \OpenAPI\Client\Model\UserNotificationSettings|null $default_message_notifications default_message_notifications
     *
     * @return $this
     */
    public function setDefaultMessageNotifications(?\OpenAPI\Client\Model\UserNotificationSettings $default_message_notifications): static
    {
        if (is_null($default_message_notifications)) {
            array_push($this->openAPINullablesSetToNull, 'default_message_notifications');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('default_message_notifications', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['default_message_notifications'] = $default_message_notifications;

        return $this;
    }

    /**
     * Gets explicit_content_filter
     *
     * @return \OpenAPI\Client\Model\GuildExplicitContentFilterTypes|null
     */
    public function getExplicitContentFilter(): ?\OpenAPI\Client\Model\GuildExplicitContentFilterTypes
    {
        return $this->container['explicit_content_filter'];
    }

    /**
     * Sets explicit_content_filter
     *
     * @param \OpenAPI\Client\Model\GuildExplicitContentFilterTypes|null $explicit_content_filter explicit_content_filter
     *
     * @return $this
     */
    public function setExplicitContentFilter(?\OpenAPI\Client\Model\GuildExplicitContentFilterTypes $explicit_content_filter): static
    {
        if (is_null($explicit_content_filter)) {
            array_push($this->openAPINullablesSetToNull, 'explicit_content_filter');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('explicit_content_filter', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['explicit_content_filter'] = $explicit_content_filter;

        return $this;
    }

    /**
     * Gets preferred_locale
     *
     * @return \OpenAPI\Client\Model\AvailableLocalesEnum|null
     */
    public function getPreferredLocale(): ?\OpenAPI\Client\Model\AvailableLocalesEnum
    {
        return $this->container['preferred_locale'];
    }

    /**
     * Sets preferred_locale
     *
     * @param \OpenAPI\Client\Model\AvailableLocalesEnum|null $preferred_locale preferred_locale
     *
     * @return $this
     */
    public function setPreferredLocale(?\OpenAPI\Client\Model\AvailableLocalesEnum $preferred_locale): static
    {
        if (is_null($preferred_locale)) {
            array_push($this->openAPINullablesSetToNull, 'preferred_locale');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('preferred_locale', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['preferred_locale'] = $preferred_locale;

        return $this;
    }

    /**
     * Gets afk_timeout
     *
     * @return \OpenAPI\Client\Model\AfkTimeouts|null
     */
    public function getAfkTimeout(): ?\OpenAPI\Client\Model\AfkTimeouts
    {
        return $this->container['afk_timeout'];
    }

    /**
     * Sets afk_timeout
     *
     * @param \OpenAPI\Client\Model\AfkTimeouts|null $afk_timeout afk_timeout
     *
     * @return $this
     */
    public function setAfkTimeout(?\OpenAPI\Client\Model\AfkTimeouts $afk_timeout): static
    {
        if (is_null($afk_timeout)) {
            array_push($this->openAPINullablesSetToNull, 'afk_timeout');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('afk_timeout', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['afk_timeout'] = $afk_timeout;

        return $this;
    }

    /**
     * Gets roles
     *
     * @return \OpenAPI\Client\Model\CreateGuildRequestRoleItem[]|null
     */
    public function getRoles(): ?array
    {
        return $this->container['roles'];
    }

    /**
     * Sets roles
     *
     * @param \OpenAPI\Client\Model\CreateGuildRequestRoleItem[]|null $roles roles
     *
     * @return $this
     */
    public function setRoles(?array $roles): static
    {
        if (is_null($roles)) {
            throw new InvalidArgumentException('non-nullable roles cannot be null');
        }
        $this->container['roles'] = $roles;

        return $this;
    }

    /**
     * Gets channels
     *
     * @return \OpenAPI\Client\Model\CreateGuildRequestChannelItem[]|null
     */
    public function getChannels(): ?array
    {
        return $this->container['channels'];
    }

    /**
     * Sets channels
     *
     * @param \OpenAPI\Client\Model\CreateGuildRequestChannelItem[]|null $channels channels
     *
     * @return $this
     */
    public function setChannels(?array $channels): static
    {
        if (is_null($channels)) {
            throw new InvalidArgumentException('non-nullable channels cannot be null');
        }
        $this->container['channels'] = $channels;

        return $this;
    }

    /**
     * Gets afk_channel_id
     *
     * @return string|null
     */
    public function getAfkChannelId(): ?string
    {
        return $this->container['afk_channel_id'];
    }

    /**
     * Sets afk_channel_id
     *
     * @param string|null $afk_channel_id afk_channel_id
     *
     * @return $this
     */
    public function setAfkChannelId(?string $afk_channel_id): static
    {
        if (is_null($afk_channel_id)) {
            throw new InvalidArgumentException('non-nullable afk_channel_id cannot be null');
        }

        if ((!preg_match("/^(0|[1-9][0-9]*)$/", ObjectSerializer::toString($afk_channel_id)))) {
            throw new InvalidArgumentException("invalid value for \$afk_channel_id when calling GuildCreateRequest., must conform to the pattern /^(0|[1-9][0-9]*)$/.");
        }

        $this->container['afk_channel_id'] = $afk_channel_id;

        return $this;
    }

    /**
     * Gets system_channel_id
     *
     * @return string|null
     */
    public function getSystemChannelId(): ?string
    {
        return $this->container['system_channel_id'];
    }

    /**
     * Sets system_channel_id
     *
     * @param string|null $system_channel_id system_channel_id
     *
     * @return $this
     */
    public function setSystemChannelId(?string $system_channel_id): static
    {
        if (is_null($system_channel_id)) {
            throw new InvalidArgumentException('non-nullable system_channel_id cannot be null');
        }

        if ((!preg_match("/^(0|[1-9][0-9]*)$/", ObjectSerializer::toString($system_channel_id)))) {
            throw new InvalidArgumentException("invalid value for \$system_channel_id when calling GuildCreateRequest., must conform to the pattern /^(0|[1-9][0-9]*)$/.");
        }

        $this->container['system_channel_id'] = $system_channel_id;

        return $this;
    }

    /**
     * Gets system_channel_flags
     *
     * @return int|null
     */
    public function getSystemChannelFlags(): ?int
    {
        return $this->container['system_channel_flags'];
    }

    /**
     * Sets system_channel_flags
     *
     * @param int|null $system_channel_flags system_channel_flags
     *
     * @return $this
     */
    public function setSystemChannelFlags(?int $system_channel_flags): static
    {
        if (is_null($system_channel_flags)) {
            array_push($this->openAPINullablesSetToNull, 'system_channel_flags');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('system_channel_flags', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['system_channel_flags'] = $system_channel_flags;

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

